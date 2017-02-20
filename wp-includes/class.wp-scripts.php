<?php
/**
 * BackPress Scripts enqueue.
 *
 * These classes were refactored from the WordPress WP_Scripts and WordPress
 * script enqueue API.
 *
 * @package BackPress
 * @since r16
 */

/**
 * BackPress Scripts enqueue class.
 *
 * @package BackPress
 * @uses WP_Dependencies
 * @since r16
 */
class WP_Scripts extends WP_Dependencies {
	public $base_url; // Full URL with trailing slash
	public $content_url;
	public $default_version;
	public $in_footer = array();
	public $concat = '';
	public $concat_version = '';
	public $do_concat = false;
	public $print_html = '';
	public $print_code = '';
	public $ext_handles = '';
	public $ext_version = '';
	public $default_dirs;

	public function __construct() {
		$this->init();
		add_action( 'init', array( $this, 'init' ), 0 );
	}
}
