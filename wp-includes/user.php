<?php
/**
 * WordPress User API
 *
 * @package WordPress
 * @subpackage Users
 */

/**
 * Authenticate user with remember capability.
 *
 * The credentials is an array that has 'user_login', 'user_password', and
 * 'remember' indices. If the credentials is not given, then the log in form
 * will be assumed and used if set.
 *
 * The various authentication cookies will be set by this function and will be
 * set for a longer period depending on if the 'remember' credential is set to
 * true.
 *
 * @since 2.5.0
 *
 * @param array $credentials Optional. User info in order to sign on.
 * @param bool $secure_cookie Optional. Whether to use secure cookie.
 * @return WP_User|WP_Error WP_User on success, WP_Error on failure.
 */
function wp_signon( $credentials = array(), $secure_cookie = '' ) {
	if ( empty($credentials) ) {
		if ( ! empty($_POST['log']) )
			$credentials['user_login'] = $_POST['log'];
		if ( ! empty($_POST['pwd']) )
			$credentials['user_password'] = $_POST['pwd'];
		if ( ! empty($_POST['rememberme']) )
			$credentials['remember'] = $_POST['rememberme'];
	}

	if ( !empty($credentials['remember']) )
		$credentials['remember'] = true;
	else
		$credentials['remember'] = false;

	/**
	 * Fires before the user is authenticated.
	 *
	 * The variables passed to the callbacks are passed by reference,
	 * and can be modified by callback functions.
	 *
	 * @since 1.5.1
	 *
	 * @todo Decide whether to deprecate the wp_authenticate action.
	 *
	 * @param string $user_login    Username, passed by reference.
	 * @param string $user_password User password, passed by reference.
	 */
	do_action_ref_array( 'wp_authenticate', array( &$credentials['user_login'], &$credentials['user_password'] ) );

	if ( '' === $secure_cookie )
		$secure_cookie = is_ssl();

	/**
	 * Filter whether to use a secure sign-on cookie.
	 *
	 * @since 3.1.0
	 *
	 * @param bool  $secure_cookie Whether to use a secure sign-on cookie.
	 * @param array $credentials {
 	 *     Array of entered sign-on data.
 	 *
 	 *     @type string $user_login    Username.
 	 *     @type string $user_password Password entered.
	 *     @type bool   $remember      Whether to 'remember' the user. Increases the time
	 *                                 that the cookie will be kept. Default false.
 	 * }
	 */
	$secure_cookie = apply_filters( 'secure_signon_cookie', $secure_cookie, $credentials );

	global $auth_secure_cookie; // XXX ugly hack to pass this to wp_authenticate_cookie
	$auth_secure_cookie = $secure_cookie;

	add_filter('authenticate', 'wp_authenticate_cookie', 30, 3);

	$user = wp_authenticate($credentials['user_login'], $credentials['user_password']);

	if ( is_wp_error($user) ) {
		if ( $user->get_error_codes() == array('empty_username', 'empty_password') ) {
			$user = new WP_Error('', '');
		}

		return $user;
	}

	wp_set_auth_cookie($user->ID, $credentials['remember'], $secure_cookie);
	/**
	 * Fires after the user has successfully logged in.
	 *
	 * @since 1.5.0
	 *
	 * @param string  $user_login Username.
	 * @param WP_User $user       WP_User object of the logged-in user.
	 */
	do_action( 'wp_login', $user->user_login, $user );
	return $user;
}

/**
 * Authenticate the user using the username and password.
 *
 * @since 2.8.0
 *
 * @param WP_User|WP_Error|null $user     WP_User or WP_Error object from a previous callback. Default null.
 * @param string                $username Username for authentication.
 * @param string                $password Password for authentication.
 * @return WP_User|WP_Error WP_User on success, WP_Error on failure.
 */
