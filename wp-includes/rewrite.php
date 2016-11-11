<?php
/**
 * WordPress Rewrite API
 *
 * @package WordPress
 * @subpackage Rewrite
 */

/**
 * Add a straight rewrite rule.
 *
 * @see WP_Rewrite::add_rule() for long description.
 * @since 2.1.0
 *
 * @param string $regex Regular Expression to match request against.
 * @param string $redirect Page to redirect to.
 * @param string $after Optional, default is 'bottom'. Where to add rule, can also be 'top'.
 */
function add_rewrite_rule($regex, $redirect, $after = 'bottom') {
	global $wp_rewrite;
	$wp_rewrite->add_rule($regex, $redirect, $after);
}

/**
 * Add a new rewrite tag (like %postname%).
 *
 * The $query parameter is optional. If it is omitted you must ensure that
 * you call this on, or before, the 'init' hook. This is because $query defaults
 * to "$tag=", and for this to work a new query var has to be added.
 *
 * @see WP_Rewrite::add_rewrite_tag()
 * @since 2.1.0
 *
 * @param string $tag Name of the new rewrite tag.
 * @param string $regex Regular expression to substitute the tag for in rewrite rules.
 * @param string $query String to append to the rewritten query. Must end in '='. Optional.
 */
function add_rewrite_tag( $tag, $regex, $query = '' ) {
	// validate the tag's name
	if ( strlen( $tag ) < 3 || $tag[0] != '%' || $tag[ strlen($tag) - 1 ] != '%' )
		return;

	global $wp_rewrite, $wp;

	if ( empty( $query ) ) {
		$qv = trim( $tag, '%' );
		$wp->add_query_var( $qv );
		$query = $qv . '=';
	}

	$wp_rewrite->add_rewrite_tag( $tag, $regex, $query );
}

/**
 * Add permalink structure.
 *
 * @see WP_Rewrite::add_permastruct()
 * @since 3.0.0
 *
 * @param string $name Name for permalink structure.
 * @param string $struct Permalink structure.
 * @param array $args Optional configuration for building the rules from the permalink structure,
 *     see {@link WP_Rewrite::add_permastruct()} for full details.
 */
