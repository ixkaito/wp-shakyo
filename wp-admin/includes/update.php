<?php
/**
 * WordPress Administration Update API
 *
 * @package WordPress
 * @subpackage Administration
 */

add_filter( 'update_footer', 'core_update_footer' );

add_action( 'admin_notices', 'update_nag', 3 );
add_action( 'network_admin_notices', 'update_nag', 3 );

add_action( 'admin_init', 'wp_plugin_update_rows' );

add_action( 'admin_init', 'wp_theme_update_rows' );

add_action( 'admin_notices', 'maintenance_nag' );
add_action( 'network_admin_notices', 'maintenance_nag' );
