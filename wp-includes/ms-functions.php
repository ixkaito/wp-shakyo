<?php
/**
 * Multisite WordPress API
 *
 * @package WordPress
 * @subpackage Multisite
 * @since 3.0.0
 */

add_action('update_option_blog_public', 'update_blog_public', 10, 2);

add_filter('option_users_can_register', 'users_can_register_signup_filter');

add_filter( 'site_option_welcome_user_email', 'welcome_user_msg_filter' );