function add_permastruct( $name, $struct, $args = array() ) {
	global $wp_rewrite;

	// backwards compatibility for the old parameters: $with_front and $ep_mask
	if ( ! is_array( $args ) )
		$args = array( 'with_front' => $args );
	if ( func_num_args() == 4 )
		$args['ep_mask'] = func_get_arg( 3 );

	return $wp_rewrite->add_permastruct( $name, $struct, $args );
}

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
define('EP_ATTACHMENT', 2);

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
	 * Permalink structure for author archives.
	 *
	 * @since 1.5.0
	 * @access private
	 * @var string
	 */
	var $author_structure;

	/**
	 * Permalink structure for date archives.
	 *
	 * @since 1.5.0
	 * @access private
	 * @var string
	 */
	var $date_structure;

	/**
	 * Permalink structure for pages.
	 *
	 * @since 1.5.0
	 * @access private
	 * @var string
	 */
	var $page_structure;

	/**
	 * Base of the search permalink structure (example.com/$search_base/query).
	 *
	 * @since 1.5.0
	 * @access private
	 * @var string
	 */
	var $search_base = 'search';

	/**
	 * Permalink structure for searches.
	 *
	 * @since 1.5.0
	 * @access private
	 * @var string
	 */
	var $search_structure;

	/**
	 * Comments permalink base.
	 *
	 * @since 1.5.0
	 * @access private
	 * @var string
	 */
	var $comments_base = 'comments';

	/**
	 * Pagination permalink base.
	 *
	 * @since 3.1.0
	 * @access private
	 * @var string
	 */
	var $pagination_base = 'page';

	/**
	 * Feed permalink base.
	 *
	 * @since 1.5.0
	 * @access private
	 * @var string
	 */
	var $feed_base = 'feed';

	/**
	 * Comments feed permalink structure.
	 *
	 * @since 1.5.0
	 * @access private
	 * @var string
	 */
	var $comments_feed_structure;

	/**
	 * Feed request permalink structure.
	 *
	 * @since 1.5.0
	 * @access private
	 * @var string
	 */
	var $feed_structure;

	/**
	 * The static portion of the post permalink structure.
	 *
	 * If the permalink structure is "/archive/%post_id%" then the front
	 * is "/archive/". If the permalink structure is "/%year%/%postname%/"
	 * then the front is "/".
	 *
	 * @see WP_Rewrite::init()
	 * @since 1.5.0
	 * @access private
	 * @var string
	 */
	var $front;

	/**
	 * The prefix for all permalink structures.
	 *
	 * If PATHINFO/index permalinks are in use then the root is the value of
	 * {@link WP_Rewrite::$index} with a trailing slash appended. Otherwise
	 * the root will be empty.
	 *
	 * @see WP_Rewrite::init()
	 * @see WP_Rewrite::using_index_permalinks()
	 * @since 1.5.0
	 * @access private
	 * @var string
	 */
	var $root = '';

	/**
	 * The name of the index file which is the entry point to all requests.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var string
	 */
	public $index = 'index.php';

	/**
	 * Variable name to use for regex matches in the rewritten query.
	 *
	 * @since 1.5.0
	 * @access private
	 * @var string
	 */
	var $matches = '';

	/**
	 * Rewrite rules to match against the request to find the redirect or query.
	 *
	 * @since 1.5.0
	 * @access private
	 * @var array
	 */
	var $rules;

	/**
	 * Additional rules added external to the rewrite class.
	 *
	 * Those not generated by the class, see add_rewrite_rule().
	 *
	 * @since 2.1.0
	 * @access private
	 * @var array
	 */
	var $extra_rules = array();

	/**
	 * Additional rules that belong at the beginning to match first.
	 *
	 * Those not generated by the class, see add_rewrite_rule().
	 *
	 * @since 2.3.0
	 * @access private
	 * @var array
	 */
	var $extra_rules_top = array();

	/**
	 * Rules that don't redirect to WordPress' index.php.
	 *
	 * These rules are written to the mod_rewrite portion of the .htaccess,
	 * and are added by {@link add_external_rule()}.
	 *
	 * @since 2.1.0
	 * @access private
	 * @var array
	 */
	var $non_wp_rules = array();

	/**
	 * Extra permalink structures, e.g. categories, added by {@link add_permastruct()}.
	 *
	 * @since 2.1.0
	 * @access private
	 * @var array
	 */
	var $extra_permastructs = array();

	/**
	 * Endpoints (like /trackback/) added by {@link add_rewrite_endpoint()}.
	 *
	 * @since 2.1.0
	 * @access private
	 * @var array
	 */
	var $endpoints;

	/**
	 * Whether to write every mod_rewrite rule for WordPress into the .htaccess file.
	 *
	 * This is off by default, turning it on might print a lot of rewrite rules
	 * to the .htaccess file.
	 *
	 * @see WP_Rewrite::mod_rewrite_rules()
	 * @since 2.0.0
	 * @access public
	 * @var bool
	 */
	public $use_verbose_rules = false;

	/**
	 * Could post permalinks be confused with those of pages?
	 *
	 * If the first rewrite tag in the post permalink structure is one that could
	 * also match a page name (e.g. %postname% or %author%) then this flag is
	 * set to true. Prior to WordPress 3.3 this flag indicated that every page
	 * would have a set of rules added to the top of the rewrite rules array.
	 * Now it tells {@link WP::parse_request()} to check if a URL matching the
	 * page permastruct is actually a page before accepting it.
	 *
	 * @link http://core.trac.wordpress.org/ticket/16687
	 * @see WP_Rewrite::init()
	 * @since 2.5.0
	 * @access public
	 * @var bool
	 */
	public $use_verbose_page_rules = true;

	/**
	 * Rewrite tags that can be used in permalink structures.
	 *
	 * These are translated into the regular expressions stored in
	 * {@link WP_Rewrite::$rewritereplace} and are rewritten to the
	 * query variables listed in {@link WP_Rewrite::$queryreplace}.
	 *
	 * Additional tags can be added with {@link add_rewrite_tag()}.
	 *
	 * @since 1.5.0
	 * @access private
	 * @var array
	 */
	var $rewritecode = array(
		'%year%',
		'%monthnum%',
		'%day%',
		'%hour%',
		'%minute%',
		'%second%',
		'%postname%',
		'%post_id%',
		'%author%',
		'%pagename%',
		'%search%'
	);

	/**
	 * Regular expressions to be substituted into rewrite rules in place
	 * of rewrite tags, see {@link WP_Rewrite::$rewritecode}.
	 *
	 * @since 1.5.0
	 * @access private
	 * @var array
	 */
	var $rewritereplace = array(
		'([0-9]{4})',
		'([0-9]{1,2})',
		'([0-9]{1,2})',
		'([0-9]{1,2})',
		'([0-9]{1,2})',
		'([0-9]{1,2})',
		'([^/]+)',
		'([0-9]+)',
		'([^/]+)',
		'([^/]+?)',
		'(.+)'
	);

	/**
	 * Query variables that rewrite tags map to, see {@link WP_Rewrite::$rewritecode}.
	 *
	 * @since 1.5.0
	 * @access private
	 * @var array
	 */
	var $queryreplace = array(
		'year=',
		'monthnum=',
		'day=',
		'hour=',
		'minute=',
		'second=',
		'name=',
		'p=',
		'author_name=',
		'pagename=',
		's='
	);

	/**
	 * Supported default feeds.
	 *
	 * @since 1.5.0
	 * @access private
	 * @var array
	 */
	var $feeds = array( 'feed', 'rdf', 'rss', 'rss2', 'atom' );

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
