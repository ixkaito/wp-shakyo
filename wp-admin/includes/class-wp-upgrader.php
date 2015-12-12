<?php
/**
 * A File upgrader class for WordPress.
 *
 * This set of classes are designed to be used to upgrade/install a local set of files on the filesystem via the Filesystem Abstraction classes.
 *
 * @link http://trac.wordpress.org/ticket/7875 consolidate plugin/theme/core upgrade/install functions
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 2.8.0
 */

require ABSPATH . 'wp-admin/includes/class-wp-upgrader-skins.php';

/**
 * WordPress Upgrader class for Upgrading/Installing a local set of files via the Filesystem Abstraction classes from a Zip file.
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 2.8.0
 */
class WP_Upgrader {

}

add_action( 'upgrader_process_complete', array( 'Language_Pack_Upgrader', 'async_upgrade' ), 20 );

/**
 * Language pack upgrader, for updating translations of plugins, themes, and core.
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 3.7.0
 */
class Language_Pack_Upgrader extends WP_Upgrader {

}
