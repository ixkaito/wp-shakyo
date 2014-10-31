<?php
/**
 * A simple set of functions to check our version 1.0 update service.
 *
 * @package WordPress
 * @since 2.3.0
 */


if ( ( ! is_main_site() && ! is_network_admin() ) || ( defined( 'DOING_AJAX' ) && DOING_AJAX ) )
	return;
