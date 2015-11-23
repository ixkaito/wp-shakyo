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

/**
 * Retrieve the SQL for creating database tables.
 *
 * @since 3.3.0
 *
 * @param string $scope Optional. The tables for which to retrieve SQL. Can be all, global, ms_global, or blog tables. Defaults to all.
 * @param int $blog_id Optional. The blog ID for which to retrieve SQL. Default is the current blog ID.
 * @return string The SQL needed to create the requested tables.
 */
function wp_get_db_schema( $scope = 'all', $blog_id = null ) {

}

// Populate for back compat.
$wp_queries = wp_get_db_schema( 'all' );
