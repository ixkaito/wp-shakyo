<?php
/**
 * Bootstrap file for setting the ABSPATH constant
 * and loading the wp-config.php file. The wp-config.php
 * file will then load the wp-settings.php file, which
 * will then set up the WordPress environment.
 *
 * If the wp-config.php file is not found then an error
 * will be displayed asking the visitor to set up the
 * wp-config.php file.
 *
 * Will also search for wp-config.php in WordPress' parent
 * directory to allow the WordPress directory to remain
 * untouched.
 *
 * @internal This file must be parsable by PHP4.
 *
 * @package WordPress
 */

/** Define ABSPATH as this file's directory */
define( 'ABSPATH', dirname(__FILE__) . '/' );

error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );

if ( file_exists( ABSPATH . 'wp-config.php') ) {

	/** The config file resides in ABSPATH */
	require_once( ABSPATH . 'wp-config.php' );

} elseif ( file_exists( dirname(ABSPATH) . '/wp-config.php' ) && ! file_exists( dirname(ABSPATH) . '/wp-settings.php' ) ) {

	/** The config file resides one level above ABSPATH but is not part of another install */
	require_once( dirname(ABSPATH) . '/wp-config.php' );

} else {

	// A config file doesn't exist
	define( 'WPINC', 'wp-includes' );
	require_once( ABSPATH . WPINC . '/load.php' );

	// Standardize $_SERVER variables across setups.
	wp_fix_server_vars();

	require_once( ABSPATH . WPINC . '/functions.php' );

	$path = wp_guess_url() . '/wp-admin/setup-config.php';

	/*
	 * We're going to redirect to setup-config.php. While this shouldn't result
	 * in an infinite loop, that's a silly thing to assume, don't you think? If
	 * we're traveling in circles, our last-ditch effort is "Need more help?"
	 */

	if ( false === strpos( $_SERVER['REQUEST_URI'], 'setup-config' ) ) {
		header( 'Location: ' . $path );
		exit;
	}

}