function wp_authenticate_username_password($user, $username, $password) {
	if ( is_a( $user, 'WP_User' ) ) {
		return $user;
	}

	if ( empty($username) || empty($password) ) {
		if ( is_wp_error( $user ) )
			return $user;

		$error = new WP_Error();

		if ( empty($username) )
			$error->add('empty_username', __('<strong>ERROR</strong>: The username field is empty.'));

		if ( empty($password) )
			$error->add('empty_password', __('<strong>ERROR</strong>: The password field is empty.'));

		return $error;
	}

	$user = get_user_by('login', $username);

	if ( !$user )
		return new WP_Error( 'invalid_username', sprintf( __( '<strong>ERROR</strong>: Invalid username. <a href="%s">Lost your password</a>?' ), wp_lostpassword_url() ) );

	/**
	 * Filter whether the given user can be authenticated with the provided $password.
	 *
	 * @since 2.5.0
	 *
	 * @param WP_User|WP_Error $user     WP_User or WP_Error object if a previous
	 *                                   callback failed authentication.
	 * @param string           $password Password to check against the user.
	 */
	$user = apply_filters( 'wp_authenticate_user', $user, $password );
	if ( is_wp_error($user) )
		return $user;

	if ( !wp_check_password($password, $user->user_pass, $user->ID) )
		return new WP_Error( 'incorrect_password', sprintf( __( '<strong>ERROR</strong>: The password you entered for the username <strong>%1$s</strong> is incorrect. <a href="%2$s">Lost your password</a>?' ),
		$username, wp_lostpassword_url() ) );

	return $user;
}

/**
 * Authenticate the user using the WordPress auth cookie.
 *
 * @since 2.8.0
 *
 * @param WP_User|WP_Error|null $user     WP_User or WP_Error object from a previous callback. Default null.
 * @param string                $username Username. If not empty, cancels the cookie authentication.
 * @param string                $password Password. If not empty, cancels the cookie authentication.
 * @return WP_User|WP_Error WP_User on success, WP_Error on failure.
 */
function wp_authenticate_cookie($user, $username, $password) {
	if ( is_a( $user, 'WP_User' ) ) {
		return $user;
	}

	if ( empty($username) && empty($password) ) {
		$user_id = wp_validate_auth_cookie();
		if ( $user_id )
			return new WP_User($user_id);

		global $auth_secure_cookie;

		if ( $auth_secure_cookie )
			$auth_cookie = SECURE_AUTH_COOKIE;
		else
			$auth_cookie = AUTH_COOKIE;

		if ( !empty($_COOKIE[$auth_cookie]) )
			return new WP_Error('expired_session', __('Please log in again.'));

		// If the cookie is not set, be silent.
	}

	return $user;
}

/**
 * For Multisite blogs, check if the authenticated user has been marked as a
 * spammer, or if the user's primary blog has been marked as spam.
 *
 * @since 3.7.0
 *
 * @param WP_User|WP_Error|null $user WP_User or WP_Error object from a previous callback. Default null.
 * @return WP_User|WP_Error WP_User on success, WP_Error if the user is considered a spammer.
 */
function wp_authenticate_spam_check( $user ) {
	if ( $user && is_a( $user, 'WP_User' ) && is_multisite() ) {
		/**
		 * Filter whether the user has been marked as a spammer.
		 *
		 * @since 3.7.0
		 *
		 * @param bool    $spammed Whether the user is considered a spammer.
		 * @param WP_User $user    User to check against.
		 */
		$spammed = apply_filters( 'check_is_user_spammed', is_user_spammy(), $user );

		if ( $spammed )
			return new WP_Error( 'spammer_account', __( '<strong>ERROR</strong>: Your account has been marked as a spammer.' ) );
	}
	return $user;
}

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

//
// User option functions
//

/**
 * Get the current user's ID
 *
 * @since MU
 *
 * @uses wp_get_current_user
 *
 * @return int The current user's ID
 */
function get_current_user_id() {
	if ( ! function_exists( 'wp_get_current_user' ) )
		return 0;
	$user = wp_get_current_user();
	return ( isset( $user->ID ) ? (int) $user->ID : 0 );
}

/**
 * Retrieve user option that can be either per Site or per Network.
 *
 * If the user ID is not given, then the current user will be used instead. If
 * the user ID is given, then the user data will be retrieved. The filter for
 * the result, will also pass the original option name and finally the user data
 * object as the third parameter.
 *
 * The option will first check for the per site name and then the per Network name.
 *
 * @since 2.0.0
 *
 * @global wpdb $wpdb WordPress database object for queries.
 *
 * @param string $option     User option name.
 * @param int    $user       Optional. User ID.
 * @param bool   $deprecated Use get_option() to check for an option in the options table.
 * @return mixed User option value on success, false on failure.
 */
