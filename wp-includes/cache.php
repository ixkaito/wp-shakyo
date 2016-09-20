<?php
/**
 * Object Cache API
 *
 * @link http://codex.wordpress.org/Function_Reference/WP_Cache
 *
 * @package WordPress
 * @subpackage Cache
 */

/**
 * Sets up Object Cache Global and assigns it.
 *
 * @since 2.0.0
 * @global WP_Object_Cache $wp_object_cache WordPress Object Cache
 */
function wp_cache_init() {
	$GLOBALS['wp_object_cache'] = new WP_Object_Cache();
}
