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

add_shortcode( 'audio', 'wp_audio_shortcode' );

add_shortcode( 'video', 'wp_video_shortcode' );

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
