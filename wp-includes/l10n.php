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
 * Retrieve the translation of $text in the context defined in $context.
 *
 * If there is no translation, or the text domain isn't loaded the original
 * text is returned.
 *
 * @since 2.8.0
 *
 * @param string $text    Text to translate.
 * @param string $context Context information for the translators.
 * @param string $domain  Optional. Text domain. Unique identifier for retrieving translated strings.
 * @return string Translated text on success, original text on failure.
 */
function translate_with_gettext_context( $text, $context, $domain = 'default' ) {
	$translations = get_translations_for_domain( $domain );
	$translations = $translations->translate( $text, $context );
	/**
	 * Filter text with its translation based on contextinformation.
	 *
	 * @since 2.8.0
	 *
	 * @param string $translations Translated text.
	 * @param string $text         Text to translate.
	 * @param string $context      Context information for the translators.
	 * @param string $domain       Text domain. Unique identifier for retrieving translated strings.
	 */
	return apply_filters( 'gettext_with_context', $translations, $text, $context, $domain );
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
 * Retrieve translated string with gettext context.
 *
 * Quite a few times, there will be collisions with similar translatable text
 * found in more than two places, but with different translated context.
 *
 * By including the context in the pot file, translators can translate the two
 * strings differently.
 *
 * @since 2.8.0
 *
 * @param string $text    Text to translate.
 * @param string $context Context information for the translators.
 * @param string $domain  Optional. Text domain. Unique identifier for retrieving translated strings.
 * @return string Translated context string without pipe.
 */
function _x( $text, $context, $domain = 'default' ) {
	return translate_with_gettext_context( $text, $context, $domain );
}

/**
 * Load a .mo file into the text domain $domain.
 *
 * If the text domain already exists, the translations will be merged. If both
 * sets have the same string, the translation from the original value will be taken.
 *
 * On success, the .mo file will be placed in the $l10n global by $domain
 * and will be a MO object.
 *
 * @since 1.5.0
 *
 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
 * @param string $mofile Path to the .mo file.
 * @return bool True on success, false on failure.
 */
function load_textdomain( $domain, $mofile ) {
	global $l10n;

	/**
	 * Filter text domain and/or MO file path for loading translations.
	 *
	 * @since 2.9.0
	 *
	 * @param bool   $override Whether to override the text domain. Default false.
	 * @param string $domain   Text domain. Unique identifier for retrieving translated strings.
	 * @param string $mofile   Path to the MO file.
	 */
	$plugin_override = apply_filters( 'override_load_textdomain', false, $domain, $mofile );

	if ( true == $plugin_override ) {
		return true;
	}

	/**
	 * Fires before the MO translation file is loaded.
	 *
	 * @since 2.9.0
	 *
	 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
	 * @param string $mofile Path to the .mo file.
	 */
	do_action( 'load_textdomain', $domain, $mofile );

	/**
	 * Filter MO file path for loading translations for a specific text domain.
	 *
	 * @since 2.9.0
	 *
	 * @param string $mofile Path to the MO file.
	 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
	 */
	$mofile = apply_filters( 'load_textdomain_mofile', $mofile, $domain );

	if ( !is_readable( $mofile ) ) return false;

	$mo = new MO();
	if ( !$mo->import_from_file( $mofile ) ) return false;

	if ( isset( $l10n[$domain] ) )
		$mo->merge_with( $l10n[$domain] );

	$l10n[$domain] = &$mo;

	return true;
}

/**
 * Return the Translations instance for a text domain.
 *
 * If there isn't one, return empty Translations instance.
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
