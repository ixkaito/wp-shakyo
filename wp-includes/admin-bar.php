<?php
/**
 * Admin Bar
 *
 * This code handles the building and rendering of the press bar.
 */

/**
 * Instantisate the admin bar object and set it up as a global for access elsewhere.
 *
 * UNHOOKING THIS FUNCTION WILL NOT PROPERLY REMOVE THE ADMIN BAR.
 * For that, use show_admin_bar(false) or the 'show_admin_bar' filter.
 *
 * @since 3.1.0
 * @access private
 * @return bool Whether the admin bar was successfully initialized.
 */
function _wp_admin_bar_init() {
	global $wp_admin_bar;

	if ( ! is_admin_bar_showing() )
		return false;

	/* Load the admin bar class code ready for instantiation */
	require( ABSPATH . WPINC . '/class-wp-admin-bar.php' );

	/* Instantiate the admin bar */

	/**
	 * Filter the admin bar class to instantiate.
	 *
	 * @since 3.1.0
	 *
	 * @param string $wp_admin_bar_class Admin bar class to use. Default 'WP_Admin_Bar'.
	 */
	$admin_bar_class = apply_filters( 'wp_admin_bar_class', 'WP_Admin_Bar' );
	if ( class_exists( $admin_bar_class ) )
		$wp_admin_bar = new $admin_bar_class;
	else
		return false;

	$wp_admin_bar->initialize();
	$wp_admin_bar->add_menus();

	return true;
}
// Don't remove. Wrong way to disable.
add_action( 'template_redirect', '_wp_admin_bar_init', 0 );
add_action( 'admin_init', '_wp_admin_bar_init' );

add_action( 'wp_footer', 'wp_admin_bar_render', 1000 );
add_action( 'in_admin_header', 'wp_admin_bar_render', 0 );
