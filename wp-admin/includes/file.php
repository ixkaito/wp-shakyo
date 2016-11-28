<?php
/**
 * Functions for reading, writing, modifying, and deleting files on the file system.
 * Includes functionality for theme-specific files as well as operations for uploading,
 * archiving, and rendering output when necessary.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** The descriptions for theme files. */
$wp_file_descriptions = array(
	'index.php' => __( 'Main Index Template' ),
	'style.css' => __( 'Stylesheet' ),
	'editor-style.css' => __( 'Visual Editor Stylesheet' ),
	'editor-style-rtl.css' => __( 'Visual Editor RTL Stylesheet' ),
	'rtl.css' => __( 'RTL Stylesheet' ),
	'comments.php' => __( 'Comments' ),
	'comments-popup.php' => __( 'Popup Comments' ),
	'footer.php' => __( 'Footer' ),
	'header.php' => __( 'Header' ),
	'sidebar.php' => __( 'Sidebar' ),
	'archive.php' => __( 'Archives' ),
	'author.php' => __( 'Author Template' ),
	'tag.php' => __( 'Tag Template' ),
	'category.php' => __( 'Category Template' ),
	'page.php' => __( 'Page Template' ),
	'search.php' => __( 'Search Results' ),
	'searchform.php' => __( 'Search Form' ),
	'single.php' => __( 'Single Post' ),
	'404.php' => __( '404 Template' ),
	'link.php' => __( 'Links Template' ),
	'functions.php' => __( 'Theme Functions' ),
	'attachment.php' => __( 'Attachment Template' ),
	'image.php' => __('Image Attachment Template'),
	'video.php' => __('Video Attachment Template'),
	'audio.php' => __('Audio Attachment Template'),
	'application.php' => __('Application Attachment Template'),
	'my-hacks.php' => __( 'my-hacks.php (legacy hacks support)' ),
	'.htaccess' => __( '.htaccess (for rewrite rules )' ),
	// Deprecated files
	'wp-layout.css' => __( 'Stylesheet' ),
	'wp-comments.php' => __( 'Comments Template' ),
	'wp-comments-popup.php' => __( 'Popup Comments Template' ),
);
