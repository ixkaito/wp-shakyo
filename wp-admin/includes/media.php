<?php
/**
 * WordPress Administration Media API.
 *
 * @package WordPress
 * @subpackage Administration
 */

add_filter('media_upload_tabs', 'update_gallery_tab');

add_filter( 'image_send_to_editor', 'image_add_caption', 20, 8 );

add_action( 'media_buttons', 'media_buttons' );

add_filter( 'attachment_fields_to_save', 'image_attachment_fields_to_save', 10, 2 );

add_filter('media_send_to_editor', 'image_media_send_to_editor', 10, 3);

add_action('post-plupload-upload-ui', 'media_upload_flash_bypass');

add_action('post-html-upload-ui', 'media_upload_html_bypass');

add_filter( 'async_upload_image', 'get_media_item', 10, 2 );
add_filter( 'async_upload_audio', 'get_media_item', 10, 2 );
add_filter( 'async_upload_video', 'get_media_item', 10, 2 );
add_filter( 'async_upload_file',  'get_media_item', 10, 2 );

add_action( 'media_upload_image', 'wp_media_upload_handler' );
add_action( 'media_upload_audio', 'wp_media_upload_handler' );
add_action( 'media_upload_video', 'wp_media_upload_handler' );
add_action( 'media_upload_file',  'wp_media_upload_handler' );

add_filter( 'media_upload_gallery', 'media_upload_gallery' );
add_filter( 'media_upload_library', 'media_upload_library' );

add_action( 'attachment_submitbox_misc_actions', 'attachment_submitbox_metadata' );
