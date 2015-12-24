<?php
/**
 * WordPress Translation Install Administration API
 *
 * @package WordPress
 * @subpackage Administration
 */

/**
 * Get available translations from the WordPress.org API.
 *
 * @since 4.0.0
 *
 * @see translations_api()
 *
 * @return array Array of translations, each an array of data. If the API response results
 *               in an error, an empty array will be returned.
 */
function wp_get_available_translations() {
	if ( ! defined( 'WP_INSTALLING' ) && false !== ( $translations = get_site_transient( 'available_translations' ) ) ) {
		return $translations;
	}

	include( ABSPATH . WPINC . '/version.php' ); // include an unmodified $wp_version

	$api = translations_api( 'core', array( 'version' => $wp_version ) );

	if ( is_wp_error( $api ) || empty( $api['translations'] ) ) {
		return array();
	}

	$translations = array();
	// Key the array with the language code for now.
	foreach ( $api['translations'] as $translation ) {
		$translations[ $translation['language'] ] = $translation;
	}

	if ( ! defined( 'WP_INSTALLING' ) ) {
		set_site_transient( 'available_translations', $translations, 3 * HOUR_IN_SECONDS );
	}

	return $translations;
}

/**
 * Check if WordPress has access to the filesystem without asking for
 * credentials.
 *
 * @since 4.0.0
 *
 * @return bool Returns true on success, false on failure.
 */
function wp_can_install_language_pack() {
	if ( defined( 'DISALLOW_FILE_MODS' ) && DISALLOW_FILE_MODS ) {
		return false;
	}

	require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
	$skin = new Automatic_Upgrader_Skin;
	$upgrader = new Language_Pack_Upgrader( $skin );

	$check = $upgrader->fs_connect( array( WP_CONTENT_DIR, WP_LANG_DIR ) );

	if ( ! $check || is_wp_error( $check ) ) {
		return false;
	}

	return true;
}
