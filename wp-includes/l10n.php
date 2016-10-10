<?php
/**
 * WordPress Translation API
 *
 * @package WordPress
 * @subpackage i18n
 */

/**
 * Retrieve the translation of $text.
 *
 * If there is no translation, or the text domain isn't loaded, the original text is returned.
 *
 * <strong>Note:</strong> Don't use translate() directly, use __() or related functions.
 *
 * @since 2.2.0
 *
 * @param string $text   Text to translate.
 * @param string $domain Optional. Text domain. Unique identifier for retrieving translated strings.
 * @return string Translated text
 */
function translate( $text, $domain = 'default' ) {
	$translations = get_translations_for_domain( $domain );
	$translations = $translations->translate( $text );
	/**
	 * Filter text with its translation.
	 *
	 * @since 2.0.11
	 *
	 * @param string $translations Translated text.
	 * @param string $text         Text to translate.
	 * @param string $domain       Text domain. Unique identifier for retrieving translated strings.
	 */
	return apply_filters( 'gettext', $translations, $text, $domain );
}

/**
 * Retrieve the translation of $text. If there is no translation,
 * or the text domain isn't loaded, the original text is returned.
 *
 * @since 2.1.0
 *
 * @param string $text   Text to translate.
 * @param string $domain Optional. Text domain. Unique identifier for retrieving translated strings.
 * @return string Translated text.
 */
function __( $text, $domain = 'default' ) {
	return translate( $text, $domain );
}

/**
 * Display translated text.
 *
 * @since 1.2.0
 *
 * @param string $text   Text to translate.
 * @param string $domain Optional. Text domain. Unique identifier for retrieving translated strings.
 */
function _e( $text, $domain = 'default' ) {
	echo translate( $text, $domain );
}

/**
 * Return the Translations instance for a text domain.
 *
 * If there isn't one, returns empty Translations instance.
 *
 * @since 2.8.0
 *
 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
 * @return Translations A Translations instance.
 */
function get_translations_for_domain( $domain ) {
	global $l10n;
	if ( !isset( $l10n[$domain] ) ) {
		$l10n[$domain] = new NOOP_Translations;
	}
	return $l10n[$domain];
}
