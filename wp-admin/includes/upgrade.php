<?php
/**
 * WordPress Upgrade API
 *
 * Most of the functions are pluggable and can be overwritten
 *
 * @package WordPress
 * @subpackage Administration
 */

/** Include user install customize script. */
if ( file_exists(WP_CONTENT_DIR . '/install.php') )
	require (WP_CONTENT_DIR . '/install.php');

var_dump(__FILE__);
