<?php
/**
 * WordPress User API
 *
 * @package WordPress
 * @subpackage Users
 */

/**
 * Validate the logged-in cookie.
 *
 * Checks the logged-in cookie if the previous auth cookie could not be
 * validated and parsed.
 *
 * This is a callback for the determine_current_user filter, rather than API.
 *
 * @since 3.9.0
 *
 * @param int|bool $user The user ID (or false) as received from the
 *                       determine_current_user filter.
 * @return int|bool User ID if validated, false otherwise. If a user ID from
 *                  an earlier filter callback is received, that value is returned.
 */
function wp_validate_logged_in_cookie( $user_id ) {
	if ( $user_id ) {
		return $user_id;
	}

	if ( is_blog_admin() || is_network_admin() || empty( $_COOKIE[LOGGED_IN_COOKIE] ) ) {
		return false;
	}

	return wp_validate_auth_cookie( $_COOKIE[LOGGED_IN_COOKIE], 'logged_in' );
}
