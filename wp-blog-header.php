<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

var_dump($wp_did_header);

if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	require_once( dirname(__FILE__) . '/wp-load.php' );

}
