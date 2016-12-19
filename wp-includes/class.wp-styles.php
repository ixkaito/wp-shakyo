<?php
/**
 * BackPress Styles enqueue.
 *
 * These classes were refactored from the WordPress WP_Scripts and WordPress
 * script enqueue API.
 *
 * @package BackPress
 * @since r74
 */

/**
 * BackPress Styles enqueue class.
 *
 * @package BackPress
 * @uses WP_Dependencies
 * @since r74
 */
class WP_Styles extends WP_Dependencies {
	public $base_url;
	public $content_url;
	public $default_version;
	public $text_direction = 'ltr';
	public $concat = '';
	public $concat_version = '';
	public $do_concat = false;
	public $print_html = '';
	public $print_code = '';
	public $default_dirs;

	public function __construct() {
		/**
		 * Fires when the WP_Styles instance is initialized.
		 *
		 * @since 2.6.0
		 *
		 * @param WP_Styles &$this WP_Styles instance, passed by reference.
		 */
		do_action_ref_array( 'wp_default_styles', array(&$this) );
	}
}