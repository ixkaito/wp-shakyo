<?php
/**
 * Template loading functions.
 *
 * @package WordPress
 * @subpackage Template
 */

/**
 * Retrieve path to a template
 *
 * Used to quickly retrieve the path of a template without including the file
 * extension. It will also check the parent theme, if the file exists, with
 * the use of {@link locate_template()}. Allows for more generic template location
 * without the use of the other get_*_template() functions.
 *
 * @since 1.5.0
 *
 * @param string $type Filename without extension.
 * @param array $templates An optional list of template candidates
 * @return string Full path to template file.
 */
function get_query_template( $type, $templates = array() ) {
	$type = preg_replace( '|[^a-z0-9-]+|', '', $type );

	if ( empty( $templates ) )
		$templates = array("{$type}.php");

	$template = locate_template( $templates );
	/**
	 * Filter the path of the queried template by type.
	 *
	 * The dynamic portion of the hook name, $type, refers to the filename
	 * -- minus the extension -- of the file to load. This hook also applies
	 * to various types of files loaded as part of the Template Hierarchy.
	 *
	 * @since 1.5.0
	 *
	 * @param string $template Path to the template. @see locate_template()
	 */
	return apply_filters( "{$type}_template", $template );
}

/**
 * Retrieve path of home template in current or parent template.
 *
 * This is the template used for the page containing the blog posts.
 * Attempts to locate 'home.php' first before falling back to 'index.php'.
 *
 * The template path is filterable via the 'home_template' hook.
 *
 * @since 1.5.0
 *
 * @see get_query_template()
 *
 * @return string Full path to home template file.
 */
function get_home_template() {
	$templates = array( 'home.php', 'index.php' );

	return get_query_template( 'home', $templates );
}

/**
 * Retrieve path of front-page template in current or parent template.
 *
 * Looks for 'front-page.php'. The template path is filterable via the
 * 'front_page_template' hook.
 *
 * @since 3.0.0
 *
 * @see get_query_template()
 *
 * @return string Full path to front page template file.
 */
function get_front_page_template() {
	$templates = array('front-page.php');

	return get_query_template( 'front_page', $templates );
}

/**
 * Retrieve the name of the highest priority template file that exists.
 *
 * Searches in the STYLESHEETPATH before TEMPLATEPATH so that themes which
 * inherit from a parent theme can just overload on file.
 *
 * @since 2.7.0
 *
 * @param string|array $templte_names Template files(s) to search for, in order.
 * @param bool $load If true the template file will be loaded if it is found.
 * @param bool $require_once Whether to require_once or require. Defualt true. Has no effect if $load is false.
 * @return string The template filename if one is loaded.
 */
function locate_template($template_names, $load = false, $require_once = true ) {
	$located = '';
	foreach ( (array) $template_names as $template_name ) {
		if ( !$template_name )
			continue;
		if ( file_exists(STYLESHEETPATH . '/' . $template_name)) {
			$located = STYLESHEETPATH . '/' . $template_name;
			break;
		} else if ( file_exists(TEMPLATEPATH . '/' . $template_name) ) {
			$located = TEMPLATEPATH . '/' . $template_name;
			break;
		}
	}

	if ( $load && '' != $located )
		load_template( $located, $require_once );

	return $located;
}
