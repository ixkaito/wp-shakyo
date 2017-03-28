<?php
/**
 * WP_Theme Class
 *
 * @package WordPress
 * @subpackage Theme
 */

final class WP_Theme implements ArrayAccess {

	/**
	 * Headers for style.css files.
	 *
	 * @static
	 * @access private
	 * @var array
	 */
	private static $file_headers = array(
		'Name'        => 'Theme Name',
		'ThemeURI'    => 'Theme URI',
		'Description' => 'Description',
		'Author'      => 'Author',
		'AuthorURI'   => 'Author URI',
		'Version'     => 'Version',
		'Template'    => 'Template',
		'Status'      => 'Status',
		'Tags'        => 'Tags',
		'TextDomain'  => 'Text Domain',
		'DomainPath'  => 'Domain Path',
	);

	/**
	 * Default themes.
	 *
	 * @static
	 * @access private
	 * @var array
	 */
	private static $default_themes = array(
		'classic'        => 'WordPress Classic',
		'default'        => 'WordPress Default',
		'twentyten'      => 'Twenty Ten',
		'twentyeleven'   => 'Twenty Eleven',
		'twentytwelve'   => 'Twenty Twelve',
		'twentythirteen' => 'Twenty Thirteen',
		'twentyfourteen' => 'Twenty Fourteen',
	);

	/**
	 * Renamed theme tags.
	 */
	private static $tag_map = array(
		'fixed-width'    => 'fixed-layout',
		'flexible-width' => 'fluid-layout',
	);

	/**
	 * Absolute path to the theme root, usually wp-content/themes
	 *
	 * @access private
	 * @var string
	 */
	private $theme_root;

	/**
	 * Header data from the theme's style.css file.
	 *
	 * @access private
	 * @var array
	 */
	private $headers = array();

	/**
	 * Header data from the theme's style.css file after being sanitized.
	 *
	 * @access private
	 * @var array
	 */
	private $headers_sanitized;

	/**
	 * Header name from the theme's style.css after being translated.
	 *
	 * Cached due to sorting functions running over the translated name.
	 */
	private $name_translated;

	/**
	 * Errors encountered when initializing the theme.
	 *
	 * @access private
	 * @var WP_Error
	 */
	private $errors;

	/**
	 * The directory name of the theme's files, inside the theme root.
	 *
	 * In the case of a child theme, this is directory name of the child theme.
	 * Otherwise, 'stylesheet' is the same as 'template'.
	 *
	 * @access private
	 * @var string
	 */
	private $stylesheet;

	/**
	 * The directory name of the theme's files, inside the theme root.
	 *
	 * In the case of a child theme, this is the directory name of the parent theme.
	 * Otherwise, 'template' is the same as 'stylesheet'.
	 *
	 * @access private
	 * @var string
	 */
	private $template;

	/**
	 * A reference to the parent theme, in the case of a child theme.
	 *
	 * @access private
	 * @var WP_Theme
	 */
	private $parent;

	/**
	 * URL to the theme root, usually an absolute URL to wp-content/themes
	 *
	 * @access private
	 * var string
	 */
	private $theme_root_uri;

	/**
	 * Flag for whether the theme's textdomain is loaded.
	 *
	 * @access private
	 * @var bool
	 */
	private $textdomain_loaded;

	/**
	 * Stores an md5 hash of the theme root, to function as the cache key.
	 *
	 * @access private
	 * @var string
	 */
	private $cache_hash;

	/**
	 * Flag for whether the themes cache bucket should be persistently cached.
	 *
	 * Default is false. Can be set with the wp_cache_themes_persistently filter.
	 *
	 * @access private
	 * @var bool
	 */
	private static $persistently_cache;

	/**
	 * Expiration time for the themes cache bucket.
	 *
	 * By default the bucket is not cached, so this value is useless.
	 *
	 * @access private
	 * @var bool
	 */
	private static $cache_expiration = 1800;

}
