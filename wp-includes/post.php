<?php
/**
 * Post functions and post utility function.
 *
 * @package WordPress
 * @subpackage Post
 * @since 1.5.0
 */

//
// Post Type Registration
//

/**
 * Creates the initial post types when 'init' action is fired.
 *
 * @since 2.9.0
 */
function create_initial_post_types() {
	register_post_type( 'post', array(
		'labels' => array(
			'name_admin_bar' => _x( 'Post', 'add new on admin bar' ),
		),
		'public'  => true,
		'_builtin' => true, /* internal use only. don't use this when registering your own post type. */
		'_edit_link' => 'post.php?post=%d', /* internal use only. don't use this when registering your own post type. */
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => false,
		'query_var' => false,
		'delete_with_user' => true,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats' ),
	) );

	register_post_type( 'page', array(
		'labels' => array(
			'name_admin_bar' => _x( 'Page', 'add new on admin bar' ),
		),
		'public' => true,
		'publicly_queryable' => false,
		'_builtin' => true, /* internal use only. don't use this when registering your own post type. */
		'_edit_link' => 'post.php?post=%d', /* internal use only. don't use this when registering your own post type. */
		'capability_type' => 'page',
		'map_meta_cap' => true,
		'hierarchical' => true,
		'rewrite' => false,
		'query_var' => false,
		'delete_with_user' => true,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'page-attributes', 'custom-fields', 'comments', 'revisions' ),
	) );

	register_post_type( 'attachment', array(
		'labels' => array(
			'name' => _x('Media', 'post type general name'),
			'name_admin_bar' => _x( 'Media', 'add new from admin bar' ),
			'add_new' => _x( 'Add New', 'add new media' ),
 			'edit_item' => __( 'Edit Media' ),
 			'view_item' => __( 'View Attachment Page' ),
		),
		'public' => true,
		'show_ui' => true,
		'_builtin' => true, /* internal use only. don't use this when registering your own post type. */
		'_edit_link' => 'post.php?post=%d', /* internal use only. don't use this when registering your own post type. */
		'capability_type' => 'post',
		'capabilities' => array(
			'create_posts' => 'upload_files',
		),
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => false,
		'query_var' => false,
		'show_in_nav_menus' => false,
		'delete_with_user' => true,
		'supports' => array( 'title', 'author', 'comments' ),
	) );
	add_post_type_support( 'attachment:audio', 'thumbnail' );
	add_post_type_support( 'attachment:video', 'thumbnail' );

	register_post_type( 'revision', array(
		'labels' => array(
			'name' => __( 'Revisions' ),
			'singular_name' => __( 'Revision' ),
		),
		'public' => false,
		'_builtin' => true, /* internal use only. don't use this when registering your own post type. */
		'_edit_link' => 'revision.php?revision=%d', /* internal use only. don't use this when registering your own post type. */
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => false,
		'query_var' => false,
		'can_export' => false,
		'delete_with_user' => true,
		'supports' => array( 'author' ),
	) );

	register_post_type( 'nav_menu_item', array(
		'labels' => array(
			'name' => __( 'Navigation Menu Items' ),
			'singular_name' => __( 'Navigation Menu Item' ),
		),
		'public' => false,
		'_builtin' => true, /* internal use only. don't use this when registering your own post type. */
		'hierarchical' => false,
		'rewrite' => false,
		'delete_with_user' => false,
		'query_var' => false,
	) );

	register_post_status( 'publish', array(
		'label'       => _x( 'Published', 'post' ),
		'public'      => true,
		'_builtin'    => true, /* internal use only. */
		'label_count' => _n_noop( 'Published <span class="count">(%s)</span>', 'Published <span class="count">(%s)</span>' ),
	) );

	register_post_status( 'future', array(
		'label'       => _x( 'Scheduled', 'post' ),
		'protected'   => true,
		'_builtin'    => true, /* internal use only. */
		'label_count' => _n_noop('Scheduled <span class="count">(%s)</span>', 'Scheduled <span class="count">(%s)</span>' ),
	) );

	register_post_status( 'draft', array(
		'label'       => _x( 'Draft', 'post' ),
		'protected'   => true,
		'_builtin'    => true, /* internal use only. */
		'label_count' => _n_noop( 'Draft <span class="count">(%s)</span>', 'Drafts <span class="count">(%s)</span>' ),
	) );

	register_post_status( 'pending', array(
		'label'       => _x( 'Pending', 'post' ),
		'protected'   => true,
		'_builtin'    => true, /* internal use only. */
		'label_count' => _n_noop( 'Pending <span class="count">(%s)</span>', 'Pending <span class="count">(%s)</span>' ),
	) );

	register_post_status( 'private', array(
		'label'       => _x( 'Private', 'post' ),
		'private'     => true,
		'_builtin'    => true, /* internal use only. */
		'label_count' => _n_noop( 'Private <span class="count">(%s)</span>', 'Private <span class="count">(%s)</span>' ),
	) );

	register_post_status( 'trash', array(
		'label'       => _x( 'Trash', 'post' ),
		'internal'    => true,
		'_builtin'    => true, /* internal use only. */
		'label_count' => _n_noop( 'Trash <span class="count">(%s)</span>', 'Trash <span class="count">(%s)</span>' ),
		'show_in_admin_status_list' => true,
	) );

	register_post_status( 'auto-draft', array(
		'label'    => 'auto-draft',
		'internal' => true,
		'_builtin' => true, /* internal use only. */
	) );

	register_post_status( 'inherit', array(
		'label'    => 'inherit',
		'internal' => true,
		'_builtin' => true, /* internal use only. */
		'exclude_from_search' => false,
	) );
}
add_action( 'init', 'create_initial_post_types', 0 ); // highest priority

