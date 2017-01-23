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
	 * Locate a folder on the remote filesystem.
	 *
	 * Assumes that on Windows systems, Stripping off the Drive
	 * letter is OK Sanitizes \\ to / in windows filepaths.
	 *
	 * @access public
	 * @since 2.7.0
	 *
	 * @param string $folder the folder to locate.
	 * @return string The location of the remote path.
	 */
	public function find_folder( $folder ) {

		if ( isset( $this->cache[ $folder ] ) )
			return $this->cache[ $folder ];

		if ( stripos($this->method, 'ftp') !== false ) {
			$constant_overrides = array(
				'FTP_BASE' => ABSPATH,
				'FTP_CONTENT_DIR' => WP_CONTENT_DIR,
				'FTP_PLUGIN_DIR' => WP_PLUGIN_DIR,
				'FTP_LANG_DIR' => WP_LANG_DIR
			);

			// Direct matches ( folder = CONSTANT/ )
			foreach ( $constant_overrides as $constant => $dir ) {
				if ( ! defined( $constant ) )
					continue;
				if ( $folder === $dir )
					return trailingslashit( constant( $constant ) );
			}

			// Prefix Matches ( folder = CONSTANT/subdir )
			foreach ( $constant_overrides as $constant => $dir ) {
				if ( ! defined( $constant ) )
					continue;
				if ( 0 === stripos( $folder, $dir ) ) { // $folder starts with $dir
					$potential_folder = preg_replace( '#^' . preg_quote( $dir, '#' ) . '/#i', trailingslashit( constant( $constant ) ), $folder );
					$potential_folder = trailingslashit( $potential_folder );

					if ( $this->is_dir( $potential_folder ) ) {
						$this->cache[ $folder ] = $potential_folder;
						return $potential_folder;
					}
				}
			}
		} elseif ( 'direct' == $this->method ) {
			$folder = str_replace('\\', '/', $folder); // Windows path sanitisation
			return trailingslashit($folder);
		}

		$folder = preg_replace('|^([a-z]{1}):|i', '', $folder); // Strip out windows drive letter if it's there.
		$folder = str_replace('\\', '/', $folder); // Windows path sanitisation

		if ( isset($this->cache[ $folder ] ) )
			return $this->cache[ $folder ];

		if ( $this->exists($folder) ) { // Folder exists at that absolute path.
			$folder = trailingslashit($folder);
			$this->cache[ $folder ] = $folder;
			return $folder;
		}
		if ( $return = $this->search_for_folder($folder) )
			$this->cache[ $folder ] = $return;
		return $return;
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

















































































































































































































































































































































} // WP_Filesystem_Base
