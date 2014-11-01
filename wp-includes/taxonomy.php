<?php
/**
 * Taxonomy API
 *
 * @package WordPress
 * @subpackage Taxonomy
 * @since 2.3.0
 */

//
// Taxonomy Registration
//

add_action( 'init', 'create_initial_taxonomies', 0 ); // highest priority
