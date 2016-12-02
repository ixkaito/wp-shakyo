<?php
/**
 * WordPress user administration API.
 *
 * @package WordPress
 * @subpackage Administration
 */

add_action('admin_init', 'default_password_nag_handler');

add_action('profile_update', 'default_password_nag_edit_user', 10, 2);

add_action('admin_notices', 'default_password_nag');
