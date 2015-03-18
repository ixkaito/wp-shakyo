<?php
/**
 * WordPress API for media display.
 *
 * @package WordPress
 * @subpackage Media
 */

add_shortcode('wp_caption', 'img_caption_shortcode');
add_shortcode('caption', 'img_caption_shortcode');

add_shortcode('gallery', 'gallery_shortcode');

add_shortcode( 'playlist', 'wp_playlist_shortcode' );

/**
 * Return a filtered list of WP-supported audio formats.
 *
 * @since 3.6.0
 * @return array
 */
function wp_get_audio_extensions() {
	/**
	 * Filter the list of supported audio formats.
	 *
	 * @since 3.6.0
	 *
	 * @param array $extensions An array of support audio formats. Defaults are
	 *                          'mp3', 'ogg', 'wma', 'm4a', 'wav'.
	 */
	return apply_filters( 'wp_audio_extensions', array( 'mp3', 'ogg', 'wma', 'm4a', 'wav' ) );
}

add_shortcode( 'audio', 'wp_audio_shortcode' );

/**
 * Return a filtered list of WP-supported video formats
 *
 * @since 3.6.0
 * @return array
 */
function wp_get_video_extensions() {
	/**
	 * Filter the list of supported video formats.
	 *
	 * @since 3.6.0
	 *
	 * @param array $extensions An array of support video formats. Defaults are
	 *                          'mp4', 'm4v', 'webm', 'ogv', 'wmv', 'flv'.
	 */
	return apply_filters( 'wp_video_extensions', array( 'mp4', 'm4v', 'webm', 'ogv', 'wmv', 'flv' ) );
}

add_shortcode( 'video', 'wp_video_shortcode' );

/**
 * Register an embed handler. This function should probably only be used for sites that do not support oEmbed.
 *
 * @since 2.9.0
 * @see WP_Embed::register_handler()
 */
function wp_embed_register_handler( $id, $regex, $callback, $priority = 10 ) {
	global $wp_embed;
	$wp_embed->register_handler( $id, $regex, $callback, $priority );
}

/**
 * Determines if default embed handlers should be loaded.
 *
 * Checks to make sure that the embeds library hasn't already been loaded. If
 * it hasn't, then it will load the embeds library.
 *
 * @since 2.9.0
 */
function wp_maybe_load_embeds() {
	/**
	 * Filter whether to load the default embed handlers.
	 *
	 * Returning a falsey value will prevent loading the default embed handlers.
	 *
	 * @since 2.9.0
	 *
	 * @param bool $maybe_load_embeds Whether to load the embeds library. Default true.
	 */
	if ( ! apply_filters( 'load_default_embeds', true ) ) {
		return;
	}

	wp_embed_register_handler( 'youtube_embed_url', '#https?://(www.)?youtube\.com/embed/([^/]+)#i', 'wp_embed_handler_youtube' );

	wp_embed_register_handler( 'googlevideo', '#http://video\.google\.([A-Za-z.]{2,5})/videoplay\?docid=([\d-]+)(.*?)#i', 'wp_embed_handler_googlevideo' );

	/**
	 * Filter the audio embed handler callback.
	 *
	 * @since 3.6.0
	 *
	 * @param callback $handler Audio embed handler callback function.
	 */
	wp_embed_register_handler( 'audio', '#^https?://.+?\.(' . join( '|', wp_get_audio_extensions() ) . ')$#i', apply_filters( 'wp_audio_embed_handler', 'wp_embed_handler_audio' ), 9999 );

	/**
	 * Filter the video embed handler callback.
	 *
	 * @since 3.6.0
	 *
	 * @param callback $handler Video embed handler callback function.
	 */
	wp_embed_register_handler( 'video', '#^https?://.+?\.(' . join( '|', wp_get_video_extensions() ) . ')$#i', apply_filters( 'wp_video_embed_handler', 'wp_embed_handler_video' ), 9999 );
}

add_action( 'customize_controls_enqueue_scripts', 'wp_plupload_default_settings' );
