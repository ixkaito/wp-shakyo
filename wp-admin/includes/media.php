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
