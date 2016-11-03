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
endif;

if ( !function_exists('wp_clearcookie') ) :
endif;

if ( !function_exists('wp_get_cookie_login') ):
endif;

if ( !function_exists('wp_login') ) :
endif;
