<?php
/**
 * Defines constants and global variables that can be overridden, generally in wp-config.php.
 *
 * @package WordPress
 */

/**
 * Defines initial WordPress constants
 *
 * @see wp_debug_mode()
 *
 * @since 3.0.0
 */
function wp_initial_constants() {
	global $blog_id;

	// set memory limits
	if ( !defined('WP_MEMORY_LIMIT') ) {
		if( is_multisite() ) {
			define('WP_MEMORY_LIMIT', '64M');
		} else {
			define('WP_MEMORY_LIMIT', '40M');
		}
	}

	if ( ! defined( 'WP_MAX_MEMORY_LIMIT' ) ) {
		define( 'WP_MAX_MEMORY_LIMIT', '256M' );
	}

	/**
	 * The $blog_id global, which you can change in the config allows you to create a simple
	 * multiple blog installation using just one WordPress and changing $blog_id around.
	 *
	 * @global int $blog_id
	 * @since 2.0.0
	 */
	if ( ! isset($blog_id) )
		$blog_id = 1;

	// set memory limits.
	if ( function_exists( 'memory_get_usage' ) ) {
		$current_limit = @ini_get( 'memory_limit' );
		$current_limit_int = intval( $current_limit );
		if ( false !== strpos( $current_limit, 'G' ) )
			$current_limit_int *= 1024;
		$wp_limit_int = intval( WP_MEMORY_LIMIT );
		if ( false !== strpos( WP_MEMORY_LIMIT, 'G' ) )
			$wp_limit_int *= 1024;

		if ( -1 != $current_limit && ( -1 == WP_MEMORY_LIMIT || $current_limit_int < $wp_limit_int ) )
			@ini_set( 'memory_limit', WP_MEMORY_LIMIT );
	}

	if ( !defined('WP_CONTENT_DIR') )
		define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' ); // no trailing slash, full paths only - WP_CONTENT_URL is defined further down

	// Add define('WP_DEBUG', true); to wp-config.php to enable display of notices during development.
	if ( !defined('WP_DEBUG') )
		define( 'WP_DEBUG', false );

	// Add define('WP_DEBUG_DISPLAY', null); to wp-config.php use the globally configured setting for
	// display_errors and not force errors to be displayed. Use false to force display_errors off.
	if ( !defined('WP_DEBUG_DISPLAY') )
		define( 'WP_DEBUG_DISPLAY', true );

	// Add define('WP_DEBUG_LOG', true); to enable error logging to wp-content/debug.log.
	if ( !defined('WP_DEBUG_LOG') )
		define('WP_DEBUG_LOG', false);

	if ( !defined('WP_CACHE') )
		define('WP_CACHE', false);

	/**
	 * Private
	 */
	if ( !defined('MEDIA_TRASH') )
		define('MEDIA_TRASH', false);

	if ( !defined('SHORTINIT') )
		define('SHORTINIT', false);

	// Constants for expressing human-readable intervals
	// in their respective number of seconds.
	define( 'MINUTE_IN_SECONDS', 60 );
	define( 'HOUR_IN_SECONDS',   60 * MINUTE_IN_SECONDS );
	define( 'DAY_IN_SECONDS',    24 * HOUR_IN_SECONDS   );
	define( 'WEEK_IN_SECONDS',    7 * DAY_IN_SECONDS    );
	define( 'YEAR_IN_SECONDS',  365 * DAY_IN_SECONDS    );
}