function get_user_option( $option, $user = 0, $deprecated = '' ) {
	global $wpdb;

	if ( !empty( $deprecated ) )
		_deprecated_argument( __FUNCTION__, '3.0' );

	if ( empty( $user ) )
		$user = get_current_user_id();

	if ( ! $user = get_userdata( $user ) )
		return false;

	$prefix = $wpdb->get_blog_prefix();
	if ( $user->has_prop( $prefix . $option ) ) // Blog specific
		$result = $user->get( $prefix . $option );
	elseif ( $user->has_prop( $option ) ) // User specific and cross-blog
		$result = $user->get( $option );
	else
		$result = false;

	/**
	 * Filter a specific user option value.
	 *
	 * The dynamic portion of the hook name, $option, refers to the user option name.
	 *
	 * @since 2.5.0
	 *
	 * @param mixed   $result Value for the user's option.
	 * @param string  $option Name of the option being retrieved.
	 * @param WP_User $user   WP_User object of the user whose option is being retrieved.
	 */
	return apply_filters( "get_user_option_{$option}", $result, $option, $user );
}

/**
 * Retrieve user meta field for a user.
 *
 * @since 3.0.0
 * @uses get_metadata()
 * @link http://codex.wordpress.org/Function_Reference/get_user_meta
 *
 * @param int $user_id User ID.
 * @param string $key Optional. The meta key to retrieve. By default, returns data for all keys.
 * @param bool $single Whether to return a single value.
 * @return mixed Will be an array if $single is false. Will be value of meta data field if $single
 *  is true.
 */
function get_user_meta($user_id, $key = '', $single = false) {
	return get_metadata('user', $user_id, $key, $single);
}

/**
 * Update user meta field based on user ID.
 *
 * Use the $prev_value parameter to differentiate between meta fields with the
 * same key and user ID.
 *
 * If the meta field for the user does not exist, it will be added.
 *
 * @since 3.0.0
 * @uses update_metadata
 * @link http://codex.wordpress.org/Function_Reference/update_user_meta
 *
 * @param int $user_id User ID.
 * @param string $meta_key Metadata key.
 * @param mixed $meta_value Metadata value.
 * @param mixed $prev_value Optional. Previous value to check before removing.
 * @return int|bool Meta ID if the key didn't exist, true on successful update, false on failure.
 */
function update_user_meta($user_id, $meta_key, $meta_value, $prev_value = '') {
	return update_metadata('user', $user_id, $meta_key, $meta_value, $prev_value);
}

//
// Private helper functions
//

/**
 * Set up global user vars.
 *
 * Used by wp_set_current_user() for back compat. Might be deprecated in the future.
 *
 * @since 2.0.4
 * @global string $userdata User description.
 * @global string $user_login The user username for logging in
 * @global int $user_level The level of the user
 * @global int $user_ID The ID of the user
 * @global string $user_email The email address of the user
 * @global string $user_url The url in the user's profile
 * @global string $user_identity The display name of the user
 *
 * @param int $for_user_id Optional. User ID to set up global data.
 */
function setup_userdata($for_user_id = '') {
	global $user_login, $userdata, $user_level, $user_ID, $user_email, $user_url, $user_identity;

	if ( '' == $for_user_id )
		$for_user_id = get_current_user_id();
	$user = get_userdata( $for_user_id );

	if ( ! $user ) {
		$user_ID = 0;
		$user_level = 0;
		$userdata = null;
		$user_login = $user_email = $user_url = $user_identity = '';
		return;
	}

	$user_ID    = (int) $user->ID;
	$user_level = (int) $user->user_level;
	$userdata   = $user;
	$user_login = $user->user_login;
	$user_email = $user->user_email;
	$user_url   = $user->user_url;
	$user_identity = $user->display_name;
}

/**
 * Update all user caches
 *
 * @since 3.0.0
 *
 * @param object $user User object to be cached
 */
function update_user_caches($user) {
	wp_cache_add($user->ID, $user, 'users');
	wp_cache_add($user->user_login, $user->ID, 'userlogins');
	wp_cache_add($user->user_email, $user->ID, 'useremail');
	wp_cache_add($user->user_nicename, $user->ID, 'userslugs');
}

