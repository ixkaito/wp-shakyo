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
endif;

if ( !function_exists('get_currentuserinfo') ) :
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