/**
 * Register a post status. Do not use before init.
 *
 * A simple function for creating or modifying a post status based on the
 * parameters given. The function will accept an array (second optional
 * parameter), along with a string for the post status name.
 *
 * Arguments prefixed with an _underscore shouldn't be used by plugins and themes.
 *
 * @since 3.0.0
 * @uses $wp_post_statuses Inserts new post status object into the list
 *
 * @param string $post_status Name of the post status.
 * @param array|string $args {
 *     Optional. Array or string of post status arguments.
 *
 *     @type bool|string $label                     A descriptive name for the post status marked
 *                                                  for translation. Defaults to value of $post_status.
 *     @type bool|array  $label_count               Descriptive text to use for nooped plurals.
 *                                                  Default array of $label, twice
 *     @type bool        $exclude_from_search       Whether to exclude posts with this post status
 *                                                  from search results. Default is value of $internal.
 *     @type bool        $_builtin                  Whether the status is built-in. Core-use only.
 *                                                  Default false.
 *     @type bool        $public                    Whether posts of this status should be shown
 *                                                  in the front end of the site. Default true.
 *     @type bool        $internal                  Whether the status is for internal use only.
 *                                                  Default false.
 *     @type bool        $protected                 Whether posts with this status should be protected.
 *                                                  Default false.
 *     @type bool        $private                   Whether posts with this status should be private.
 *                                                  Default false.
 *     @type bool        $publicly_queryable        Whether posts with this status should be publicly-
 *                                                  queryable. Default is value of $public.
 *     @type bool        $show_in_admin_all_list    Whether to include posts in the edit listing for
 *                                                  their post type. Default is value of $internal.
 *     @type bool        $show_in_admin_status_list Show in the list of statuses with post counts at
 *                                                  the top of the edit listings,
 *                                                  e.g. All (12) | Published (9) | My Custom Status (2)
 *                                                  Default is value of $internal.
 * }
 */
function register_post_status( $post_status, $args = array() ) {
	global $wp_post_statuses;

	if (!is_array($wp_post_statuses))
		$wp_post_statuses = array();

	// Args prefixed with an underscore are reserved for internal use.
	$defaults = array(
		'label' => false,
		'label_count' => false,
		'exclude_from_search' => null,
		'_builtin' => false,
		'public' => null,
		'internal' => null,
		'protected' => null,
		'private' => null,
		'publicly_queryable' => null,
		'show_in_admin_status_list' => null,
		'show_in_admin_all_list' => null,
	);
	$args = wp_parse_args($args, $defaults);
	$args = (object) $args;

	$post_status = sanitize_key($post_status);
	$args->name = $post_status;

	// Set various defaults.
	if ( null === $args->public && null === $args->internal && null === $args->protected && null === $args->private )
		$args->internal = true;

	if ( null === $args->public  )
		$args->public = false;

	if ( null === $args->private  )
		$args->private = false;

	if ( null === $args->protected  )
		$args->protected = false;

	if ( null === $args->internal  )
		$args->internal = false;

	if ( null === $args->publicly_queryable )
		$args->publicly_queryable = $args->public;

	if ( null === $args->exclude_from_search )
		$args->exclude_from_search = $args->internal;

	if ( null === $args->show_in_admin_all_list )
		$args->show_in_admin_all_list = !$args->internal;

	if ( null === $args->show_in_admin_status_list )
		$args->show_in_admin_status_list = !$args->internal;

	if ( false === $args->label )
		$args->label = $post_status;

	if ( false === $args->label_count )
		$args->label_count = array( $args->label, $args->label );

	$wp_post_statuses[$post_status] = $args;

	return $args;
}

