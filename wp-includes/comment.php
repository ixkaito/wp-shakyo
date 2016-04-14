<?php
/**
 * Manages WordPress comments
 *
 * @package WordPress
 * @subpackage Comment
 */

/**
 * Sanitizes the cookies sent to the user already.
 *
 * Will only do anything if the cookies have already been created for the user.
 * Mostly used after cookies had been sent to use elsewhere.
 *
 * @since 2.0.4
 */
function sanitize_comment_cookies() {
	if ( isset( $_COOKIE['comment_author_' . COOKIEHASH] ) ) {
		/**
		 * Filter the comment author's name cookie before it is set.
		 *
		 * When this filter hook is evaluated in wp_filter_comment(),
		 * the comment author's name string is passed.
		 *
		 * @since 1.5.0
		 *
		 * @param string $author_cookie The comment author name cookie.
		 */
		$comment_author = apply_filters( 'pre_comment_author_name', $_COOKIE['comment_author_' . COOKIEHASH] );
		$comment_author = wp_unslash($comment_author);
		$comment_author = esc_attr($comment_author);
		$_COOKIE['comment_author_' . COOKIEHASH] = $comment_author;
	}

	if ( isset( $_COOKIE['comment_author_email_' . COOKIEHASH] ) ) {
		/**
		 * Filter the comment author's email cookie before it is set.
		 *
		 * When this filter hook is evaluated in wp_filter_comment(),
		 * the comment author's email string is passed.
		 *
		 * @since 1.5.0
		 *
		 * @param string $author_email_cookie The comment author email cookie.
		 */
		$comment_author_email = apply_filters( 'pre_comment_author_email', $_COOKIE['comment_author_email_' . COOKIEHASH] );
		$comment_author_email = wp_unslash($comment_author_email);
		$comment_author_email = esc_attr($comment_author_email);
		$_COOKIE['comment_author_email_'.COOKIEHASH] = $comment_author_email;
	}

	if ( isset( $_COOKIE['comment_author_url_' . COOKIEHASH] ) ) {
		/**
		 * Filter the comment author's URL cookie before it is set.
		 *
		 * When this filter hook is evaluated in wp_filter_comment(),
		 * the comment author's URL string is passed.
		 *
		 * @since 1.5.0
		 *
		 * @param string $author_url_cookie The comment author URL cookie.
		 */
		$comment_author_url = apply_filters( 'pre_comment_author_url', $_COOKIE['comment_author_url_' . COOKIEHASH] );
		$comment_author_url = wp_unslash($comment_author_url);
		$_COOKIE['comment_author_url_'.COOKIEHASH] = $comment_author_url;
	}
}