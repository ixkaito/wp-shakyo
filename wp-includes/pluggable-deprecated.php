<?php
/**
 * Deprecated pluggable functions from past WordPress versions. You shouldn't use these
 * functions and look for the alternatives instead. The functions will be removed in a
 * later version.
 *
 * Deprecated warnings are also thrown if one of these functions is being defined by a plugin.
 *
 * @package WordPress
 * @subpackage Deprecated
 * @see pluggable.php
 */

if ( !function_exists('set_current_user') ) :
endif;

if ( !function_exists('get_userdatabylogin') ) :
endif;

if ( !function_exists('get_user_by_email') ) :
endif;

if ( !function_exists('wp_setcookie') ) :
else :
	_deprecated_function( 'wp_setcookie', '2.5', 'wp_set_auth_cookie()' );
endif;

if ( !function_exists('wp_clearcookie') ) :
else :
	_deprecated_function( 'wp_clearcookie', '2.5', 'wp_clear_auth_cookie()' );
endif;

if ( !function_exists('wp_get_cookie_login') ):
else :
	_deprecated_function( 'wp_get_cookie_login', '2.5' );
endif;

if ( !function_exists('wp_login') ) :
else :
	_deprecated_function( 'wp_login', '2.5', 'wp_signon()' );
endif;

/**
 * WordPress AtomPub API implementation.
 *
 * Originally stored in wp-app.php, and later wp-includes/class-wp-atom-server.php.
 * It is kept here in case a plugin directly referred to the class.
 *
 * @since 2.2.0
 * @deprecated 3.5.0
 * @link https://wordpress.org/plugins/atom-publishing-protocol/
 */
if ( ! class_exists( 'wp_atom_server' ) ) {
}