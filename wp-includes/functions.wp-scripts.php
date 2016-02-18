<?php
/**
 * BackPress Scripts Procedural API
 *
 * @since 2.6.0
 *
 * @package WordPress
 * @subpackage BackPress
 */

/**
 * Print scripts in document head that are in the $handles queue.
 *
 * Called by admin-header.php and wp_head hook. Since it is called by wp_head on every page load,
 * the function does not instantiate the WP_Scripts object unless script names are explicitly passed.
 * Makes use of already-instantiated $wp_scripts global if present. Use provided wp_print_scripts
 * hook to register/enqueue new scripts.
 *
 * @see WP_Scripts::do_items()
 * @global WP_Scripts $wp_scripts The WP_Scripts object for printing scripts.
 *
 * @since 2.6.0
 *
 * @param array|bool $handles Optional. Scripts to be printed. Default 'false'.
 * @return array On success, a processed array of WP_Dependencies items; otherwise, an empty array.
 */
function wp_print_scripts( $handles = false ) {
	/**
	 * Fires before scripts in the $handles queue are printed.
	 *
	 * @since 2.1.0
	 */
	do_action( 'wp_print_scripts' );
	if ( '' === $handles ) // for wp_head
		$handles = false;

	global $wp_scripts;
	if ( ! is_a( $wp_scripts, 'WP_Scripts' ) ) {
		if ( ! did_action( 'init' ) )
			_doing_it_wrong( __FUNCTION__, sprintf( __( 'Scripts and styles should not be registered or enqueued until the %1$s, %2$s, or %3$s hooks.' ),
				'<code>wp_enqueue_scripts</code>', '<code>admin_enqueue_scripts</code>', '<code>login_enqueue_scripts</code>' ), '3.3' );

		if ( !$handles )
			return array(); // No need to instantiate if nothing is there.
		else
			$wp_scripts = new WP_Scripts();
	}

	return $wp_scripts->do_items( $handles );
}

/**
 * Localize a script.
 *
 * Works only if the script has already been added.
 *
 * Accepts an associative array $l10n and creates a JavaScript object:
 * <code>
 * "$object_name" = {
 *       key: value,
 *       key: value,
 *       ...
 * }
 * </code>
 *
 * @see WP_Dependencies::localize()
 * @link http://core.trac.wordpress.org/ticket/11520
 * @global WP_Scripts $wp_scripts The WP_Scripts object for printing scripts.
 *
 * @since 2.6.0
 *
 * @param string $handle      Script handle the data will be attached to.
 * @param string $object_name Name for the JavaScript object. Passed directly, so it should be qualified JS variable.
 *                            Example: '/[a-zA-Z0-9_]+/'.
 * @param array $l10n         The data itself. The data can be either a single or multi-dimensional array.
 * @return bool True if the script was successfully localized, false otherwise.
 */
function wp_localize_script( $handle, $object_name, $l10n ) {
	global $wp_scripts;
	if ( ! is_a( $wp_scripts, 'WP_Scripts' ) ) {
		if ( ! did_action( 'init' ) )
			_doing_it_wrong( __FUNCTION__, sprintf( __( 'Scripts and styles should not be registered or enqueued until the %1$s, %2$s, or %3$s hooks.' ),
				'<code>wp_enqueue_scripts</code>', '<code>admin_enqueue_scripts</code>', '<code>login_enqueue_scripts</code>' ), '3.3' );

		return false;
	}

	return $wp_scripts->localize( $handle, $object_name, $l10n );
}
