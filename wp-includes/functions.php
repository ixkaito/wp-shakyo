<?php
/**
 * Main WordPress API
 *
 * @package WordPress
 */

require( ABSPATH . WPINC . '/option.php' );

/**
 * Get the header information to prevent caching.
 *
 * The several different headers cover the different ways cache prevention
 * is handled by different browsers
 *
 * @since 2.8.0
 *
 * @return array The associative array of header names and field values.
 */
function wp_get_nocache_headers() {
	$headers = array(
		'Expires' => 'Wed, 11 Jan 1984 05:00:00 GMT',
		'Cache-Control' => 'no-cache, must-revalidate, max-age=0',
		'Pragma' => 'no-cache',
	);

	if ( function_exists('apply_filters') ) {
		/**
		 * Filter the cache-controlling headers.
		 *
		 * @since 2.8.0
		 *
		 * @see wp_get_nocache_headers()
		 *
		 * @param array $headers {
		 *     Header names and field values.
		 *
		 *     @type string $Expires       Expires header.
		 *     @type string $Cache-Control Cache-Control header.
		 *     @type string $Pragma        Pragma header.
		 * }
		 */
		$headers = (array) apply_filters( 'nocache_headers', $headers );
	}
	$headers['Last-Modified'] = false;
	return $headers;
}

/**
 * Set the headers to prevent caching for the different browsers.
 *
 * Different browsers support different nocache headers, so several
 * headers must be sent so that all of them get the point that no
 * caching should occur.
 *
 * @since 2.0.0
 *
 * @see wp_get_nocache_headers()
 */
function nocache_headers() {
	$headers = wp_get_nocache_headers();

	unset( $headers['Last-Modified'] );

	// In PHP 5.3+, make sure we are not sending a Last-Modified header.
	if ( function_exists( 'header_remove' ) ) {
		@header_remove( 'Last-Modified' );
	} else {
		// In PHP 5.2, send an empty Last-Modified header, but only as a
		// last resort to override a header already sent. #WP23021
		foreach ( headers_list() as $header ) {
			if ( 0 === stripos( $header, 'Last-Modified' ) ) {
				$headers['Last-Modified'] = '';
				break;
			}
		}
	}

	foreach( $headers as $name => $field_value )
		@header("{$name}: {$field_value}");
}

/**
 * Test whether blog is already installed.
 *
 * The cache will be checked first. If you have a cache plugin, which saves
 * the cache values, then this will work. If you use the default WordPress
 * cache, and the database goes away, then you might have problems.
 *
 * Checks for the 'siteurl' option for whether WordPress is installed.
 *
 * @since 2.1.0
 *
 * @global wpdb $wpdb WordPress database access abstraction object.
 *
 * @return bool Whether the blog is already installed.
 */
function is_blog_installed() {
	global $wpdb;

	/*
	 * Check cache first. If options table goes away and we have true
	 * cached, oh well.
	 */
	if ( wp_cache_get( 'is_blog_installed' ) )
		return true;

	$suppress = $wpdb->suppress_errors();
	if ( ! defined( 'WP_INSTALLING' ) ) {
		$alloptions = wp_load_alloptions();
	}
	// If siteurl is not set to autoload, check it specifically
	if ( !isset( $alloptions['siteurl'] ) )
		$installed = $wpdb->get_var( "SELECT option_value FROM $wpdb->options WHERE option_name = 'siteurl'" );
	else
		$installed = $alloptions['siteurl'];
	$wpdb->suppress_errors( $suppress );

	$installed = !empty( $installed );
	wp_cache_set( 'is_blog_installed', $installed );

	if ( $installed )
		return true;

	// If visiting repair.php, return true and let it take over.
	if ( defined( 'WP_REPAIRING' ) )
		return true;

	$suppress = $wpdb->suppress_errors();

	/*
	 * Loop over the WP tables. If none exist, then scratch install is allowed.
	 * If one or more exist, suggest table repair since we got here because the
	 * options table could not be accessed.
	 */
	$wp_tables = $wpdb->tables();
	foreach ( $wp_tables as $table ) {
		// The existence of custom user tables shouldn't suggest an insane state or prevent a clean install.
		if ( defined( 'CUSTOM_USER_TABLE' ) && CUSTOM_USER_TABLE == $table )
			continue;
		if ( defined( 'CUSTOM_USER_META_TABLE' ) && CUSTOM_USER_META_TABLE == $table )
			continue;

		if ( ! $wpdb->get_results( "DESCRIBE $table;" ) )
			continue;

		// One or more tables exist. We are insane.

		wp_load_translations_early();

		// Die with a DB error.
		$wpdb->error = sprintf( __( 'One or more database tables are unavailable. The database may need to be <a href="%s">repaired</a>.' ), 'maint/repair.php?referrer=is_blog_installed' );
		dead_db();
	}

	$wpdb->suppress_errors( $suppress );

	wp_cache_set( 'is_blog_installed', false );

	return false;
}

/**
 * Flush all output buffers for PHP 5.2.
 *
 * Make sure all output buffers are flushed before our singletons are destroyed.
 *
 * @since 2.2.0
 */
function wp_ob_end_flush_all() {
	$levels = ob_get_level();
	for ($i=0; $i<$levels; $i++)
		ob_end_flush();
}

/**
 * Temporarily suspend cache additions.
 *
 * Stops more data being added to the cache, but still allows cache retrieval.
 * This is useful for actions, such as imports, when a lot of data would otherwise
 * be almost uselessly added to the cache.
 *
 * Suspension lasts for a single page load at most. Remember to call this
 * function again if you wish to re-enable cache adds earlier.
 *
 * @since 3.3.0
 *
 * @param bool $suspend Optional. Suspends additions if true, re-enables them if false.
 * @return bool The current suspend setting
 */
function wp_suspend_cache_addition( $suspend = null ) {
	static $_suspend = false;

	if ( is_bool( $suspend ) )
		$_suspend = $suspend;

	return $_suspend;
}
