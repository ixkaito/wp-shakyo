<?php
/**
 * Retrieves and creates the wp-config.php file.
 *
 * The permissions for the base directory must allow for writing files in order
 * for the wp-config.php to be created using this page.
 *
 * @internal This file must be parsable by PHP4.
 *
 * @package WordPress
 * @subpackage Administration
 */

/**
 * We are installing.
 */
define('WP_INSTALLING', true);

/**
 * We are blissfully unaware of anything.
 */
define('WP_SETUP_CONFIG', true);

/**
 * Disable error reporting
 *
 * Set this to error_reporting( -1 ) for debugging
 */
error_reporting(0);

define( 'ABSPATH', dirname( dirname( __FILE__ ) ) . '/' );

require( ABSPATH . 'wp-settings.php' );

/** Load WordPress Administration Upgrade API */
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

/** Load WordPress Translation Install API */
require_once( ABSPATH . 'wp-admin/includes/translation-install.php' );

nocache_headers();

// Support wp-config-sample.php one level up, for the develop repo.
if ( file_exists( ABSPATH . 'wp-config-sample.php' ) )
	$config_file = file( ABSPATH . 'wp-config-sample.php' );
elseif ( file_exists( dirname( ABSPATH ) . '/wp-config-sample.php' ) )
	$config_file = file( dirname( ABSPATH ) . '/wp-config-sample.php' );
else
	wp_die( __( 'Sorry, I need a wp-config-sample.php file to work from. Please re-upload this file from your WordPress installation.' ) );

// Check if wp-config.php has been created
if ( file_exists( ABSPATH . 'wp-config.php' ) )
	wp_die( '<p>' . sprintf( __( "The file 'wp-config.php' already exists. If you need to reset any of the configuration items in this file, please delete it first. You may try <a href='%s'>installing now</a>." ), 'install.php' ) . '</p>' );

// Check if wp-config.php exists above the root directory but is not part of another install
if ( file_exists(ABSPATH . '../wp-config.php' ) && ! file_exists( ABSPATH . '../wp-settings.php' ) )
	wp_die( '<p>' . sprintf( __( "The file 'wp-config.php' already exists one level above your WordPress installation. If you need to reset any of the configuration items in this file, please delete it first. You may try <a href='install.php'>installing now</a>."), 'install.php' ) . '</p>' );

var_dump( __FILE__ );
