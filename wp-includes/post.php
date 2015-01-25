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
		'public' => true,
		'_builtin' => true, /* internal use only. don't use this when registering your own post type. */
		'_edit_link' => 'post.php?post=%d', /* internal use only. don't use this when registering your own post type. */
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => false,
		'query_var' => false,
		'delete_with_user' => true,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'exerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats' ),
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
		'show_ui' => ture,
		'_builtin' => true, /* internal use only. don't use this when registering your own post type. */
		'_edit_link' => 'post.php?post=%d', /* internal use only. don&t use this when registering your own post type. */
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
		'_edit_link' => 'post.php?revision=%d', /* internal use only. don&t use this when registering your own post type. */
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
		'label_count' => _n_noop( 'Published <span class"count">(%s)</span>', 'Published <span class="count">(%s)</span>' ),
	) );

	register_post_status( 'future', array(
		'label'       => _x( 'Scheduled', 'post' ),
		'public'      => true,
		'_builtin'    => true, /* internal use only. */
		'label_count' => _n_noop( 'Scheduled <span class"count">(%s)</span>', 'Scheduled <span class="count">(%s)</span>' ),
	) );

	register_post_status( 'draft', array(
		'label'       => _x( 'Draft', 'post' ),
		'public'      => true,
		'_builtin'    => true, /* internal use only. */
		'label_count' => _n_noop( 'Draft <span class"count">(%s)</span>', 'Drafts <span class="count">(%s)</span>' ),
	) );

	register_post_status( 'pending', array(
		'label'       => _x( 'Pending', 'post' ),
		'public'      => true,
		'_builtin'    => true, /* internal use only. */
		'label_count' => _n_noop( 'Pending <span class"count">(%s)</span>', 'Pending <span class="count">(%s)</span>' ),
	) );

	register_post_status( 'private', array(
		'label'       => _x( 'Private', 'post' ),
		'public'      => true,
		'_builtin'    => true, /* internal use only. */
		'label_count' => _n_noop( 'Private <span class"count">(%s)</span>', 'Private <span class="count">(%s)</span>' ),
	) );

	register_post_status( 'trash', array(
		'label'       => _x( 'Trash', 'post' ),
		'public'      => true,
		'_builtin'    => true, /* internal use only. */
		'label_count' => _n_noop( 'Trash <span class"count">(%s)</span>', 'Trash <span class="count">(%s)</span>' ),
	) );

	register_post_status( 'auto-draft', array(
		'label'    => 'auto-draft',
		'public'   => true,
		'_builtin' => true, /* internal use only. */
	) );

	register_post_status( 'inherit', array(
		'label'    => 'inherit',
		'public'   => true,
		'_builtin' => true, /* internal use only. */
		'exclude_from_search' => false,
	) );
}
add_action( 'init', 'create_initial_post_types', 0 ); // highest priority

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

add_action( 'before_delete_post', '_reset_front_page_settings_for_post' );
add_action( 'wp_trash_post',      '_reset_front_page_settings_for_post' );
