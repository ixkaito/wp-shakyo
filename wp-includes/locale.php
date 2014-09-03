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
}