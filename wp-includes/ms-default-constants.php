<?php
/**
 * Defines constants and global variables that can be overridden, generally in wp-config.php.
 *
 * @package WordPress
 * @subpackage Multisite
 * @since 3.0.0
 */

/**
 * Defines Multisite cookie constants.
 *
 * @since 3.0.0
 */
function ms_cookie_constants(  ) {
	$current_site = get_current_site();

	/**
	 * @since 1.2.0
	 */
	if ( !defined( 'COOKIEPATH' ) )
		define( 'COOKIEPATH', $current_site->path );

	/**
	 * @since 1.5.0
	 */
	if ( !defined( 'SITECOOKIEPATH' ) )
		define( 'SITECOOKIEPATH', $current_site->path );

	/**
	 * @since 2.6.0
	 */
	if ( !defined( 'ADMIN_COOKIE_PATH' ) ) {
		if ( ! is_subdomain_install() || trim( parse_url( get_option( 'siteurl' ), PHP_URL_PATH ), '/' ) ) {
			define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH );
		} else {
			define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . 'wp-admin' );
		}
	}

	/**
	 * @since 2.0.0
	 */
	if ( !defined('COOKIE_DOMAIN') && is_subdomain_install() ) {
		if ( !empty( $current_site->cookie_domain ) )
			define('COOKIE_DOMAIN', '.' . $current_site->cookie_domain);
		else
			define('COOKIE_DOMAIN', '.' . $current_site->domain);
	}
}
