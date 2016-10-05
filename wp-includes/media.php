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

add_action( 'wp_playlist_scripts', 'wp_playlist_scripts' );

add_shortcode( 'playlist', 'wp_playlist_shortcode' );

add_shortcode( 'audio', 'wp_audio_shortcode' );

add_shortcode( 'video', 'wp_video_shortcode' );

add_action( 'customize_controls_enqueue_scripts', 'wp_plupload_default_settings' );
