<?php
/**
 * A simple set of functions to check our version 1.0 update service.
 *
 * @package WordPress
 * @since 2.3.0
 */

/**
 * Schedule core, theme, and plugin update checks.
 *
 * @since 3.1.0
 */
function wp_schedule_update_checks() {
	if ( !wp_next_scheduled('wp_version_check') && !defined('WP_INSTALLING') )
		wp_schedule_event(time(), 'twicedaily', 'wp_version_check');

	if ( !wp_next_scheduled('wp_update_plugins') && !defined('WP_INSTALLING') )
		wp_schedule_event(time(), 'twicedaily', 'wp_update_plugins');

	if ( !wp_next_scheduled('wp_update_themes') && !defined('WP_INSTALLING') )
		wp_schedule_event(time(), 'twicedaily', 'wp_update_themes');

	if ( ! wp_next_scheduled( 'wp_maybe_auto_update' ) && ! defined( 'WP_INSTALLING' ) ) {
		// Schedule auto updates for 7 a.m. and 7 p.m. in the timezone of the site.
		$next = strtotime( 'today 7am' );
		$now = time();
		// Find the next instance of 7 a.m. or 7 p.m., but skip it if it is within 3 hours from now.
		while ( ( $now + 3 * HOUR_IN_SECONDS ) > $next ) {
			$next += 12 * HOUR_IN_SECONDS;
		}
		$next = $next - get_option( 'gmt_offset' ) * HOUR_IN_SECONDS;
		// Add a random number of minutes, so we don't have all sites trying to update exactly on the hour
		$next = $next + rand( 0, 59 ) * MINUTE_IN_SECONDS;
		wp_schedule_event( $next, 'twicedaily', 'wp_maybe_auto_update' );
	}
}

if ( ( ! is_main_site() && ! is_network_admin() ) || ( defined( 'DOING_AJAX' ) && DOING_AJAX ) )
	return;

add_action( 'admin_init', '_maybe_update_core' );
add_action( 'wp_version_check', 'wp_version_check' );
add_action( 'upgrader_process_complete', 'wp_version_check', 10, 0 );

add_action( 'load-plugins.php', 'wp_update_plugins' );
add_action( 'load-update.php', 'wp_update_plugins' );
add_action( 'load-update-core.php', 'wp_update_plugins' );
add_action( 'admin_init', '_maybe_update_plugins' );
add_action( 'wp_update_plugins', 'wp_update_plugins' );
add_action( 'upgrader_process_complete', 'wp_update_plugins', 10, 0 );

add_action( 'load-themes.php', 'wp_update_themes' );
add_action( 'load-update.php', 'wp_update_themes' );
add_action( 'load-update-core.php', 'wp_update_themes' );
add_action( 'admin_init', '_maybe_update_themes' );
add_action( 'wp_update_themes', 'wp_update_themes' );
add_action( 'upgrader_process_complete', 'wp_update_themes', 10, 0 );

add_action( 'wp_maybe_auto_update', 'wp_maybe_auto_update' );

add_action('init', 'wp_schedule_update_checks');