/**
 * Checks whether the given username exists.
 *
 * @since 2.0.0
 *
 * @param string $username Username.
 * @return null|int The user's ID on success, and null on failure.
 */
function username_exists( $username ) {
	if ( $user = get_user_by('login', $username ) ) {
		return $user->ID;
	} else {
		return null;
	}
}

/**
 * Checks whether the given email exists.
 *
 * @since 2.1.0
 *
 * @param string $email Email.
 * @return bool|int The user's ID on success, and false on failure.
 */
function email_exists( $email ) {
	if ( $user = get_user_by('email', $email) )
		return $user->ID;

	return false;
}

/**
 * Insert an user into the database.
 *
 * Most of the $userdata array fields have filters associated with the values.
 * The exceptions are 'rich_editing', 'role', 'jabber', 'aim', 'yim',
 * 'user_registered', and 'ID'. The filters have the prefix 'pre_user_' followed
 * by the field name. An example using 'description' would have the filter
 * called, 'pre_user_description' that can be hooked into.
 *
 * @since 2.0.0
 *
 * @global wpdb $wpdb WordPress database object for queries.
 *
 * @param array $userdata {
 *     An array, object, or WP_User object of user data arguments.
 *
 *     @type int         $ID              User ID. If supplied, the user will be updated.
 *     @type string      $user_pass       The plain-text user password.
 *     @type string      $user_login      The user's login username.
 *     @type string      $user_nicename   The URL-friendly user name.
 *     @type string      $user_url        The user URL.
 *     @type string      $user_email      The user email address.
 *     @type string      $display_name    The user's display name.
 *                                        Default is the the user's username.
 *     @type string      $nickname        The user's nickname. Default
 *                                        Default is the the user's username.
 *     @type string      $first_name      The user's first name. For new users, will be used
 *                                        to build $display_name if unspecified.
 *     @type string      $last_name       The user's last name. For new users, will be used
 *                                        to build $display_name if unspecified.
 *
 *     @type string|bool $rich_editing    Whether to enable the rich-editor for the user. False
 *                                        if not empty.
 *     @type string      $data_registered Date the user registered. Format is 'Y-m-d H:i:s'.
 *     @type string      $role            User's role.
 *     @type string      $jabber          User's Jabber account username.
 *     @type string      $aim             User's AIM account username.
 *     @type string      $yim             User's Yahoo! messenger username.
 * }
 */
