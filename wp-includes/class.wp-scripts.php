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

	public function init() {
		/**
		 * Fires when the WP_Scripts instance is initialized.
		 *
		 * @since 2.6.0
		 *
		 * @param WP_Scripts &$this WP_Scripts instance, passed by reference.
		 */
		do_action_ref_array( 'wp_default_scripts', array(&$this) );
	}





































































































	/**
	 * Localizes a script
	 *
	 * Localizes only if the script has already been added
	 */
	public function localize( $handle, $object_name, $l10n ) {
		if ( $handle === 'jquery' )
			$handle = 'jquery-core';

		if ( is_array($l10n) && isset($l10n['l10n_print_after']) ) { // back compat, preserve the code in 'l10n_print_after' if present
			$after = $l10n['l10n_print_after'];
			unset($l10n['l10n_print_after']);
		}

		foreach ( (array) $l10n as $key => $value ) {
			if ( !is_scalar($value) )
				continue;

			$l10n[$key] = html_entity_decode( (string) $value, ENT_QUOTES, 'UTF-8');
		}

		$script = "var $object_name = " . json_encode($l10n) . ';';

		if ( !empty($after) )
			$script .= "\n$after;";

		$data = $this->get_data( $handle, 'data' );

		if ( !empty( $data ) )
			$script = "$data\n$script";

		return $this->add_data( $handle, 'data', $script );
	}
}













	public function all_deps( $handles, $recursion = false, $group = false ) {
		$r = parent::all_deps( $handles, $recursion );
		if ( ! $recursion ) {
			/**
			 * Filter the list of script dependencies left to print.
			 *
			 * @since 2.3.0
			 *
			 * @param array $to_do An array of script dependencies.
			 */
			$this->to_do = apply_filters( 'print_scripts_array', $this->to_do );
		}
		return $r;
	}

