<?php
/**
 * Includes all of the WordPress Administration API files.
 *
 * @package WordPress
 * @subpackage Administration
 */

if ( ! defined('WP_ADMIN') ) {
	/**
	 * This file is being included from a file other than wp-admin/admin.php, so
	 * some setup was skipped. Make sure the admin message catalog is loaded since
	 * load_default_textdomain() will not have done so in this context.
	 */
	load_textdomain( 'default', WP_LANG_DIR . '/admin-' . get_locale() . '.mo' );
}

/** WordPress Bookmark Administration API */
require_once(ABSPATH . 'wp-admin/includes/bookmark.php');

/** WordPress Comment Administration API */
require_once(ABSPATH . 'wp-admin/includes/comment.php');

/** WordPress Administration File API */
require_once(ABSPATH . 'wp-admin/includes/file.php');

/** WordPress Image Administrtion API */
require_once(ABSPATH . 'wp-admin/includes/image.php');

/** WordPress Media Administrtion API */
require_once(ABSPATH . 'wp-admin/includes/media.php');

var_dump( __FILE__ );
