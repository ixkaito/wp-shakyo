<?php
/**
 * Misc WordPress Administration API.
 *
 * @package WordPress
 * @subpackage Administration
 */

add_action( 'update_option_home', 'update_home_siteurl', 10, 2 );
add_action( 'update_option_siteurl', 'update_home_siteurl', 10, 2 );
add_action( 'update_option_page_on_front', 'update_home_siteurl', 10, 2 );

add_action( 'admin_head', 'wp_color_scheme_settings' );

add_action('admin_head', '_ipad_meta');

add_filter( 'heartbeat_received', 'wp_check_locked_posts', 10, 3 );

add_filter( 'heartbeat_received', 'wp_refresh_post_lock', 10, 3 );

add_filter( 'heartbeat_received', 'wp_refresh_post_nonces', 10, 3 );

/**
 * Disable suspension of Heartbeat on the Add/Edit Post screens.
 *
 * @since 3.8.0
 *
 * @param array $settings An array of Heartbeat settings.
 * @return array Filtered Heartbeat settings.
 */
function wp_heartbeat_set_suspension( $settings ) {
	global $pagenow;

	if ( 'post.php' === $pagenow || 'post-new.php' === $pagenow ) {
		$settings['suspension'] = 'disable';
	}

	return $settings;
}
add_filter( 'heartbeat_settings', 'wp_heartbeat_set_suspension' );

add_filter( 'heartbeat_received', 'heartbeat_autosave', 500, 2 );

add_action( 'post_edit_form_tag', 'post_form_autocomplete_off' );
