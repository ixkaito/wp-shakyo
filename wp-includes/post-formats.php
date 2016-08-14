<?php
/**
 * Post format functions.
 *
 * @package WordPress
 * @subpackage Post
 */

/**
 * Retrieve the format slug for a post
 *
 * @since 3.1.0
 *
 * @param int|object $post Post ID or post object. Optional, default is the current post from the loop.
 * @return mixed The format if successful. False otherwise.
 */
function get_post_format( $post = null ) {
	if ( ! $post = get_post( $post ) )
		return false;

	if ( ! post_type_supports( $post->post_type, 'post-formats' ) )
		return false;

	$_format = get_the_terms( $post->ID, 'post_format' );

	if ( empty( $_format ) )
		return false;

	$format = array_shift( $_format );

	return str_replace('post-format-', '', $format->slug );
}

/**
 * Filters the request to allow for the format prefix.
 *
 * @access private
 * @since 3.1.0
 */
function _post_format_request( $qvs ) {
	if ( ! isset( $qvs['post_format'] ) )
		return $qvs;
	$slugs = get_post_format_slugs();
	if ( isset( $slugs[ $qvs['post_format'] ] ) )
		$qvs['post_format'] = 'post-format-' . $slugs[ $qvs['post_format'] ];
	$tax = get_taxonomy( 'post_format' );
	if ( ! is_admin() )
		$qvs['post_type'] = $tax->object_type;
	return $qvs;
}
add_filter( 'request', '_post_format_request' );

add_filter( 'term_link', '_post_format_link', 10, 3 );

add_filter( 'get_post_format', '_post_format_get_term' );

add_filter( 'get_terms', '_post_format_get_terms', 10, 3 );

add_filter( 'wp_get_object_terms', '_post_format_wp_get_object_terms' );