/**
 * Get a list of all registered post type objects.
 *
 * @since 2.9.0
 *
 * @global array $wp_post_types List of post types.
 *
 * @see register_post_type()
 *
 * @param array|string $args     Optional. An array of key => value arguments to match against
 *                               the post type objects. Default empty array.
 * @param string       $output   Optional. The type of output to return. Accepts post type 'names'
 *                               or 'objects'. Default 'names'.
 * @param string       $operator Optaionl. The logical operation to perform. 'or' means only one
 *                               element from the array needs to match; 'and' means all elements
 *                               must match. Default 'and'.
 * @return array A list of post type names or objects.
 */
function get_post_types( $args = array(), $output = 'names', $operator = 'and' ) {
	global $wp_post_types;

	$field = ('names' == $output) ? 'name' : false;

	return wp_filter_object_list($wp_post_types, $args, $operator, $field);
}

/**
 * Register a post type. Do not use before init.
 *
 * A function for creating or modifying a post type based on the
 * parameters given. The function will accept an array (second optional
 * parameter), along with a string for the post type name.
 *
 * @since 2.9.0
 *
 * @global array      $wp_post_types List of post types.
 * @global WP_Rewrite $wp_rewrite    Used for default feeds.
 * @global WP         $wp            Used to add query vars.
 *
 * @param string $post_type Post type key, must not exceed 20 characters.
 * @param array|string $args {
 *     Array or string of arguments for registering a post type.
 *
 *     @type string      $label                Name of the post type shown in the menu. Usually plural.
 *                                             Default is value of $labels['name'].
 *     @type array       $labels               An array of labels for this post type. If not set, post
 *                                             labels are inherited for non-hierarchical types and page
 *                                             labels for hierarchical ones. {@see get_post_type_labels()}.
 *     @type string      $description          A short descriptive summary of what the post type is.
 *                                             Default empty.
 *     @type bool        $public               Whether a post type is intended for use publicly either via
 *                                             the admin interface or by front-end users. While the default
 *                                             settings of $exclude_from_search, $publicly_queryable, $show_ui,
 *                                             and $show_in_nav_menus are inherited from public, each does not
 *                                             rely on this relationship and controls a very specific intention.
 *                                             Default false.
 *     @type bool        $hierarchical         Whether the post type is hierarchical (e.g. page). Default false.
 *     @type bool        $exclude_from_search  Whether to exclude posts with this post type from front end search
 *                                             results. Default is the opposite value of $public.
 *     @type bool        $publicly_queryable   Whether queries can be performed on the front end for the post type
 *                                             as part of {@see parse_request()}. Endpoints would include:
 *                                             * ?post_type={post_type_key}
 *                                             * ?{post_type_key}={single_post_slug}
 *                                             * ?{post_type_query_var}={single_post_slug}
 *                                             If not set, the default is inherited from $public.
 *     @type bool        $show_ui              Whether to generate a default UI for managing this post type in the
 *                                             admin. Default is value of $public.
 *     @type bool        $show_in_menu         Where to show the post type in the admin menu. To work, $show_ui
 *                                             must be true. If true, the post type is shown in its own top level
 *                                             menu. If false, no menu is shown. If a string of an existing top
 *                                             level menu (eg. 'tools.php' or 'edit.php?post_type=page'), the post
 *                                             type will be placed as a sub-menu of that.
 *                                             Default is value of $show_ui.
 *     @type bool        $show_in_nav_menus    Makes this post type available for selection in navigation menus.
 *                                             Default is value $public.
 *     @type bool        $show_in_admin_bar    Makes this post type available via the admin bar. Default is value
 *                                             of $show_in_menu.
 *     @type int         $menu_position        The position in the menu order the post type should appear. To work,
 *                                             $show_in_menu must be true. Default null (at the bottom).
 *     @type string      $menu_icon            The url to the icon to be used for this menu. Pass a base64-encoded
 *                                             SVG using a data URI, which will be colored to match the color scheme
 *                                             -- this should begin with 'data:image/svg+xml;base64,'. Pass the name
 *                                             of a Dashicons helper class to use a font icon, e.g.
 *                                             'dashicons-chart-pie'. Pass 'none' to leave div.wp-menu-image empty
 *                                             so an icon can be added via CSS. Defaults to use the posts icon.
 *     @type string      $capability_type      The string to use to build the read, edit, and delete capabilities.
 *                                             May be passed as an array to allow for alternative plurals when using
 *                                             this argument as a base to construct the capabilities, e.g.
 *                                             array('story', 'stories'). Default 'post'.
 *     @type array       $capabilities         Array of capabilities for this post type. $capability_type is used
 *                                             as a base to construct capabilities by default.
 *                                             {@see get_post_type_capabilities()}.
 *     @type bool        $map_meta_cap         Whether to use the internal default meta capability handling.
 *                                             Default false.
 *     @type array       $supports             An alias for calling {@see add_post_type_support()} directly.
 *                                             Defaults to array containing 'title' & 'editor'.
 *     @type callback    $register_meta_box_cb Provide a callback function that sets up the meta boxes for the
 *                                             edit form. Do remove_meta_box() and add_meta_box() calls in the
 *                                             callback. Default null.
 *     @type array       $taxonomies           An array of taxonomy identifiers that will be registered for the
 *                                             post type. Taxonomies can be registered later with
 *                                             {@see register_taxonomy()} or {@see register_taxonomy_for_object_type()}.
 *                                             Default empty array.
 *     @type bool|string $has_archive          Whether there should be post type archives, or if a string, the
 *                                             archive slug to use. Will generate the proper rewrite rules if
 *                                             $rewrite is enabled. Default false.
 *     @type bool|array  $rewrite              {
 *         Triggers the handling of rewrites for this post type. To prevent rewrite, set to false.
 *         Defaults to true, using $post_type as slug. To specify rewrite rules, an array can be
 *         passed with any of these keys:
 *
 *         @type string $slug       Customize the permastruct slug. Defaults to $post_type key.
 *         @type bool   $with_front Whether the permastruct should be prepended with WP_Rewrite::$front.
 *                                  Default true.
 *         @type bool   $feeds      Whether the feed permastruct should be built for this post type.
 *                                  Default is value of $has_archive.
 *         @type bool   $pages      Whether the permastruct should provide for pagination. Default true.
 *         @type const  $ep_mask    Endpoint mask to assign. If not specified and permalink_epmask is set,
 *                                  inherits from $permalink_epmask. If not specified and permalink_epmask
 *                                  is not set, defaults to EP_PERMALINK.
 *     }
 *     @type string|bool $query_var            Sets the query_var key for this post type. Defaults to $post_type
 *                                             key. If false, a post type cannot be loaded at
 *                                             ?{query_var}={post_slug}. If specified as a string, the query
 *                                             ?{query_var_string}={post_slug} will be valid.
 *     @type bool        $can_export           Whether to allow this post type to be exported. Default true.
 *     @type bool        $delete_with_user     Whether to delete posts of this type when deleting a user. If true,
 *                                             posts of this type belonging to the user will be moved to trash
 *                                             when then user is deleted. If false, posts of this type belonging
 *                                             to the user will *not* be trashed or deleted. If not set (the default),
 *                                             posts are trashed if post_type_supports('author'). Otherwise posts
 *                                             are not trashed or deleted. Default null.
 *     @type bool        $_builtin             FOR INTERNAL USE ONLY! True if this post type is a native or
 *                                             "built-in" post_type. Default false.
 *     @type string      $_edit_link           FOR INTERNAL USE ONLY! URL segment to use for edit link of
 *                                             this post type. Default 'post.php?post=%d'.
 * }
 * @return object|WP_Error The registered post type object, or an error object.
 */
