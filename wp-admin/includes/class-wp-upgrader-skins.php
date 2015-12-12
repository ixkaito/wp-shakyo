<?php
/**
 * The User Interface "Skins" for the WordPress File Upgrader
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 2.8.0
 */

/**
 * Generic Skin for the WordPress Upgrader classes. This skin is designed to be extended for specific purposes.
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 2.8.0
 */
class WP_Upgrader_Skin {

	public $upgrader;
	public $done_header = false;
	public $done_footer = false;
	public $result = false;

	public function __construct($args = array()) {
		$defaults = array( 'url' => '', 'nonce' => '', 'title' => '', 'context' => false );
		$this->options = wp_parse_args($args, $defaults);
	}

	public function request_filesystem_credentials($error = false) {
		$url = $this->options['url'];
		$context = $this->options['context'];
		if ( !empty($this->options['nonce']) )
			$url = wp_nonce_url($url, $this->options['nonce']);
		return request_filesystem_credentials($url, '', $error, $context); //Possible to bring inline, Leaving as is for now.
	}
}

/**
 * Upgrader Skin for Automatic WordPress Upgrades
 *
 * This skin is designed to be used when no output is intended, all output
 * is captured and stored for the caller to process and log/email/discard.
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 3.7.0
 */
class Automatic_Upgrader_Skin extends WP_Upgrader_Skin {
	protected $messages = array();

}
