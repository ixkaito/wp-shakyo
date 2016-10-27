<?php
/**
 * Taxonomy API
 *
 * @package WordPress
 * @subpackage Taxonomy
 * @since 2.3.0
 */

//
// Taxonomy Registration
//

/**
 * Creates the initial taxonomies.
 *
 * This function fires twice: in wp-settings.php before plugins are loaded (for
 * backwards compatibility reasons), and again on the 'init' action. We must avoid
 * registering rewrite rules before the 'init' action.
 */
function create_initial_taxonomies() {
	global $wp_rewrite;

	if ( ! did_action( 'init' ) ) {
		$rewrite = array( 'category' => false, 'post_tag' => false, 'post_format' => false );
	} else {

		/**
		 * Filter the post formats rewrite base.
		 *
		 * @since 3.1.0
		 *
		 * @param string $context Context of the rewrite base. Default 'type'.
		 */
		$post_format_base = apply_filters( 'post_format_rewrite_base', 'type' );
		$rewrite = array(
			'category' => array(
				'hierarchical' => true,
				'slug' => get_option('category_base') ? get_option('category_base') : 'category',
				'with_front' => ! get_option('category_base') || $wp_rewrite->using_index_permalinks(),
				'ep_mask' => EP_CATEGORIES,
			),
			'post_tag' => array(
				'slug' => get_option('tag_base') ? get_option('tag_base') : 'tag',
				'with_front' => ! get_option('tag_base') || $wp_rewrite->using_index_permalinks(),
				'ep_mask' => EP_TAGS,
			),
			'post_format' => $post_format_base ? array( 'slug' => $post_format_base ) : false,
		);
	}

	register_taxonomy( 'category', 'post', array(
		'hierarchical' => true,
		'query_var' => 'category_name',
		'rewrite' => $rewrite['category'],
		'public' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'_builtin' => true,
	) );

	register_taxonomy( 'post_tag', 'post', array(
	 	'hierarchical' => false,
		'query_var' => 'tag',
		'rewrite' => $rewrite['post_tag'],
		'public' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'_builtin' => true,
	) );

	register_taxonomy( 'nav_menu', 'nav_menu_item', array(
		'public' => false,
		'hierarchical' => false,
		'labels' => array(
			'name' => __( 'Navigation Menus' ),
			'singular_name' => __( 'Navigation Menu' ),
		),
		'query_var' => false,
		'rewrite' => false,
		'show_ui' => false,
		'_builtin' => true,
		'show_in_nav_menus' => false,
	) );

	register_taxonomy( 'link_category', 'link', array(
		'hierarchical' => false,
		'labels' => array(
			'name' => __( 'Link Categories' ),
			'singular_name' => __( 'Link Category' ),
			'search_items' => __( 'Search Link Categories' ),
			'popular_items' => null,
			'all_items' => __( 'All Link Categories' ),
			'edit_item' => __( 'Edit Link Category' ),
			'update_item' => __( 'Update Link Category' ),
			'add_new_item' => __( 'Add New Link Category' ),
			'new_item_name' => __( 'New Link Category Name' ),
			'separate_items_with_commas' => null,
			'add_or_remove_items' => null,
			'choose_from_most_used' => null,
		),
		'capabilities' => array(
			'manage_terms' => 'manage_links',
			'edit_terms'   => 'manage_links',
			'delete_terms' => 'manage_links',
			'assign_terms' => 'manage_links',
		),
		'query_var' => false,
		'rewrite' => false,
		'public' => false,
		'show_ui' => false,
		'_builtin' => true,
	) );

	register_taxonomy( 'post_format', 'post', array(
		'public' => true,
		'hierarchical' => false,
		'labels' => array(
			'name' => _x( 'Format', 'post format' ),
			'singular_name' => _x( 'Format', 'post format' ),
		),
		'query_var' => true,
		'rewrite' => $rewrite['post_format'],
		'show_ui' => false,
		'_builtin' => true,
		'show_in_nav_menus' => current_theme_supports( 'post-formats' ),
	) );
}
add_action( 'init', 'create_initial_taxonomies', 0 ); // highest priority

