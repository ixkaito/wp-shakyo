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
