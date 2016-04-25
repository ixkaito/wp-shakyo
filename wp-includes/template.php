<?php
/**
 * Template loading functions.
 *
 * @package WordPress
 * @subpackage Template
 */

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
