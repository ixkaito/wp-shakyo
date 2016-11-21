<?php
/**
 * Default Widgets
 *
 * @package WordPress
 * @subpackage Widgets
 */

/**
 * Register all of the default WordPress widgets on startup.
 *
 * Calls 'widgets_init' action after all of the WordPress widgets have been
 * registered.
 *
 * @since 2.2.0
 */
function wp_widgets_init() {
	if ( !is_blog_installed() )
		return;

	register_widget('WP_Widget_Pages');

	register_widget('WP_Widget_Calendar');

	register_widget('WP_Widget_Archives');

	if ( get_option( 'link_manager_enabled' ) )
		register_widget('WP_Widget_Links');

	register_widget('WP_Widget_Meta');

	register_widget('WP_Widget_Search');

	register_widget('WP_Widget_Text');

	register_widget('WP_Widget_Categories');

	register_widget('WP_Widget_Recent_Posts');

	register_widget('WP_Widget_Recent_Comments');

	register_widget('WP_Widget_RSS');

	register_widget('WP_Widget_Tag_Cloud');

	register_widget('WP_Nav_Menu_Widget');

	/**
	 * Fires after all default WordPress widgets have been registered.
	 *
	 * @since 2.2.0
	 */
	do_action( 'widgets_init' );
}

add_action('init', 'wp_widgets_init', 1);
