<?php
/**
 * WordPress Bookmark Administration API
 *
 * @package WordPres
 * @subpackage Administration
 */

add_action( 'admin_page_access_denied', 'wp_link_manager_disabled_message' );