function register_post_type( $post_type, $args = array() ) {
	global $wp_post_types, $wp_rewrite, $wp;

	if ( ! is_array( $wp_post_types ) )
		$wp_post_types = array();

	// Args prefixed with an underscore are reserved for internal use.
	$defaults = array(
		'labels'               => array(),
		'description'          => '',
		'public'               => false,
		'hierarchical'         => false,
		'exclude_from_search'  => null,
		'publicly_queryable'   => null,
		'show_ui'              => null,
		'show_in_menu'         => null,
		'show_in_nav_menus'    => null,
		'show_in_admin_bar'    => null,
		'menu_position'        => null,
		'menu_icon'            => null,
		'capability_type'      => 'post',
		'capabilities'         => array(),
		'map_meta_cap'         => null,
		'supports'             => array(),
		'register_meta_box_cb' => null,
		'taxonomies'           => array(),
		'has_archive'          => false,
		'rewrite'              => true,
		'query_var'            => true,
		'can_export'           => true,
		'delete_with_user'     => null,
		'_builtin'             => false,
		'_edit_link'           => 'post.php?post=%d',
	);
	$args = wp_parse_args( $args, $defaults );
	$args = (object) $args;

	$post_type = sanitize_key( $post_type );
	$args->name = $post_type;

	if ( strlen( $post_type ) > 20 ) {
		_doing_it_wrong( __FUNCTION__, __( 'Post types cannot exceed 20 characters in length' ), '4.0' );
		return new WP_Error( 'post_type_too_long', __( 'Post types cannot exceed 20 characters in length' ) );
	}

	// If not set, default to the setting for public.
	if ( null === $args->publicly_queryable )
		$args->publicly_queryable = $args->public;

	// If not set, default to the setting for public.
	if ( null === $args->show_ui )
		$args->show_ui = $args->public;

	// If not set, default to the setting for show_ui.
	if ( null === $args->show_in_menu || ! $args->show_ui )
		$args->show_in_menu = $args->show_ui;

	// If not set, default to the whether the full UI is shown.
	if ( null === $args->show_in_admin_bar )
		$args->show_in_admin_bar = true === $args->show_in_menu;

	// If not set, default to the setting for public.
	if ( null === $args->show_in_nav_menus )
		$args->show_in_nav_menus = $args->public;

	// If not set, default to true if not public, false if public.
	if ( null === $args->exclude_from_search )
		$args->exclude_from_search = !$args->public;

	// Back compat with quirky handling in version 3.0. #14122.
	if ( empty( $args->capabilities ) && null === $args->map_meta_cap && in_array( $args->capability_type, array( 'post', 'page' ) ) )
		$args->map_meta_cap = true;

	// If not set, default to false.
	if ( null === $args->map_meta_cap )
		$args->map_meta_cap = false;

	$args->cap = get_post_type_capabilities( $args );
	unset( $args->capabilities );

	if ( is_array( $args->capability_type ) )
		$args->capability_type = $args->capability_type[0];

	if ( ! empty( $args->supports ) ) {
		add_post_type_support( $post_type, $args->supports );
		unset( $args->supports );
	} elseif ( false !== $args->supports ) {
		// Add default features
		add_post_type_support( $post_type, array( 'title', 'editor' ) );
	}

	if ( false !== $args->query_var && ! empty( $wp ) ) {
		if ( true === $args->query_var )
			$args->query_var = $post_type;
		else
			$args->query_var = sanitize_title_with_dashes( $args->query_var );
		$wp->add_query_var( $args->query_var );
	}

	if ( false !== $args->rewrite && ( is_admin() || '' != get_option( 'permalink_structure' ) ) ) {
		if ( ! is_array( $args->rewrite ) )
			$args->rewrite = array();
		if ( empty( $args->rewrite['slug'] ) )
			$args->rewrite['slug'] = $post_type;
		if ( ! isset( $args->rewrite['with_front'] ) )
			$args->rewrite['with_front'] = true;
		if ( ! isset( $args->rewrite['pages'] ) )
			$args->rewrite['pages'] = true;
		if ( ! isset( $args->rewrite['feeds'] ) || ! $args->has_archive )
			$args->rewrite['feeds'] = (bool) $args->has_archive;
		if ( ! isset( $args->rewrite['ep_mask'] ) ) {
			if ( isset( $args->permalink_epmask ) )
				$args->rewrite['ep_mask'] = $args->permalink_epmask;
			else
				$args->rewrite['ep_mask'] = EP_PERMALINK;
		}

		if ( $args->hierarchical )
			add_rewrite_tag( "%$post_type%", '(.+?)', $args->query_var ? "{$args->query_var}=" : "post_type=$post_type&pagename=" );
		else
			add_rewrite_tag( "%$post_type%", '([^/]+)', $args->query_var ? "{$args->query_var}=" : "post_type=$post_type&name=" );

		if ( $args->has_archive ) {
			$archive_slug = $args->has_archive === true ? $args->rewrite['slug'] : $args->has_archive;
			if ( $args->rewrite['with_front'] )
				$archive_slug = substr( $wp_rewrite->front, 1 ) . $archive_slug;
			else
				$archive_slug = $wp_rewrite->root . $archive_slug;

			add_rewrite_rule( "{$archive_slug}/?$", "index.php?post_type=$post_type", 'top' );
			if ( $args->rewrite['feeds'] && $wp_rewrite->feeds ) {
				$feeds = '(' . trim( implode( '|', $wp_rewrite->feeds ) ) . ')';
				add_rewrite_rule( "{$archive_slug}/feed/$feeds/?$", "index.php?post_type=$post_type" . '&feed=$matches[1]', 'top' );
				add_rewrite_rule( "{$archive_slug}/$feeds/?$", "index.php?post_type=$post_type" . '&feed=$matches[1]', 'top' );
			}
			if ( $args->rewrite['pages'] )
				add_rewrite_rule( "{$archive_slug}/{$wp_rewrite->pagination_base}/([0-9]{1,})/?$", "index.php?post_type=$post_type" . '&paged=$matches[1]', 'top' );
		}

		$permastruct_args = $args->rewrite;
		$permastruct_args['feed'] = $permastruct_args['feeds'];
		add_permastruct( $post_type, "{$args->rewrite['slug']}/%$post_type%", $permastruct_args );
	}

	// Register the post type meta box if a custom callback was specified.
	if ( $args->register_meta_box_cb )
		add_action( 'add_meta_boxes_' . $post_type, $args->register_meta_box_cb, 10, 1 );

	$args->labels = get_post_type_labels( $args );
	$args->label = $args->labels->name;

	$wp_post_types[ $post_type ] = $args;

	add_action( 'future_' . $post_type, '_future_post_hook', 5, 2 );

	foreach ( $args->taxonomies as $taxonomy ) {
		register_taxonomy_for_object_type( $taxonomy, $post_type );
	}

	/**
	 * Fires after a post type is registered.
	 *
	 * @since 3.3.0
	 *
	 * @param string $post_type Post type.
	 * @param object $args      Arguments used to register the post type.
	 */
	do_action( 'registered_post_type', $post_type, $args );

	return $args;
}

