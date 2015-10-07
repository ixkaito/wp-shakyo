<?php
/**
 * These functions can be replaced via plugins. If plugins do not redefine these
 * functions, then these will be used instead.
 *
 * @package WordPress
 */

if ( !function_exists('wp_set_current_user') ) :
/**
 * Changes the current user by ID or name.
 *
 * Set $id to null and specify a name if you do not know a user's ID.
 *
 * Some WordPress functionality is based on the current user and not based on
 * the signed in user. Therefore, it opens the ability to edit and perform
 * actions on users who aren't signed in.
 *
 * @since 2.0.3
 * @global object $current_user The current user object which holds the user data.
 *
 * @param int $id User ID
 * @param string $name User's username
 * @return WP_User Current user User object
 */
function wp_set_current_user($id, $name = '') {
	global $current_user;

	if ( isset( $current_user ) && ( $current_user instanceof WP_User ) && ( $id == $current_user->ID ) )
		return $current_user;

	$current_user = new WP_User( $id, $name );

	setup_userdata( $current_user->ID );

	/**
	 * Fires after the current user is set.
	 *
	 * @since 2.0.1
	 */
	do_action( 'set_current_user' );

	return $current_user;
}
endif;

if ( !function_exists('wp_get_current_user') ) :
/**
 * Retrieve the current user object.
 *
 * @since 2.0.3
 *
 * @return WP_User Current user WP_User object
 */
function wp_get_current_user() {
	global $current_user;

	get_currentuserinfo();

	return $current_user;
}
endif;

if ( !function_exists('get_currentuserinfo') ) :
/**
 * Populate global variables with information about the currently logged in user.
 *
 * Will set the current user, if the current user is not set. The current user
 * will be set to the logged-in person. If no user is logged-in, then it will
 * set the current user to 0, which is invalid and won't have any permissions.
 *
 * @since 0.71
 *
 * @uses $current_user Checks if the current user is set
 * @uses wp_validate_auth_cookie() Retrieves current logged in user.
 *
 * @return bool|null False on XML-RPC Request and invalid auth cookie. Null when current user set.
 */
function get_currentuserinfo() {
	global $current_user;

	if ( ! empty( $current_user ) ) {
		if ( $current_user instanceof WP_User )
			return;

		// Upgrade stdClass to WP_User
		if ( is_object( $current_user ) && isset( $current_user->ID ) ) {
			$cur_id = $current_user->ID;
			$current_user = null;
			wp_set_current_user( $cur_id );
			return;
		}

		// $current_user has a junk value. Force to WP_User with ID 0.
		$current_user = null;
		wp_set_current_user( 0 );
		return false;
	}

	if ( defined('XMLRPC_REQUEST') && XMLRPC_REQUEST ) {
		wp_set_current_user( 0 );
		return false;
	}

	/**
	 * Filter the current user.
	 *
	 * The default filters use this to determine the current user from the
	 * request's cookies, if available.
	 *
	 * Returning a value of false will effectively short-circuit setting
	 * the current user.
	 *
	 * @since 3.9.0
	 *
	 * @param int|bool $user_id User ID if one has been determined, false otherwise.
	 */
	$user_id = apply_filters( 'determine_current_user', false );
	if ( ! $user_id ) {
		wp_set_current_user( 0 );
		return false;
	}

	wp_set_current_user( $user_id );
}
endif;