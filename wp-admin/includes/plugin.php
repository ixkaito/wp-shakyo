<?php
/**
 * Plugins administration panel.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

if ( ! current_user_can('activate_plugins') )
	wp_die( __( 'You do not have sufficient permissions to manage plugins for this site.' ) );
