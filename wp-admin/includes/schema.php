<?php
/**
 * WordPress Administration Schema API
 *
 * Here we keep the DB structure and option values.
 *
 * @package WordPress
 * @subpackage Administration
 */

// Declare these as global in case schema.php is included from a function.
global $wpdb, $wp_queries, $charset_collate;

/**
 * The database character collate.
 * @var string
 * @global string
 * @name $charset_collate
 */
$charset_collate = $wpdb->get_charset_collate();