/**
 * Build an object with all post type capabilities out of a post type object
 *
 * Post type capabilities use the 'capability_type' argument as a base, if the
 * capability is not set in the 'capabilities' argument array or if the
 * 'capabilities' argument is not supplied.
 *
 * The capability_type argument can optionally be registered as an array, with
 * the first value being singular and the second plural, e.g. array('story, 'stories')
 * Otherwise, an 's' will be added to the value for the plural form. After
 * registration, capability_type will always be a string of the singular value.
 *
 * By default, seven keys are accepted as part of the capabilities array:
 *
 * - edit_post, read_post, and delete_post are meta capabilities, which are then
 *   generally mapped to corresponding primitive capabilities depending on the
 *   context, which would be the post being edited/read/deleted and the user or
 *   role being checked. Thus these capabilities would generally not be granted
 *   directly to users or roles.
 *
 * - edit_posts - Controls whether objects of this post type can be edited.
 * - edit_others_posts - Controls whether objects of this type owned by other users
 *   can be edited. If the post type does not support an author, then this will
 *   behave like edit_posts.
 * - publish_posts - Controls publishing objects of this post type.
 * - read_private_posts - Controls whether private objects can be read.
 *
 * These four primitive capabilities are checked in core in various locations.
 * There are also seven other primitive capabilities which are not referenced
 * directly in core, except in map_meta_cap(), which takes the three aforementioned
 * meta capabilities and translates them into one or more primitive capabilities
 * that must then be checked against the user or role, depending on the context.
 *
 * - read - Controls whether objects of this post type can be read.
 * - delete_posts - Controls whether objects of this post type can be deleted.
 * - delete_private_posts - Controls whether private objects can be deleted.
 * - delete_published_posts - Controls whether published objects can be deleted.
 * - delete_others_posts - Controls whether objects owned by other users can be
 *   can be deleted. If the post type does not support an author, then this will
 *   behave like delete_posts.
 * - edit_private_posts - Controls whether private objects can be edited.
 * - edit_published_posts - Controls whether published objects can be edited.
 *
 * These additional capabilities are only used in map_meta_cap(). Thus, they are
 * only assigned by default if the post type is registered with the 'map_meta_cap'
 * argument set to true (default is false).
 *
 * @since 3.0.0
 *
 * @see register_post_type()
 * @see map_meta_cap()
 *
 * @param object $args Post type registration arguments.
 * @return object object with all the capabilities as member variables.
 */
