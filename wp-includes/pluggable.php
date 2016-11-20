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

if ( !function_exists('get_userdata') ) :
/**
 * Retrieve user info by user ID.
 *
 * @since 0.71
 *
 * @param int $user_id User ID
 * @return WP_User|bool WP_User object on success, false on failure.
 */
function get_userdata( $user_id ) {
	return get_user_by( 'id', $user_id );
}
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
/**
 * Validates authentication cookie.
 *
 * The checks include making sure that the authentication cookie is set and
 * pulling in the contents (if $cookie is not used).
 *
 * Makes sure the cookie is not expired. Verifies the hash in cookie is what is
 * should be and compares the two.
 *
 * @since 2.5.0
 *
 * @param string $cookie Optional. If used, will validate contents instead of cookie's
 * @param string $scheme Optional. The cookie scheme to use: auth, secure_auth, or logged_in
 * @return bool|int False if invalid cookie, User ID if valid.
 */
function wp_validate_auth_cookie($cookie = '', $scheme = '') {
	if ( ! $cookie_elements = wp_parse_auth_cookie($cookie, $scheme) ) {
		/**
		 * Fires if an authentication cookie is malformed.
		 *
		 * @since 2.7.0
		 *
		 * @param string $cookie Malformed auth cookie.
		 * @param string $scheme Authentication scheme. Values include 'auth', 'secure_auth',
		 *                       or 'logged_in'.
		 */
		do_action( 'auth_cookie_malformed', $cookie, $scheme );
		return false;
	}

	$scheme = $cookie_elements['scheme'];
	$username = $cookie_elements['username'];
	$hmac = $cookie_elements['hmac'];
	$token = $cookie_elements['token'];
	$expired = $expiration = $cookie_elements['expiration'];

	// Allow a grace period for POST and AJAX requests
	if ( defined('DOING_AJAX') || 'POST' == $_SERVER['REQUEST_METHOD'] ) {
		$expired += HOUR_IN_SECONDS;
	}

	// Quick check to see if an honest cookie has expired
	if ( $expired < time() ) {
		/**
		 * Fires once an authentication cookie has expired.
		 *
		 * @since 2.7.0
		 *
		 * @param array $cookie_elements An array of data for the authentication cookie.
		 */
		do_action( 'auth_cookie_expired', $cookie_elements );
		return false;
	}

	$user = get_user_by('login', $username);
	if ( ! $user ) {
		/**
		 * Fires if a bad username is entered in the user authentication process.
		 *
		 * @since 2.7.0
		 *
		 * @param array $cookie_elements An array of data for the authentication cookie.
		 */
		do_action( 'auth_cookie_bad_username', $cookie_elements );
		return false;
	}

	$pass_frag = substr($user->user_pass, 8, 4);

	$key = wp_hash( $username . '|' . $pass_frag . '|' . $expiration . '|' . $token, $scheme );

	// If ext/hash is not present, compat.php's hash_hmac() does not support sha256.
	$algo = function_exists( 'hash' ) ? 'sha256' : 'sha1';
	$hash = hash_hmac( $algo, $username . '|' . $expiration . '|' . $token, $key );

	if ( ! hash_equals( $hash, $hmac ) ) {
		/**
		 * Fires if a bad authentication cookie hash is encountered.
		 *
		 * @since 2.7.0
		 *
		 * @param array $cookie_elements An array of data for the authentication cookie.
		 */
		do_action( 'auth_cookie_bad_hash', $cookie_elements );
		return false;
	}

	$manager = WP_Session_Tokens::get_instance( $user->ID );
	if ( ! $manager->verify( $token ) ) {
		do_action( 'auth_cookie_bad_session_token', $cookie_elements );
		return false;
	}

	// AJAX/POST grace period set above
	if ( $expiration < time() ) {
		$GLOBALS['login_grace_period'] = 1;
	}

	/**
	 * Fires once an authentication cookie has been validated.
	 *
	 * @since 2.7.0
	 *
	 * @param array   $cookie_elements An array of data for the authentication cookie.
	 * @param WP_User $user            User object.
	 */
	do_action( 'auth_cookie_valid', $cookie_elements, $user );

	return $user->ID;
}
endif;

if ( !function_exists('wp_generate_auth_cookie') ) :
endif;

if ( !function_exists('wp_parse_auth_cookie') ) :
/**
 * Parse a cookie into its components
 *
 * @since 2.7.0
 *
 * @param string $cookie
 * @param string $scheme Optional. The cookie scheme to use: auth, secure_auth, or logged_in
 * @return array Authentication cookie components
 */
function wp_parse_auth_cookie($cookie = '', $scheme = '') {
	if ( empty($cookie) ) {
		switch ($scheme){
			case 'auth':
				$cookie_name = AUTH_COOKIE;
				break;
			case 'secure_auth':
				$cookie_name = SECURE_AUTH_COOKIE;
				break;
			case "logged_in":
				$cookie_name = LOGGED_IN_COOKIE;
				break;
			default:
				if ( is_ssl() ) {
					$cookie_name = SECURE_AUTH_COOKIE;
					$scheme = 'secure_auth';
				} else {
					$cookie_name = AUTH_COOKIE;
					$scheme = 'auth';
				}
	    }

		if ( empty($_COOKIE[$cookie_name]) )
			return false;
		$cookie = $_COOKIE[$cookie_name];
	}

	$cookie_elements = explode('|', $cookie);
	if ( count( $cookie_elements ) !== 4 ) {
		return false;
	}

	list( $username, $expiration, $token, $hmac ) = $cookie_elements;

	return compact( 'username', 'expiration', 'token', 'hmac', 'scheme' );
}
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

