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
