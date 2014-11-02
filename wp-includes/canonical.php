<?php
/**
 * Canonical APIto handle WordPress Redirecting
 *
 * Based on "Permalink Redirect" from Scott Yang and "Enforce www. Preference"
 * by Mark Jaquith
 *
 * @package WordPress
 * @since 2.3.0
 */

add_action('template_redirect', 'redirect_canonical');

add_action( 'template_redirect', 'wp_redirect_admin_locations', 1000 );