function get_post_type_capabilities( $args ) {
	if ( ! is_array( $args->capability_type ) )
		$args->capability_type = array( $args->capability_type, $args->capability_type . 's' );

	// Singular base for meta capabilities, plural base for primitive capabilities.
	list( $singular_base, $plural_base ) = $args->capability_type;

	$default_capabilities = array(
		// Meta capabilities
		'edit_post'          => 'edit_'         . $singular_base,
		'read_post'          => 'read_'         . $singular_base,
		'delete_post'        => 'delete_'       . $singular_base,
		// Primitive capabilities used outside of map_meta_cap():
		'edit_posts'         => 'edit_'         . $plural_base,
		'edit_others_posts'  => 'edit_others_'  . $plural_base,
		'publish_posts'      => 'publish_'      . $plural_base,
		'read_private_posts' => 'read_private_' . $plural_base,
	);

	// Primitive capabilities used within map_meta_cap():
	if ( $args->map_meta_cap ) {
		$default_capabilities_for_mapping = array(
			'read'                   => 'read',
			'delete_posts'           => 'delete_'           . $plural_base,
			'delete_private_posts'   => 'delete_private_'   . $plural_base,
			'delete_published_posts' => 'delete_published_' . $plural_base,
			'delete_others_posts'    => 'delete_others_'    . $plural_base,
			'edit_private_posts'     => 'edit_private_'     . $plural_base,
			'edit_published_posts'   => 'edit_published_'   . $plural_base,
		);
		$default_capabilities = array_merge( $default_capabilities, $default_capabilities_for_mapping );
	}

	$capabilities = array_merge( $default_capabilities, $args->capabilities );

	// Post creation capability simply maps to edit_posts by default:
	if ( ! isset( $capabilities['create_posts'] ) )
		$capabilities['create_posts'] = $capabilities['edit_posts'];

	// Remember meta capabilities for future reference.
	if ( $args->map_meta_cap )
		_post_type_meta_capabilities( $capabilities );

	return (object) $capabilities;
}

