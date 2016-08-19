<?php
/**
 * Comment template functions
 *
 * These functions are meant to live inside of the WordPress loop.
 *
 * @package WordPress
 * @subpackage Template
 */

/**
 * Whether the current post is open for comments.
 *
 * @since 1.5.0
 *
 * @param int|WP_Post $post_id Post Id or WP_Post object. Default current post.
 * @return bool True if the comments are open.
 */
function comments_open( $post_id = null ) {

	$_post = get_post($post_id);

	$open = ( 'open' == $_post->comment_status );

	/**
	 * Filter whether the current post is open for comments.
	 *
	 * @since 2.5.0
	 *
	 * @param bool        $open    Whether the current post is open for comments.
	 * @param int|WP_Post $post_id The post ID or WP_Post object.
	 */
	return apply_filters( 'comments_open', $open, $post_id );
}
