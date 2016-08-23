<?php
/**
 * Category Template Tags and API.
 *
 * @package WordPress
 * @subpackage Template
 */

/**
 * Retrieve the tags for a post formatted as a string.
 *
 * @since 2.3.0
 *
 * @param string $before Optional. Before tags.
 * @param string $sep Optional. Between tags.
 * @param string $after Optional. After tags.
 * @param int $id Optional. Post ID. Defaults to the current post.
 * @return string|bool|WP_Error A list of tags on success, false if there are no terms, WP_Error on failure.
 */
function get_the_tag_list( $before = '', $sep = '', $after = '', $id = 0 ) {

	/**
	 * Filter the tags list for a given post.
	 *
	 * @since 2.3.0
	 *
	 * @param string $tag_list List of tags.
	 * @param string $before   String to use before tags.
	 * @param string $sep      String to use between the tags.
	 * @param string $after    String to use after tags.
	 * @param int    $id       Post ID.
	 */
	return apply_filters( 'the_tags', get_the_term_list( $id, 'post_tag', $before, $sep, $after ), $before, $sep, $after, $id );
}

/**
 * Retrieve the tags for a post.
 *
 * @since 2.3.0
 *
 * @param string $before Optional. Before list.
 * @param string $sep Optional. Separate items using this.
 * @param string $after Optional. After list.
 */
function the_tags( $before = null, $sep = ', ', $after = '' ) {
	if ( null === $before )
		$before = __('Tags: ');
	echo get_the_tag_list($before, $sep, $after);
}

/**
 * Retrieve a post's terms as a list with specified format.
 *
 * @since 2.5.0
 *
 * @param int $id Post ID.
 * @param string $taxonomy Taxonomy name.
 * @param string $before Optional. Before list.
 * @param string $sep Optional. Separate items using this.
 * @param string $after Optional. After list.
 * @return string|bool|WP_Error A list of terms on success, false if there are no terms, WP_Error on failure.
 */
function get_the_term_list( $id, $taxonomy, $before = '', $sep = '', $after = '' ) {
	$terms = get_the_terms( $id, $taxonomy );

	if ( is_wp_error( $terms ) )
		return $terms;

	if ( empty( $terms ) )
		return false;

	foreach ( $terms as $term ) {
		$link = get_term_link( $term, $taxonomy );
		if ( is_wp_error( $link ) )
			return $link;
		$term_links[] = '<a href="' . esc_url( $link ) . '" rel="tag">' . $term->name . '</a>';
	}

	/**
	 * Filter the term links for a given taxonomy.
	 *
	 * The dynamic portion of the filter name, $taxonomy, refers
	 * to the taxonomy slug.
	 *
	 * @since 2.5.0
	 *
	 * @param array $term_links An array of term links.
	 */
	$term_links = apply_filters( "term_links-$taxonomy", $term_links );

	return $before . join( $sep, $term_links ) . $after;
}
