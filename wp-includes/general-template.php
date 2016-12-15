<?php
/**
 * General template tags that can go anywhere in a template.
 *
 * @package WordPress
 * @subpackage Template
 */

add_action( 'save_post', 'delete_get_calendar_cache' );
add_action( 'delete_post', 'delete_get_calendar_cache' );
add_action( 'update_option_start_of_week', 'delete_get_calendar_cache' );
add_action( 'update_option_gmt_offset', 'delete_get_calendar_cache' );

/**
 * Display the language attributes for the html tag.
 *
 * Builds up a set of html attributes containing the text direction and language
 * information for the page.
 *
 * @since 2.1.0
 *
 * @param string $doctype The type of html document (xhtml|html).
 */
function language_attributes($doctype = 'html') {
	$attributes = array();

	if ( function_exists( 'is_rtl' ) && is_rtl() )
		$attributes[] = 'dir="rtl"';

	if ( $lang = get_bloginfo('language') ) {
		if ( get_option('html_type') == 'text/html' || $doctype == 'html' )
			$attributes[] = "lang=\"$lang\"";

		if ( get_option('html_type') != 'text/html' || $doctype == 'xhtml' )
			$attributes[] = "xml:lang=\"$lang\"";
	}

	$output = implode(' ', $attributes);

	/**
	 * Filter the language attributes for display in the html tag.
	 *
	 * @since 2.5.0
	 *
	 * @param string $output A space-separated list of language attributes.
	 */
	echo apply_filters( 'language_attributes', $output );
}

/**
 * Outputs the html checked attribute.
 *
 * Compares the first two arguments and if identical marks as checked
 *
 * @since 1.0.0
 *
 * @param mixed $checked One of the values to compare
 * @param mixed $current (true) The other value to compare if not just true
 * @param bool $echo Whether to echo or just return the string
 * @return string html attribute or empty string
 */
function checked( $checked, $current = true, $echo = true ) {
	return __checked_selected_helper( $checked, $current, $echo, 'checked' );
}

/**
 * Outputs the html disabled attribute.
 *
 * Compares the first two arguments and if identical marks as disabled
 *
 * @since 3.0.0
 *
 * @param mixed $disabled One of the values to compare
 * @param mixed $current (true) The other value to compare if not just true
 * @param bool $echo Whether to echo or just return the string
 * @return string html attribute or empty string
 */
function disabled( $disabled, $current = true, $echo = true ) {
	return __checked_selected_helper( $disabled, $current, $echo, 'disabled' );
}

/**
 * Private helper function for checked, selected, and disabled.
 *
 * Compares the first two arguments and if identical marks as $type
 *
 * @since 2.8.0
 * @access private
 *
 * @param mixed $helper One of the values to compare
 * @param mixed $current (true) The other value to compare if not just true
 * @param bool $echo Whether to echo or just return the string
 * @param string $type The type of checked|selected|disabled we are doing
 * @return string html attribute or empty string
 */
function __checked_selected_helper( $helper, $current, $echo, $type ) {
	if ( (string) $helper === (string) $current )
		$result = " $type='$type'";
	else
		$result = '';

	if ( $echo )
		echo $result;

	return $result;
}
