<?php
/**
 * WordPress Rewrite API
 *
 * @package WordPress
 * @subpackage Rewrite
 */

/**
 * Endpoint Mask for default, which is nothing.
 *
 * @since 2.1.0
 */
define('EP_NONE', 0);

/**
 * Endpoint Mask for Permalink.
 *
 * @since 2.1.0
 */
define('EP_PERMALINK', 1);

/**
 * Endpoint Mask for Attachment.
 *
 * @since 2.1.0
 */
define('EP_ATTACHEMENT', 2);

/**
 * Endpoint Mask for date.
 *
 * @since 2.1.0
 */
define('EP_DATE', 4);

/**
 * Endpoint Mask for year
 *
 * @since 2.1.0
 */
define('EP_YEAR', 8);

/**
 * Endpoint Mask for month.
 *
 * @since 2.1.0
 */
define('EP_MONTH', 16);

/**
 * Endpoint Mask for day.
 *
 * @since 2.1.0
 */
define('EP_DAY', 32);

/**
 * Endpoint Mask for root.
 *
 * @since 2.1.0
 */
define('EP_ROOT', 64);

/**
 * Endpoint Mask for comments.
 *
 * @since 2.1.0
 */
define('EP_COMMENTS', 128);

/**
 * Endpoint Mask for searches.
 *
 * @since 2.1.0
 */
define('EP_SEARCH', 256);

/**
 * Endpoint Mask for categories.
 *
 * @since 2.1.0
 */
define('EP_CATEGORIES', 512);

/**
 * Endpoint Mask for tags.
 *
 * @since 2.3.0
 */
define('EP_TAGS', 1024);

/**
 * Endpoint Mask for authors.
 *
 * @since 2.1.0
 */
define('EP_AUTHORS', 2048);

/**
 * Endpoint Mask for pages.
 *
 * @since 2.1.0
 */
define('EP_PAGES', 4096);

/**
 * Endpoint Mask for all archive views.
 *
 * @since 3.7.0
 */
define( 'EP_ALL_ARCHIVES', EP_DATE | EP_YEAR | EP_MONTH | EP_DAY | EP_CATEGORIES | EP_TAGS | EP_AUTHORS );

/**
 * Endpoint Mask for everything.
 *
 * @since 2.1.0
 */
define( 'EP_ALL', EP_PERMALINK | EP_ATTACHMENT | EP_ROOT | EP_COMMENTS | EP_SEARCH | EP_PAGES | EP_ALL_ARCHIVES );

/**
 * WordPress Rewrite Component.
 *
 * The WordPress Rewrite class writes the rewrite module rules to the .htaccess
 * file. It also handles parsing the request to get the correct setup for the
 * WordPress Query class.
 *
 * The Rewrite along with WP class function as a front controller for WordPress.
 * You can add rules to trigger your page view and processing using this
 * component. The full functionality of a front controller does not exist,
 * meaning you can't define how the template files load based on the rewrite
 * rules.
 *
 * @since 1.5.0
 */
class WP_Rewrite {
	/**
	 * Permalink structure for posts.
	 *
	 * @since 1.5.0
	 * @access private
	 * @var string
	 */
	var $permalink_structure;

	/**
	 * Whether to add trailing slashes.
	 *
	 * @since 2.2.0
	 * @access private
	 * @var bool
	 */
	var $use_trailing_slashes;

	/**
	 * Base for the author permalink structure (example.com/$author_base/authorname).
	 *
	 * @since 1.5.0
	 * @access private
	 * @var string
	 */
	var $author_base = 'author';

	/**
	 * Permalink struture for author archives.
	 *
	 * @since 1.5.0
	 * @access private
	 * @var string
	 */
	var $author_structure;

	/**
	 * Whether permalinks are being used and rewrite module is not enabled.
	 *
	 * Means that permalink links are enabled and index.php is in the URL.
	 *
	 * @since 1.5.0
	 * @access public
	 *
	 * @return bool
	 */
	public function using_index_permalinks() {
		if ( empty($this->permalink_structure) )
			return false;

		// If the index is not in the permalink, we're using mod_rewrite.
		if ( preg_match('#^/*' . $this->index . '#', $this->permalink_structure) )
			return true;

		return false;
	}
	/**
	 * Sets up the object's properties.
	 *
	 * The 'use_verbose_page_rules' object property will be set to true if the
	 * permalink structure begins with one of the following: '%postname%', '%category%',
	 * '%tag%', or '%author%'.
	 *
	 * @since 1.5.0
	 * @access public
	 */
	public function init() {
		$this->extra_rules = $this->non_wp_rules = $this->endpoints = array();
		$this->permalink_structure = get_option('permalink_structure');
		$this->front = substr($this->permalink_structure, 0, strpos($this->permalink_structure, '%'));
		$this->root = '';
		if ( $this->using_index_permalinks() )
			$this->root = $this->index . '/';
		unset($this->author_structure);
		unset($this->date_structure);
		unset($this->page_structure);
		unset($this->search_structure);
		unset($this->feed_structure);
		unset($this->comment_feed_structure);
		$this->use_trailing_slashes = ( '/' == substr($this->permalink_structure, -1, 1) );

		// Enable generic rules for pages if permalink structure doesn't begin with a wildcard.
		if ( preg_match("/^[^%]*%(?:postname|category|tag|author)%/", $this->permalink_structure) )
			 $this->use_verbose_page_rules = true;
		else
			$this->use_verbose_page_rules = false;
	}

	/**
	 * Constructor - Calls init(), which runs setup.
	 *
	 * @since 1.5.0
	 * @access public
	 *
	 * @return WP_Rewrite
	 */
	public function __construct() {
		$this->init();
	}
}