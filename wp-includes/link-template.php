<?php
/**
 * WordPress Link Template Functions
 *
 * @package WordPress
 * @subpackage Template
 */

/**
 * Retrieve the site url for the current site.
 *
 * Returns the 'site_url' option with the appropriate protocol, 'https' if
 * is_ssl() and 'http' otherwise. If $scheme is 'http' or 'https', is_ssl() is
 * overridden.
 *
 * @since 3.0.0
 *
 * @uses get_site_url()
 *
 * @param string $path Optional. Path relative to the site url.
 * @param string $scheme Optional. Scheme to give the site url context. See set_url_scheme().
 * @return string Site url link with optional path appended.
*/
function site_url( $path = '', $scheme = null ) {
	return get_site_url( null, $path, $scheme );
}

/**
 * Retrieve the site url for a given site.
 *
 * Returns the 'site_url' option with the appropriate protocol, 'https' if
 * is_ssl() and 'http' otherwise. If $scheme is 'http' or 'https', is_ssl() is
 * overridden.
 *
 * @since 3.0.0
 *
 * @param int $blog_id (optional) Blog ID. Defaults to current blog.
 * @param string $path Optional. Path relative to the site url.
 * @param string $scheme Optional. Scheme to give the site url context. Currently 'http', 'https', 'login', 'login_post', 'admin', or 'relative'.
 * @return string Site url link with optional path appended.
*/
function get_site_url( $blog_id = null, $path = '', $scheme = null ) {
	if ( empty( $blog_id ) || !is_multisite() ) {
		$url = get_option( 'siteurl' );
	} else {
		switch_to_blog( $blog_id );
		$url = get_option( 'siteurl' );
		restore_current_blog();
	}

	$url = set_url_scheme( $url, $scheme );

	if ( $path && is_string( $path ) )
		$url .= '/' . ltrim( $path, '/' );

	/**
	 * Filter the site URL.
	 *
	 * @since 2.7.0
	 *
	 * @param string      $url     The complete site URL including scheme and path.
	 * @param string      $path    Path relative to the site URL. Blank string if no path is specified.
	 * @param string|null $scheme  Scheme to give the site URL context. Accepts 'http', 'https', 'login',
	 *                             'login_post', 'admin', 'relative' or null.
	 * @param int|null    $blog_id Blog ID, or null for the current blog.
	 */
	return apply_filters( 'site_url', $url, $path, $scheme, $blog_id );
}
