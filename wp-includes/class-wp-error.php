<?php
/**
 * WordPress Error API.
 *
 * Contains the WP_Error class and the is_wp_error() function.
 *
 * @package WordPress
 */

/**
 * Check whether variable is a WordPress Error.
 *
 * Returns true if $thing is an object of the WP_Error class.
 *
 * @since 2.1.0
 *
 * @param mixed $thing Check if unknown variable is a WP_Error object.
 * @return bool True, if WP_Error. False, if not WP_Error.
 */
function is_wp_error($thing) {
	if ( is_object($thing) && is_a($thing, 'WP_Error') )
		return true;
	return false;
}
