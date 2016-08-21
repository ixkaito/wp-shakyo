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
 * Retrieve the amount of comments a post has.
 *
 * @since 1.5.0
 *
 * @param int|WP_Post $post_id Optional. Post ID or WP_Post object. Default is global $post.
 * @return int The number of comments a post has.
 */
function get_comments_number( $post_id = 0 ) {
	$post = get_post( $post_id );

	if ( ! $post ) {
		$count = 0;
	} else {
		$count = $post->comment_count;
		$post_id = $post->ID;
	}

	/**
	 * Filter the returned comment count for a post.
	 *
	 * @since 1.5.0
	 *
	 * @param int $count   Number of comments a post has.
	 * @param int $post_id Post ID.
	 */
	return apply_filters( 'get_comments_number', $count, $post_id );
}

/**
 * Whether the current post is open for comments.
 *
 * @since 1.5.0
 *
 * @param int|WP_Post $post_id Post ID or WP_Post object. Default current post.
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
