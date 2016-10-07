<?php
/**
 * Date and Time Locale object
 *
 * @package WordPress
 * @subpackage i18n
 */

/**
 * Checks if current locale is RTL.
 *
 * @since 3.0.0
 * @return bool Whether locale is RTL.
 */
function is_rtl() {
	global $wp_locale;
	return $wp_locale->is_rtl();
}
