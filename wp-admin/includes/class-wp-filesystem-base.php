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
	 * Return the path on the remote filesystem of WP_CONTENT_DIR.
	 *
	 * @access public
	 * @since 2.7.0
	 *
	 * @return string The location of the remote path.
	 */
	public function wp_content_dir() {
		return $this->find_folder(WP_CONTENT_DIR);
	}

	/**
	 * Connect filesystem.
	 *
	 * @since 2.5.0
	 *
	 * @return bool True on success or false on failure (always true for WP_Filesystem_Direct).
	 */
	public function connect() {
		return true;
	}
}
