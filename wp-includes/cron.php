<?php
/**
 * WordPress CRON API
 *
 * @package WordPress
 */

/**
 * Run scheduled callbacks or spawn cron for all scheduled events.
 *
 * @since 2.1.0
 *
 * @return null When doesn't need to run Cron.
 */
function wp_cron() {

	// Prevent infinite loops caused by lack of wp-cron.php
	if ( strpos($_SERVER['REQUEST_URI'], '/wp-cron.php') !== false || ( defined('DISABLE_WP_CRON') && DISABLE_WP_CRON ) )
		return;

	if ( false === $crons = _get_cron_array() )
		return;

	$gmt_time = microtime( true );
	$keys = array_keys( $crons );
	if ( isset($keys[0]) && $keys[0] > $gmt_time )
		return;

	$schedules = wp_get_schedules();
	foreach ( $crons as $timestamp => $cronhooks ) {
		if ( $timestamp > $gmt_time ) break;
		foreach ( (array) $cronhooks as $hook => $args ) {
			if ( isset($schedules[$hook]['callback']) && !call_user_func( $schedules[$hook]['callback'] ) )
				continue;
			spawn_cron( $gmt_time );
			break 2;
		}
	}
}
