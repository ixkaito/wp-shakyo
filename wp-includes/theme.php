<?php
/**
 * Theme, template, and stylesheet functions.
 *
 * @package WordPress
 * @subpackage Theme
 */

add_action('setup_theme', 'preview_theme');

add_action( 'wp_loaded', '_custom_header_background_just_in_time' );

add_action( 'delete_attachment', '_delete_attachment_theme_mod' );

add_action( 'plugins_loaded', '_wp_customize_include' );

add_action( 'admin_enqueue_scripts', '_wp_customize_loader_settings' );