function wp_insert_user( $userdata ) {
	global $wpdb;

	if ( is_a( $userdata, 'stdClass' ) ) {
		$userdata = get_object_vars( $userdata );
	} elseif ( is_a( $userdata, 'WP_User' ) ) {
		$userdata = $userdata->to_array();
	}
	// Are we updating or creating?
	if ( ! empty( $userdata['ID'] ) ) {
		$ID = (int) $userdata['ID'];
		$update = true;
		$old_user_data = WP_User::get_data_by( 'id', $ID );
		// hashed in wp_update_user(), plaintext if called directly
		$user_pass = $userdata['user_pass'];
	} else {
		$update = false;
		// Hash the password
		$user_pass = wp_hash_password( $userdata['user_pass'] );
	}

	$sanitized_user_login = sanitize_user( $userdata['user_login'], true );

	/**
	 * Filter a username after it has been sanitized.
	 *
	 * This filter is called before the user is created or updated.
	 *
	 * @since 2.0.3
	 *
	 * @param string $sanitized_user_login Username after it has been sanitized.
	 */
	$pre_user_login = apply_filters( 'pre_user_login', $sanitized_user_login );

	//Remove any non-printable chars from the login string to see if we have ended up with an empty username
	$user_login = trim( $pre_user_login );

	if ( empty( $user_login ) ) {
		return new WP_Error('empty_user_login', __('Cannot create a user with an empty login name.') );
	}
	if ( ! $update && username_exists( $user_login ) ) {
		return new WP_Error( 'existing_user_login', __( 'Sorry, that username already exists!' ) );
	}
	if ( empty( $userdata['user_nicename'] ) ) {
		$user_nicename = sanitize_title( $user_login );
	} else {
		$user_nicename = $userdata['user_nicename'];
	}

	// Store values to save in user meta.
	$meta = array();

	/**
	 * Filter a user's nicename before the user is created or updated.
	 *
	 * @since 2.0.3
	 *
	 * @param string $user_nicename The user's nicename.
	 */
	$user_nicename = apply_filters( 'pre_user_nicename', $user_nicename );

	$raw_user_url = empty( $userdata['user_url'] ) ? '' : $userdata['user_url'];

	/**
	 * Filter a user's URL before the user is created or updated.
	 *
	 * @since 2.0.3
	 *
	 * @param string $raw_user_url The user's URL.
	 */
	$user_url = apply_filters( 'pre_user_url', $raw_user_url );

	$raw_user_email = empty( $userdata['user_email'] ) ? '' : $userdata['user_email'];

	/**
	 * Filter a user's email before the user is created or updated.
	 *
	 * @since 2.0.3
	 *
	 * @param string $raw_user_email The user's email.
	 */
	$user_email = apply_filters( 'pre_user_email', $raw_user_email );

	if ( ! $update && ! defined( 'WP_IMPORTING' ) && email_exists( $user_email ) ) {
		return new WP_Error( 'existing_user_email', __( 'Sorry, that email address is already used!' ) );
	}
	$nickname = empty( $userdata['nickname'] ) ? $user_login : $userdata['nickname'];

	/**
	 * Filter a user's nickname before the user is created or updated.
	 *
	 * @since 2.0.3
	 *
	 * @param string $nickname The user's nickname.
	 */
	$meta['nickname'] = apply_filters( 'pre_user_nickname', $nickname );

	$first_name = empty( $userdata['first_name'] ) ? '' : $userdata['first_name'];

	/**
	 * Filter a user's first name before the user is created or updated.
	 *
	 * @since 2.0.3
	 *
	 * @param string $first_name The user's first name.
	 */
	$meta['first_name'] = apply_filters( 'pre_user_first_name', $first_name );

	$last_name = empty( $userdata['last_name'] ) ? '' : $userdata['last_name'];

	/**
	 * Filter a user's last name before the user is created or updated.
	 *
	 * @since 2.0.3
	 *
	 * @param string $last_name The user's last name.
	 */
	$meta['last_name'] = apply_filters( 'pre_user_last_name', $last_name );

	if ( empty( $userdata['display_name'] ) ) {
		if ( $update ) {
			$display_name = $user_login;
		} elseif ( $meta['first_name'] && $meta['last_name'] ) {
			/* translators: 1: first name, 2: last name */
			$display_name = sprintf( _x( '%1$s %2$s', 'Display name based on first name and last name' ), $meta['first_name'], $meta['last_name'] );
		} elseif ( $meta['first_name'] ) {
			$display_name = $meta['first_name'];
		} elseif ( $meta['last_name'] ) {
			$display_name = $meta['last_name'];
		} else {
			$display_name = $user_login;
		}
	} else {
		$display_name = $userdata['display_name'];
	}

	/**
	 * Filter a user's display name before the user is created or updated.
	 *
	 * @since 2.0.3
	 *
	 * @param string $display_name The user's display name.
	 */
	$display_name = apply_filters( 'pre_user_display_name', $display_name );

	$description = empty( $userdata['description'] ) ? '' : $userdata['description'];

	/**
	 * Filter a user's description before the user is created or updated.
	 *
	 * @since 2.0.3
	 *
	 * @param string $description The user's description.
	 */
	$meta['description'] = apply_filters( 'pre_user_description', $description );

	$meta['rich_editing'] = empty( $userdata['rich_editing'] ) ? 'true' : $userdata['rich_editing'];

	$meta['comment_shortcuts'] = empty( $userdata['comment_shortcuts'] ) ? 'false' : $userdata['comment_shortcuts'];

	$admin_color = empty( $userdata['admin_color'] ) ? 'fresh' : $userdata['admin_color'];
	$meta['admin_color'] = preg_replace( '|[^a-z0-9 _.\-@]|i', '', $admin_color );

	$meta['use_ssl'] = empty( $userdata['use_ssl'] ) ? 0 : $userdata['use_ssl'];

	$user_registered = empty( $userdata['user_registered'] ) ? gmdate( 'Y-m-d H:i:s' ) : $userdata['user_registered'];

	$meta['show_admin_bar_front'] = empty( $userdata['show_admin_bar_front'] ) ? 'true' : $userdata['show_admin_bar_front'];

	$user_nicename_check = $wpdb->get_var( $wpdb->prepare("SELECT ID FROM $wpdb->users WHERE user_nicename = %s AND user_login != %s LIMIT 1" , $user_nicename, $user_login));

	if ( $user_nicename_check ) {
		$suffix = 2;
		while ($user_nicename_check) {
			$alt_user_nicename = $user_nicename . "-$suffix";
			$user_nicename_check = $wpdb->get_var( $wpdb->prepare("SELECT ID FROM $wpdb->users WHERE user_nicename = %s AND user_login != %s LIMIT 1" , $alt_user_nicename, $user_login));
			$suffix++;
		}
		$user_nicename = $alt_user_nicename;
	}

	$compacted = compact( 'user_pass', 'user_email', 'user_url', 'user_nicename', 'display_name', 'user_registered' );
	$data = wp_unslash( $compacted );

	if ( $update ) {
		if ( $user_email !== $old_user_data->user_email ) {
			$data['user_activation_key'] = '';
		}
		$wpdb->update( $wpdb->users, $data, compact( 'ID' ) );
		$user_id = (int) $ID;
	} else {
		$wpdb->insert( $wpdb->users, $data + compact( 'user_login' ) );
		$user_id = (int) $wpdb->insert_id;
	}

	$user = new WP_User( $user_id );

	// Update user meta.
	foreach ( $meta as $key => $value ) {
		update_user_meta( $user_id, $key, $value );
	}

	foreach ( wp_get_user_contact_methods( $user ) as $key => $value ) {
		if ( isset( $userdata[ $key ] ) ) {
			update_user_meta( $user_id, $key, $userdata[ $key ] );
		}
	}

	if ( isset( $userdata['role'] ) ) {
		$user->set_role( $userdata['role'] );
	} elseif ( ! $update ) {
		$user->set_role(get_option('default_role'));
	}
	wp_cache_delete( $user_id, 'users' );
	wp_cache_delete( $user_login, 'userlogins' );

	if ( $update ) {
		/**
		 * Fires immediately after an existing user is updated.
		 *
		 * @since 2.0.0
		 *
		 * @param int    $user_id       User ID.
		 * @param object $old_user_data Object containing user's data prior to update.
		 */
		do_action( 'profile_update', $user_id, $old_user_data );
	} else {
		/**
		 * Fires immediately after a new user is registered.
		 *
		 * @since 1.5.0
		 *
		 * @param int $user_id User ID.
		 */
		do_action( 'user_register', $user_id );
	}

	return $user_id;
}