/**
 * Store or return a list of post type meta caps for map_meta_cap().
 *
 * @since 3.1.0
 * @access private
 *
 * @param null|array $capabilities Post type meta capabilities.
 */
function _post_type_meta_capabilities( $capabilities = null ) {
	static $meta_caps = array();
	if ( null === $capabilities )
		return $meta_caps;
	foreach ( $capabilities as $core => $custom ) {
		if ( in_array( $core, array( 'read_post', 'delete_post', 'edit_post' ) ) )
			$meta_caps[ $custom ] = $core;
	}
}

/**
 * Build an object with all post type labels out of a post type object
 *
 * Accepted keys of the label array in the post type object:
 *
 * - name - general name for the post type, usually plural. The same and overridden
 *          by $post_type_object->label. Default is Posts/Pages
 * - singular_name - name for one object of this post type. Default is Post/Page
 * - add_new - Default is Add New for both hierarchical and non-hierarchical types.
 *             When internationalizing this string, please use a gettext context
 *             {@see http://codex.wordpress.org/I18n_for_WordPress_Developers#Disambiguation_by_context}
 *             matching your post type. Example: <code>_x('Add New', 'product');</code>.
 * - add_new_item - Default is Add New Post/Add New Page.
 * - edit_item - Default is Edit Post/Edit Page.
 * - new_item - Default is New Post/New Page.
 * - view_item - Default is View Post/View Page.
 * - search_items - Default is Search Posts/Search Pages.
 * - not_found - Default is No posts found/No pages found.
 * - not_found_in_trash - Default is No posts found in Trash/No pages found in Trash.
 * - parent_item_colon - This string isn't used on non-hierarchical types. In hierarchical
 *                       ones the default is 'Parent Page:'.
 * - all_items - String for the submenu. Default is All Posts/All Pages.
 * - menu_name - Default is the same as <code>name</code>.
 *
 * Above, the first default value is for non-hierarchical post types (like posts)
 * and the second one is for hierarchical post types (like pages).
 *
 * @since 3.0.0
 * @access private
 *
 * @param object $post_type_object Post type object.
 * @return object object with all the labels as member variables.
 */
