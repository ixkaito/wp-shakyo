<?php
/**
 * WordPress Direct Filesystem.
 *
 * @package WordPress
 * @subpackage Filesystem
 */

/**
 * WordPress Filesystem Class for direct PHP file and folder manipulation.
 *
 * @since 2.5.0
 * @package WordPress
 * @subpackage Filesystem
 * @uses WP_Filesystem_Base Extends class
 */
class WP_Filesystem_Direct extends WP_Filesystem_Base {

	/**
	 * constructor
	 *
	 * @param mixed $arg ignored argument
	 */
	public function __construct($arg) {
		$this->method = 'direct';
		$this->errors = new WP_Error();
	}
}