/**
 * A simpler way of inserting an user into the database.
 *
 * Creates a new user with just the username, password, and email. For more
 * complex user creation use wp_insert_user() to specify more information.
 *
 * @since 2.0.0
 * @see wp_insert_user() More complete way to create a new user
 *
 * @param string $username The user's username.
 * @param string $password The user's password.
 * @param string $email The user's email (optional).
 * @return int The new user's ID.
 */
function wp_create_user($username, $password, $email = '') {
	$user_login = wp_slash( $username );
	$user_email = wp_slash( $email    );
	$user_pass = $password;

	$userdata = compact('user_login', 'user_email', 'user_pass');
	return wp_insert_user($userdata);
}

/**
 * Set up the user contact methods.
 *
 * Default contact methods were removed in 3.6. A filter dictates contact methods.
 *
 * @since 3.7.0
 *
 * @param WP_User $user Optional. WP_User object.
 * @return array Array of contact methods and their labels.
 */
function wp_get_user_contact_methods( $user = null ) {
	$methods = array();
	if ( get_site_option( 'initial_db_version' ) < 23588 ) {
		$methods = array(
			'aim'    => __( 'AIM' ),
			'yim'    => __( 'Yahoo IM' ),
			'jabber' => __( 'Jabber / Google Talk' )
		);
	}

	/**
	 * Filter the user contact methods.
	 *
	 * @since 2.9.0
	 *
	 * @param array   $methods Array of contact methods and their labels.
 	 * @param WP_User $user    WP_User object.
	 */
	return apply_filters( 'user_contactmethods', $methods, $user );
}