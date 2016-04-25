<?php
/**
 * Loads the correct template based on the visitor's url
 * @package WordPress
 */
if ( defined('WP_USE_THEMES') && WP_USE_THEMES )
	/**
	 * Fires before determining which template to load.
	 *
	 * @since 1.5.0
	 */
	do_action( 'template_redirect' );

/**
 * Filter whether to allow 'HEAD' requests to generate content.
 *
 * Provides a significant performance bump by exiting before the page
 * content loads for 'HEAD' requests. See #14348.
 *
 * @since 3.5.0
 *
 * @param bool $exit Whether to exit without generating any content for 'HEAD' requests. Default true.
 */
if ( 'HEAD' === $_SERVER['REQUEST_METHOD'] && apply_filters( 'exit_on_http_head', true ) )
	exit();

// Process feeds and trackbacks even if not using themes.
if ( is_robots() ) :
	/**
	 * Fired when the template loader determines a robots.txt request.
	 *
	 * @since 2.1.0
	 */
	do_action( 'do_robots' );
	return;
elseif ( is_feed() ) :
	do_feed();
	return;
elseif ( is_trackback() ) :
	include( ABSPATH . 'wp-trackback.php' );
	return;
endif;

var_dump(__FILE__);