function get_post_type_labels( $post_type_object ) {
	$nohier_vs_hier_defaults = array(
		'name' => array( _x('Posts', 'post type general name'), _x('Pages', 'post type general name') ),
		'singular_name' => array( _x('Post', 'post type singular name'), _x('Page', 'post type singular name') ),
		'add_new' => array( _x('Add New', 'post'), _x('Add New', 'page') ),
		'add_new_item' => array( __('Add New Post'), __('Add New Page') ),
		'edit_item' => array( __('Edit Post'), __('Edit Page') ),
		'new_item' => array( __('New Post'), __('New Page') ),
		'view_item' => array( __('View Post'), __('View Page') ),
		'search_items' => array( __('Search Posts'), __('Search Pages') ),
		'not_found' => array( __('No posts found.'), __('No pages found.') ),
		'not_found_in_trash' => array( __('No posts found in Trash.'), __('No pages found in Trash.') ),
		'parent_item_colon' => array( null, __('Parent Page:') ),
		'all_items' => array( __( 'All Posts' ), __( 'All Pages' ) )
	);
	$nohier_vs_hier_defaults['menu_name'] = $nohier_vs_hier_defaults['name'];

	$labels = _get_custom_object_labels( $post_type_object, $nohier_vs_hier_defaults );

	$post_type = $post_type_object->name;

	/**
	 * Filter the labels of a specific post type.
	 *
	 * The dynamic portion of the hook name, $post_type, refers to
	 * the post type slug.
	 *
	 * @since 3.5.0
	 *
	 * @see get_post_type_labels() for the full list of labels.
	 *
	 * @param array $labels Array of labels for the given post type.
	 */
	return apply_filters( "post_type_labels_{$post_type}", $labels );
}

/**
 * Build an object with custom-something object (post type, taxonomy) labels
 * out of a custom-something object
 *
 * @since 3.0.0
 * @access private
 *
 * @param object $object                  A custom-something object.
 * @param array  $nohier_vs_hier_defaults Hierarchical vs non-hierarchical default labels.
 */
function _get_custom_object_labels( $object, $nohier_vs_hier_defaults ) {
	$object->labels = (array) $object->labels;

	if ( isset( $object->label ) && empty( $object->labels['name'] ) )
		$object->labels['name'] = $object->label;

	if ( !isset( $object->labels['singular_name'] ) && isset( $object->labels['name'] ) )
		$object->labels['singular_name'] = $object->labels['name'];

	if ( ! isset( $object->labels['name_admin_bar'] ) )
		$object->labels['name_admin_bar'] = isset( $object->labels['singular_name'] ) ? $object->labels['singular_name'] : $object->name;

	if ( !isset( $object->labels['menu_name'] ) && isset( $object->labels['name'] ) )
		$object->labels['menu_name'] = $object->labels['name'];

	if ( !isset( $object->labels['all_items'] ) && isset( $object->labels['menu_name'] ) )
		$object->labels['all_items'] = $object->labels['menu_name'];

	foreach ( $nohier_vs_hier_defaults as $key => $value )
			$defaults[$key] = $object->hierarchical ? $value[1] : $value[0];

	$labels = array_merge( $defaults, $object->labels );
	return (object)$labels;
}

add_action( 'admin_menu', '_add_post_type_submenus' );

/**
 * Register support of certain features for a post type.
 *
 * All core features are directly associated with a functional area of the edit
 * screen, such as the editor or a meta box. Features include: 'title', 'editor',
 * 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes',
 * 'thumbnail', 'custom-fields', and 'post-formats'.
 *
 * Additionally, the 'revisions' feature dictates whether the post type will
 * store revisions, and the 'comments' feature dictates whether the comments
 * count will show on the edit screen.
 *
 * @since 3.0.0
 *
 * @param string       $post_type The post type for which to add the feature.
 * @param string|array $feature   The feature being added, accepts an array of
 *                                feature strings or a single string.
 */
function add_post_type_support( $post_type, $feature ) {
	global $_wp_post_type_features;

	$features = (array) $feature;
	foreach ($features as $feature) {
		if ( func_num_args() == 2 )
			$_wp_post_type_features[$post_type][$feature] = true;
		else
			$_wp_post_type_features[$post_type][$feature] = array_slice( func_get_args(), 2 );
	}
}

add_action( 'before_delete_post', '_reset_front_page_settings_for_post' );
add_action( 'wp_trash_post',      '_reset_front_page_settings_for_post' );
