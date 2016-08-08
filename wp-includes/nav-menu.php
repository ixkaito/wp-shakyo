<?php
/**
 * Navigation Menu functions
 *
 * @package WordPress
 * @subpackage Nav_Menus
 * @since 3.0.0
 */

/**
 * Returns a navigation menu object.
 *
 * @since 3.0.0
 *
 * @uses get_term
 * @uses get_term_by
 *
 * @param string $menu Menu ID, slug, or name.
 * @return mixed false if $menu param isn't supplied or term does not exist, menu object if successful.
 */
function wp_get_nav_menu_object( $menu ) {
	if ( ! $menu )
		return false;

	$menu_obj = get_term( $menu, 'nav_menu' );

	if ( ! $menu_obj )
		$menu_obj = get_term_by( 'slug', $menu, 'nav_menu' );

	if ( ! $menu_obj )
		$menu_obj = get_term_by( 'name', $menu, 'nav_menu' );

	if ( ! $menu_obj )
		$menu_obj = false;

	return $menu_obj;
}

/**
 * Returns an array with the registered navigation menu locations and the menu assigned to it
 *
 * @since 3.0.0
 * @return array
 */

function get_nav_menu_locations() {
	$locations = get_theme_mod( 'nav_menu_locations' );
	return ( is_array( $locations ) ) ? $locations : array();
}
