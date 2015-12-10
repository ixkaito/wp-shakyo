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
 * Language pack upgrader, for updating translations of palugins, themes, and core.
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 3.7.0
 */
class Language_Pack_Upgrader extends WP_Upgrader {

}
