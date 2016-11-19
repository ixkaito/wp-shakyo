<?php
/**
 * These functions can be replaced via plugins. If plugins do not redefine these
 * functions, then these will be used instead.
 *
 * @package WordPress
 */

if ( !function_exists('wp_set_current_user') ) :
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

if ( !function_exists('get_userdata') ) :
endif;

if ( !function_exists('get_user_by') ) :
endif;

if ( !function_exists('cache_users') ) :
endif;

if ( !function_exists( 'wp_mail' ) ) :
endif;

if ( !function_exists('wp_authenticate') ) :
endif;

if ( !function_exists('wp_logout') ) :
endif;

if ( !function_exists('wp_validate_auth_cookie') ) :
endif;

if ( !function_exists('wp_generate_auth_cookie') ) :
endif;

if ( !function_exists('wp_parse_auth_cookie') ) :
endif;

if ( !function_exists('wp_set_auth_cookie') ) :
endif;

if ( !function_exists('wp_clear_auth_cookie') ) :
endif;

if ( !function_exists('is_user_logged_in') ) :
endif;

if ( !function_exists('auth_redirect') ) :
endif;

if ( !function_exists('check_admin_referer') ) :
endif;

if ( !function_exists('check_ajax_referer') ) :
endif;

if ( !function_exists('wp_redirect') ) :
/**
 * Redirects to another page.
 *
 * @since 1.5.1
 *
 * @param string $location The path to redirect to.
 * @param int $status Status code to use.
 * @return bool False if $location is not provided, true otherwise.
 */
function wp_redirect($location, $status = 302) {
	global $is_IIS;

	/**
	 * Filter the redirect location.
	 *
	 * @since 2.1.0
	 *
	 * @param string $location The path to redirect to.
	 * @param int    $status   Status code to use.
	 */
	$location = apply_filters( 'wp_redirect', $location, $status );

	/**
	 * Filter the redirect status code.
	 *
	 * @since 2.3.0
	 *
	 * @param int    $status   Status code to use.
	 * @param string $location The path to redirect to.
	 */
	$status = apply_filters( 'wp_redirect_status', $status, $location );

	if ( ! $location )
		return false;

	$location = wp_sanitize_redirect($location);

	if ( !$is_IIS && php_sapi_name() != 'cgi-fcgi' )
		status_header($status); // This causes problems on IIS and some FastCGI setups

	header("Location: $location", true, $status);

	return true;
}
endif;

if ( !function_exists('wp_sanitize_redirect') ) :
/**
 * Sanitizes a URL for use in a redirect.
 *
 * @since 2.3.0
 *
 * @return string redirect-sanitized URL
 **/
function wp_sanitize_redirect($location) {
	$location = preg_replace('|[^a-z0-9-~+_.?#=&;,/:%!*]|i', '', $location);
	$location = wp_kses_no_null($location);

	// remove %0d and %0a from location
	$strip = array('%0d', '%0a', '%0D', '%0A');
	$location = _deep_replace($strip, $location);
	return $location;
}
endif;

if ( !function_exists('wp_safe_redirect') ) :
endif;

if ( !function_exists('wp_validate_redirect') ) :
endif;

if ( ! function_exists('wp_notify_postauthor') ) :
endif;

if ( !function_exists('wp_notify_moderator') ) :
endif;

if ( !function_exists('wp_password_change_notification') ) :
endif;

if ( !function_exists('wp_new_user_notification') ) :
endif;

if ( !function_exists('wp_nonce_tick') ) :
endif;

if ( !function_exists('wp_verify_nonce') ) :
endif;

if ( !function_exists('wp_create_nonce') ) :
endif;

if ( !function_exists('wp_salt') ) :
endif;

if ( !function_exists('wp_hash') ) :
endif;

if ( !function_exists('wp_hash_password') ) :
endif;

if ( !function_exists('wp_check_password') ) :
endif;

if ( !function_exists('wp_generate_password') ) :
endif;

if ( !function_exists('wp_rand') ) :
endif;

if ( !function_exists('wp_set_password') ) :
endif;

if ( !function_exists( 'get_avatar' ) ) :
endif;

if ( !function_exists( 'wp_text_diff' ) ) :
endif;

