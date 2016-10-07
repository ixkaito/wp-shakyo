<?php
/**
 * Date and Time Locale object
 *
 * @package WordPress
 * @subpackage i18n
 */

/**
 * Class that loads the calendar locale.
 *
 * @since 2.1.0
 */
class WP_Locale {
	/**
	 * Stores the translated strings for the full weekday names.
	 *
	 * @since 2.1.0
	 * @var array
	 * @access private
	 */
	var $weekday;

	/**
	 * Stores the translated strings for the one character weekday names.
	 *
	 * There is a hack to make sure that Tuesday and Thursday, as well
	 * as Sunday and Saturday, don't conflict. See init() method for more.
	 *
	 * @see WP_Locale::init() for how to handle the hack.
	 *
	 * @since 2.1.0
	 * @var array
	 * @access private
	 */
	var $weekday_initial;

	/**
	 * Stores the translated strings for the abbreviated weekday names.
	 *
	 * @since 2.1.0
	 * @var array
	 * @access private
	 */
	var $weekday_abbrev;

	/**
	 * Stores the translated strings for the full month names.
	 *
	 * @since 2.1.0
	 * @var array
	 * @access private
	 */
	var $month;

	/**
	 * Stores the translated strings for the abbreviated month names.
	 *
	 * @since 2.1.0
	 * @var array
	 * @access private
	 */
	var $month_abbrev;

	/**
	 * Stores the translated strings for 'am' and 'pm'.
	 *
	 * Also the capitalized versions.
	 *
	 * @since 2.1.0
	 * @var array
	 * @access private
	 */
	var $meridiem;

	/**
	 * The text direction of the locale language.
	 *
	 * Default is left to right 'ltr'.
	 *
	 * @since 2.1.0
	 * @var string
	 * @access private
	 */
	var $text_direction = 'ltr';
}

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