/**
 * Create or modify a taxonomy object. Do not use before init.
 *
 * A simple function for creating or modifying a taxonomy object based on the
 * parameters given. The function will accept an array (third optional
 * parameter), along with strings for the taxonomy name and another string for
 * the object type.
 *
 * Nothing is returned, so expect error maybe or use taxonomy_exists() to check
 * whether taxonomy exists.
 *
 * Optional $args contents:
 *
 * - label - Name of the taxonomy shown in the menu. Usually plural. If not set, labels['name'] will be used.
 * - labels - An array of labels for this taxonomy.
 *     * By default tag labels are used for non-hierarchical types and category labels for hierarchical ones.
 *     * You can see accepted values in {@link get_taxonomy_labels()}.
 * - description - A short descriptive summary of what the taxonomy is for. Defaults to blank.
 * - public - If the taxonomy should be publicly queryable; //@TODO not implemented.
 *     * Defaults to true.
 * - hierarchical - Whether the taxonomy is hierarchical (e.g. category). Defaults to false.
 * - show_ui - Whether to generate a default UI for managing this taxonomy in the admin.
 *     * If not set, the default is inherited from public.
 * - show_in_menu - Whether to show the taxonomy in the admin menu.
 *     * If true, the taxonomy is shown as a submenu of the object type menu.
 *     * If false, no menu is shown.
 *     * show_ui must be true.
 *     * If not set, the default is inherited from show_ui.
 * - show_in_nav_menus - Makes this taxonomy available for selection in navigation menus.
 *     * If not set, the default is inherited from public.
 * - show_tagcloud - Whether to list the taxonomy in the Tag Cloud Widget.
 *     * If not set, the default is inherited from show_ui.
 * - show_admin_column - Whether to display a column for the taxonomy on its post type listing screens.
 *     * Defaults to false.
 * - meta_box_cb - Provide a callback function for the meta box display.
 *     * If not set, defaults to post_categories_meta_box for hierarchical taxonomies
 *     and post_tags_meta_box for non-hierarchical.
 *     * If false, no meta box is shown.
 * - capabilities - Array of capabilities for this taxonomy.
 *     * You can see accepted values in this function.
 * - rewrite - Triggers the handling of rewrites for this taxonomy. Defaults to true, using $taxonomy as slug.
 *     * To prevent rewrite, set to false.
 *     * To specify rewrite rules, an array can be passed with any of these keys
 *         * 'slug' => string Customize the permastruct slug. Defaults to $taxonomy key
 *         * 'with_front' => bool Should the permastruct be prepended with WP_Rewrite::$front. Defaults to true.
 *         * 'hierarchical' => bool Either hierarchical rewrite tag or not. Defaults to false.
 *         * 'ep_mask' => const Assign an endpoint mask.
 *             * If not specified, defaults to EP_NONE.
 * - query_var - Sets the query_var key for this taxonomy. Defaults to $taxonomy key
 *     * If false, a taxonomy cannot be loaded at ?{query_var}={term_slug}
 *     * If specified as a string, the query ?{query_var_string}={term_slug} will be valid.
 * - update_count_callback - Works much like a hook, in that it will be called when the count is updated.
 *     * Defaults to _update_post_term_count() for taxonomies attached to post types, which then confirms
 *       that the objects are published before counting them.
 *     * Defaults to _update_generic_term_count() for taxonomies attached to other object types, such as links.
 * - _builtin - true if this taxonomy is a native or "built-in" taxonomy. THIS IS FOR INTERNAL USE ONLY!
 *
 * @since 2.3.0
 * @uses $wp_taxonomies Inserts new taxonomy object into the list
 * @uses $wp Adds query vars
 *
 * @param string $taxonomy Taxonomy key, must not exceed 32 characters.
 * @param array|string $object_type Name of the object type for the taxonomy object.
 * @param array|string $args See optional args description above.
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
function register_taxonomy( $taxonomy, $object_type, $args = array() ) {
	global $wp_taxonomies, $wp;

	if ( ! is_array( $wp_taxonomies ) )
		$wp_taxonomies = array();

	$defaults = array(
		'labels'                => array(),
		'description'           => '',
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => null,
		'show_in_menu'          => null,
		'show_in_nav_menus'     => null,
		'show_tagcloud'         => null,
		'show_admin_column'     => false,
		'meta_box_cb'           => null,
		'capabilities'          => array(),
		'rewrite'               => true,
		'query_var'             => $taxonomy,
		'update_count_callback' => '',
		'_builtin'              => false,
	);
	$args = wp_parse_args( $args, $defaults );

	if ( strlen( $taxonomy ) > 32 ) {
		_doing_it_wrong( __FUNCTION__, __( 'Taxonomies cannot exceed 32 characters in length' ), '4.0' );
		return new WP_Error( 'taxonomy_too_long', __( 'Taxonomies cannot exceed 32 characters in length' ) );
	}

	if ( false !== $args['query_var'] && ! empty( $wp ) ) {
		if ( true === $args['query_var'] )
			$args['query_var'] = $taxonomy;
		else
			$args['query_var'] = sanitize_title_with_dashes( $args['query_var'] );
		$wp->add_query_var( $args['query_var'] );
	}

	if ( false !== $args['rewrite'] && ( is_admin() || '' != get_option( 'permalink_structure' ) ) ) {
		$args['rewrite'] = wp_parse_args( $args['rewrite'], array(
			'with_front' => true,
			'hierarchical' => false,
			'ep_mask' => EP_NONE,
		) );

		if ( empty( $args['rewrite']['slug'] ) )
			$args['rewrite']['slug'] = sanitize_title_with_dashes( $taxonomy );

		if ( $args['hierarchical'] && $args['rewrite']['hierarchical'] )
			$tag = '(.+?)';
		else
			$tag = '([^/]+)';

		add_rewrite_tag( "%$taxonomy%", $tag, $args['query_var'] ? "{$args['query_var']}=" : "taxonomy=$taxonomy&term=" );
		add_permastruct( $taxonomy, "{$args['rewrite']['slug']}/%$taxonomy%", $args['rewrite'] );
	}

	// If not set, default to the setting for public.
	if ( null === $args['show_ui'] )
		$args['show_ui'] = $args['public'];

	// If not set, default to the setting for show_ui.
	if ( null === $args['show_in_menu' ] || ! $args['show_ui'] )
		$args['show_in_menu' ] = $args['show_ui'];

	// If not set, default to the setting for public.
	if ( null === $args['show_in_nav_menus'] )
		$args['show_in_nav_menus'] = $args['public'];

	// If not set, default to the setting for show_ui.
	if ( null === $args['show_tagcloud'] )
		$args['show_tagcloud'] = $args['show_ui'];

	$default_caps = array(
		'manage_terms' => 'manage_categories',
		'edit_terms'   => 'manage_categories',
		'delete_terms' => 'manage_categories',
		'assign_terms' => 'edit_posts',
	);
	$args['cap'] = (object) array_merge( $default_caps, $args['capabilities'] );
	unset( $args['capabilities'] );

	$args['name'] = $taxonomy;
	$args['object_type'] = array_unique( (array) $object_type );

	$args['labels'] = get_taxonomy_labels( (object) $args );
	$args['label'] = $args['labels']->name;

	// If not set, use the default meta box
	if ( null === $args['meta_box_cb'] ) {
		if ( $args['hierarchical'] )
			$args['meta_box_cb'] = 'post_categories_meta_box';
		else
			$args['meta_box_cb'] = 'post_tags_meta_box';
	}

	$wp_taxonomies[ $taxonomy ] = (object) $args;

	// register callback handling for metabox
 	add_filter( 'wp_ajax_add-' . $taxonomy, '_wp_ajax_add_hierarchical_term' );

	/**
	 * Fires after a taxonomy is registered.
	 *
	 * @since 3.3.0
	 *
	 * @param string       $taxonomy    Taxonomy slug.
	 * @param array|string $object_type Object type or array of object types.
	 * @param array        $args        Array of taxonomy registration arguments.
	 */
	do_action( 'registered_taxonomy', $taxonomy, $object_type, $args );
}
