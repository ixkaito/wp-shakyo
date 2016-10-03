<?php
/**
 * Post functions and post utility function.
 *
 * @package WordPress
 * @subpackage Post
 * @since 1.5.0
 */

//
// Post Type Registration
//

add_action( 'init', 'create_initial_post_types', 0 ); // highest priority

add_action( 'admin_menu', '_add_post_type_submenus' );

//
// Post meta functions
//

add_action( 'before_delete_post', '_reset_front_page_settings_for_post' );
add_action( 'wp_trash_post',      '_reset_front_page_settings_for_post' );

//
// Trackback and ping functions
//

//
// Page functions
//

//
// Attachment functions
//

//
// Hooks
//
