<?php
/**
 * API for creating dynamic sidebar without hardcoding functionality into
 * themes. Includes both internal WordPress routines and theme use routines.
 *
 * This functionality was found in a plugin before WordPress 2.2 release which
 * included it in the core from that point on.
 *
 * @link http://codex.wordpress.org/Plugins/WordPress_Widgets WordPress Widgets
 * @link http://codex.wordpress.org/Plugins/WordPress_Widgets_Api Widgets API
 *
 * @package WordPress
 * @subpackage Widgets
 */

/**
 * Singleton that registers and instantiates WP_Widget classes.
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 2.8.0
 */
class WP_Widget_Factory {
	public $widgets = array();
}

/* Global Variables */

/** @ignore */
global $wp_registered_sidebars, $wp_registered_widgets, $wp_registered_widget_controls, $wp_registered_widget_updates;

/**
 * Stores the sidebars, since many themes can have more than one.
 *
 * @global array $wp_registered_sidebars
 * @since 2.2.0
 */
$wp_registered_sidebars = array();

/**
 * Stores the registered widgets.
 *
 * @global array $wp_registered_widgets
 * @since 2.2.0
 */
$wp_registered_widgets = array();

/**
 * Stores the registered widget control (options).
 *
 * @global array $wp_registered_widget_controls
 * @since 2.2.0
 */
$wp_registered_widget_controls = array();
$wp_registered_widget_updates = array();

/**
 * Private
 */
$_wp_sidebars_widgets = array();

/**
 * Private
 */
$GLOBALS['_wp_deprecated_widgets_callbacks'] = array(
	'wp_widget_pages',
	'wp_widget_pages_control',
	'wp_widget_calendar',
	'wp_widget_calendar_control',
	'wp_widget_archives',
	'wp_widget_archives_control',
	'wp_widget_links',
	'wp_widget_meta',
	'wp_widget_meta_control',
	'wp_widget_search',
	'wp_widget_recent_entries',
	'wp_widget_recent_entries_control',
	'wp_widget_tag_cloud',
	'wp_widget_tag_cloud_control',
	'wp_widget_text',
	'wp_widget_text_control',
	'wp_widget_rss',
	'wp_widget_rss_control',
	'wp_widget_recent_comments',
	'wp_widget_recent_comments_control'
);

/**
 * Whether a sidebar is in use.
 *
 * @since 2.8.0
 *
 * @param mixed $index Sidebar name, id or number to check.
 * @return bool true if the sidebar is in use, false otherwise.
 */
function is_active_sidebar( $index ) {
	$index = ( is_int($index) ) ? "sidebar-$index" : sanitize_title($index);
	$sidebars_widgets = wp_get_sidebars_widgets();
	$is_active_sidebar = ! empty( $sidebars_widgets[$index] );

	/**
	 * Filter whether a dynamic sidebar is considered "active".
	 *
	 * @since 3.9.0
	 *
	 * @param bool       $is_active_sidebar Whether or not the sidebar should be considered "active".
	 *                                      In other words, whether the sidebar contains any widgets.
	 * @param int|string $index             Index, name, or ID of the dynamic sidebar.
	 */
	return apply_filters( 'is_active_sidebar', $is_active_sidebar, $index );
}
