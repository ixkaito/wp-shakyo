<?php
/**
 * The plugin API is located in this file, which allows for creating actions
 * and filters and hooking functions, and methods. The functions or methods will
 * then be run when the action or filter is called.
 *
 * The API callback examples reference functions, but can be methods of classes.
 * To hook methods, you'll need to pass an array one of two ways.
 *
 * Any of the syntaxes explained in the PHP documentation for the
 * {@link http://us2.php.net/manual/en/language.pseudo-types.php#language.types.callback 'callback'}
 * type are valid.
 *
 * Also see the {@link http://codex.wordpress.org/Plugin_API Plugin API} for
 * more information and examples on how to use a lot of these functions.
 *
 * @package WordPress
 * @subpackage Plugin
 * @since 1.5.0
 */

// Initialize the filter globals.
global $wp_filter, $wp_actions, $merged_filters, $wp_current_filter;

if ( ! isset( $wp_filter ) )
	$wp_filter = array();

if ( ! isset( $wp_actions ) )
	$wp_actions = array();

if ( ! isset( $merged_filters ) )
	$merged_filters = array();

if ( ! isset( $wp_current_filter ) )
	$wp_current_filter = array();
