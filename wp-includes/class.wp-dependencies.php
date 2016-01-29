<?php
/**
 * BackPress Scripts enqueue
 *
 * Classes were refactored from the WP_Scripts and WordPress script enqueue API.
 *
 * @since BackPress r74
 *
 * @package BackPress
 * @uses _WP_Dependency
 * @since r74
 */
class WP_Dependencies {

	/**
	 * Register an item.
	 *
	 * Registers the item if no item of that name already exists.
	 *
	 * @access public
	 * @since 2.1.0
	 *
	 * @param string $handle Unique item name.
	 * @param string $src    The item url.
	 * @param array  $deps   Optional. An array of item handle strings on which this item depends.
	 * @param string $ver    Optional. Version (used for cache busting).
	 * @param mixed  $args   Optional. Custom property of the item. NOT the class property $args. Examples: $media, $in_footer.
	 * @return bool True on success, false on failure.
	 */
	public function add( $handle, $src, $deps = array(), $ver = false, $args = null ) {
		if ( isset($this->registered[$handle]) )
			return false;
		$this->registered[$handle] = new _WP_Dependency( $handle, $src, $deps, $ver, $args );
		return true;
	}

	/**
	 * Query list for an item.
	 *
	 * @access public
	 * @since 2.1.0
	 *
	 * @param string $handle Name of the item. Should be unique.
	 * @param string $list   Property name of list array.
	 * @return bool Found, or object Item data.
	 */
	public function query( $handle, $list = 'registered' ) {
		switch ( $list ) {
			case 'registered' :
			case 'scripts': // back compat
				if ( isset( $this->registered[ $handle ] ) )
					return $this->registered[ $handle ];
				return false;

			case 'enqueued' :
			case 'queue' :
				if ( in_array( $handle, $this->queue ) ) {
					return true;
				}
				return $this->recurse_deps( $this->queue, $handle );

			case 'to_do' :
			case 'to_print': // back compat
				return in_array( $handle, $this->to_do );

			case 'done' :
			case 'printed': // back compat
				return in_array( $handle, $this->done );
		}
		return false;
	}
}

/**
 * Class _WP_Dependency
 *
 * Helper class to register a handle and associated data.
 *
 * @access private
 * @since 2.6.0
 */
class _WP_Dependency {}