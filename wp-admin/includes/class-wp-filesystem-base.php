<?php
/**
 * Base WordPress Filesystem
 *
 * @package WordPress
 * @subpackage Filesystem
 */

/**
 * Base WordPress Filesystem class for which Filesystem implementations extend
 *
 * @since 2.5.0
 */
class WP_Filesystem_Base {
	/**
	 * Whether to display debug data for the connection.
	 *
	 * @access public
	 * @since 2.5.0
	 * @var bool
	 */
	public $verbose = false;

	/**
	 * Cached list of local filepaths to mapped remote filepaths.
	 *
	 * @access private
	 * @since 2.7.0
	 * @var array
	 */
	private $cache = array();

	/**
	 * The Access method of the current connection, Set automatically.
	 *
	 * @access public
	 * @since 2.5.0
	 * @var string
	 */
	public $method = '';

} // WP_Filesystem_Base