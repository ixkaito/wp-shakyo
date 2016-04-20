<?php
/**
 * Loads the correct template based on the visitor's url
 * @package WordPress
 */
if ( defined('WP_USE_THEMES') && WP_USE_THEMES )
	/**
	 * Fires before determining which template to load.
	 *
	 * @since 1.5.0
	 */
	do_action( 'template_redirect' );
