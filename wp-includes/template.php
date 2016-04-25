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
