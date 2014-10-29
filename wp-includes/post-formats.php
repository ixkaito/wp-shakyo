<?php
/**
 * Post format functions.
 *
 * @package WordPress
 * @subpackage Post
 */

add_filter( 'request', '_post_format_request' );

add_filter( 'term_link', '_post_format_link', 10, 3 );

add_filter( 'get_post_format', '_post_format_get_term' );

add_filter( 'get_terms', '_post_format_get_terms', 10, 3 );

add_filter( 'wp_get_object_terms', '_post_format_wp_get_object_terms' );
