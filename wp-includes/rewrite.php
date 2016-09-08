<?php
/**
 * WordPress Rewrite API
 *
 * @package WordPress
 * @subpackage Rewrite
 */

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
 * Remove rewrite rules and then recreate rewrite rules.
 *
 * @see WP_Rewrite::flush_rules()
 * @since 3.0.0
 *
 * @param bool $hard Whether to update .htaccess (hard flush) or just update
 * 	rewrite_rules transient (soft flush). Default is true (hard).
 */
function flush_rewrite_rules( $hard = true ) {
	global $wp_rewrite;
	$wp_rewrite->flush_rules( $hard );
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
 * Filter the URL base for taxonomies.
 *
 * To remove any manually prepended /index.php/.
 *
 * @access private
 * @since 2.6.0
 *
 * @param string $base The taxonomy base that we're going to filter
 * @return string
 */
function _wp_filter_taxonomy_base( $base ) {
	if ( !empty( $base ) ) {
		$base = preg_replace( '|^/index\.php/|', '', $base );
		$base = trim( $base, '/' );
	}
	return $base;
}

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
	 * @see WP_Rewrite:mod_rewrite_rules()
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
	 * @see  WP_Rewrite::init()
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
	 * Whether permalinks are being used.
	 *
	 * This can be either rewrite module or permalink in the HTTP query string.
	 *
	 * @since 1.5.0
	 * @access public
	 *
	 * @return bool True, if permalinks are enabled.
	 */
	public function using_permalinks() {
		return ! empty($this->permalink_structure);
	}

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
	 * Add or update existing rewrite tags (e.g. %postname%).
	 *
	 * If the tag already exists, replace the existing pattern and query for
	 * that tag, otherwise add the new tag.
	 *
	 * @see WP_Rewrite::$rewritecode
	 * @see WP_Rewrite::$rewritereplace
	 * @see WP_Rewrite::$queryreplace
	 * @since 1.5.0
	 * @access public
	 *
	 * @param string $tag Name of the rewrite tag to add or update.
	 * @param string $regex Regular expression to substitute the tag for in rewrite rules.
	 * @param string $query String to append to the rewritten query. Must end in '='.
	 */
	public function add_rewrite_tag( $tag, $regex, $query ) {
		$position = array_search( $tag, $this->rewritecode );
		if ( false !== $position && null !== $position ) {
			$this->rewritereplace[ $position ] = $regex;
			$this->queryreplace[ $position ] = $query;
		} else {
			$this->rewritecode[] = $tag;
			$this->rewritereplace[] = $regex;
			$this->queryreplace[] = $query;
		}
	}

	/**
	 * Construct rewrite matches and queries from permalink structure.
	 *
	 * Runs the action 'generate_rewrite_rules' with the parameter that is an
	 * reference to the current WP_Rewrite instance to further manipulate the
	 * permalink structures and rewrite rules. Runs the 'rewrite_rules_array'
	 * filter on the full rewrite rule array.
	 *
	 * There are two ways to manipulate the rewrite rules, one by hooking into
	 * the 'generate_rewrite_rules' action and gaining full control of the
	 * object or just manipulating the rewrite rule array before it is passed
	 * from the function.
	 *
	 * @since 1.5.0
	 * @access public
	 *
	 * @return array An associate array of matches and queries.
	 */
	public function rewrite_rules() {
		$rewrite = array();

		if ( empty($this->permalink_structure) )
			return $rewrite;

		// robots.txt -only if installed at the root
		$home_path = parse_url( home_url() );
		$robots_rewrite = ( empty( $home_path['path'] ) || '/' == $home_path['path'] ) ? array( 'robots\.txt$' => $this->index . '?robots=1' ) : array();

		// Old feed and service files
		$deprecated_files = array(
			'.*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\.php$' => $this->index . '?feed=old',
			'.*wp-app\.php(/.*)?$' => $this->index . '?error=403',
		);

		// Registration rules
		$registration_pages = array();
		if ( is_multisite() && is_main_site() ) {
			$registration_pages['.*wp-signup.php$'] = $this->index . '?signup=true';
			$registration_pages['.*wp-activate.php$'] = $this->index . '?activate=true';
		}
		$registration_pages['.*wp-register.php$'] = $this->index . '?register=true'; // Deprecated

		// Post rewrite rules.
		$post_rewrite = $this->generate_rewrite_rules( $this->permalink_structure, EP_PERMALINK );

		/**
		 * Filter rewrite rules used for "post" archives.
		 *
		 * @since 1.5.0
		 *
		 * @param array $post_rewrite The rewrite rules for posts.
		 */
		$post_rewrite = apply_filters( 'post_rewrite_rules', $post_rewrite );

		// Date rewrite rules.
		$date_rewrite = $this->generate_rewrite_rules($this->get_date_permastruct(), EP_DATE);

		/**
		 * Filter rewrite rules used for date archives.
		 *
		 * Likely date archives would include /yyyy/, /yyyy/mm/, and /yyyy/mm/dd/.
		 *
		 * @since 1.5.0
		 *
		 * @param array $date_rewrite The rewrite rules for date archives.
		 */
		$date_rewrite = apply_filters( 'date_rewrite_rules', $date_rewrite );

		// Root-level rewrite rules.
		$root_rewrite = $this->generate_rewrite_rules($this->root . '/', EP_ROOT);

		/**
		 * Filter rewrite rules used for root-level archives.
		 *
		 * Likely root-level archives would include pagination rules for the homepage
		 * as well as site-wide post feeds (e.g. /feed/, and /feed/atom/).
		 *
		 * @since 1.5.0
		 *
		 * @param array $root_rewrite The root-level rewrite rules.
		 */
		$root_rewrite = apply_filters( 'root_rewrite_rules', $root_rewrite );

		// Comments rewrite rules.
		$comments_rewrite = $this->generate_rewrite_rules($this->root . $this->comments_base, EP_COMMENTS, false, true, true, false);

		/**
		 * Filter rewrite rules used for comment feed archives.
		 *
		 * Likely comments feed archives include /comments/feed/, and /comments/feed/atom/.
		 *
		 * @since 1.5.0
		 *
		 * @param array $comments_rewrite The rewrite rules for the site-wide comments feeds.
		 */
		$comments_rewrite = apply_filters( 'comments_rewrite_rules', $comments_rewrite );

		// Search rewrite rules.
		$search_structure = $this->get_search_permastruct();
		$search_rewrite = $this->generate_rewrite_rules($search_structure, EP_SEARCH);

		/**
		 * Filter rewrite rules used for search archives.
		 *
		 * Likely search-related archives include /search/search+query/ as well as
		 * pagination and feed paths for a search.
		 *
		 * @since 1.5.0
		 *
		 * @param array $search_rewrite The rewrite rules for search queries.
		 */
		$search_rewrite = apply_filters( 'search_rewrite_rules', $search_rewrite );

		// Author rewrite rules.
		$author_rewrite = $this->generate_rewrite_rules($this->get_author_permastruct(), EP_AUTHORS);

		/**
		 * Filter rewrite rules used for author archives.
		 *
		 * Likely author archives would include /author/author-name/, as well as
		 * pagination and feed paths for author archives.
		 *
		 * @since 1.5.0
		 *
		 * @param array $author_rewrite The rewrite rules for author archives.
		 */
		$author_rewrite = apply_filters( 'author_rewrite_rules', $author_rewrite );

		// Pages rewrite rules.
		$page_rewrite = $this->page_rewrite_rules();

		/**
		 * Filter rewrite rules used for "page" post type archives.
		 *
		 * @since 1.5.0
		 *
		 * @param array $page_rewrite The rewrite rules for the "page" post type.
		 */
		$page_rewrite = apply_filters( 'page_rewrite_rules', $page_rewrite );

		// Extra permastructs.
		foreach ( $this->extra_permastructs as $permastructname => $struct ) {
			if ( is_array( $struct ) ) {
				if ( count( $struct ) == 2 )
					$rules = $this->generate_rewrite_rules( $struct[0], $struct[1] );
				else
					$rules = $this->generate_rewrite_rules( $struct['struct'], $struct['ep_mask'], $struct['paged'], $struct['feed'], $struct['forcomments'], $struct['walk_dirs'], $struct['endpoints'] );
			} else {
				$rules = $this->generate_rewrite_rules( $struct );
			}

			/**
			 * Filter rewrite rules used for individual permastructs.
			 *
			 * The dynamic portion of the hook name, $permastructname, refers
			 * to the name of the registered permastruct, e.g. 'post_tag' (tags),
			 * 'category' (categories), etc.
			 *
			 * @since 3.1.0
			 *
			 * @param array $rules The rewrite rules generated for the current permastruct.
			 */
			$rules = apply_filters( $permastructname . '_rewrite_rules', $rules );
			if ( 'post_tag' == $permastructname ) {

				/**
				 * Filter rewrite rules used specifically for Tags.
				 *
				 * @since 2.3.0
				 * @deprecated 3.1.0 Use 'post_tag_rewrite_rules' instead
				 *
				 * @param array $rules The rewrite rules generated for tags.
				 */
				$rules = apply_filters( 'tag_rewrite_rules', $rules );
			}

			$this->extra_rules_top = array_merge($this->extra_rules_top, $rules);
		}

		// Put them together.
		if ( $this->use_verbose_page_rules )
			$this->rules = array_merge($this->extra_rules_top, $robots_rewrite, $deprecated_files, $registration_pages, $root_rewrite, $comments_rewrite, $search_rewrite,  $author_rewrite, $date_rewrite, $page_rewrite, $post_rewrite, $this->extra_rules);
		else
			$this->rules = array_merge($this->extra_rules_top, $robots_rewrite, $deprecated_files, $registration_pages, $root_rewrite, $comments_rewrite, $search_rewrite,  $author_rewrite, $date_rewrite, $post_rewrite, $page_rewrite, $this->extra_rules);

		/**
		 * Fires after the rewrite rules are generated.
		 *
		 * @since 1.5.0
		 *
		 * @param WP_Rewrite $this Current WP_Rewrite instance, passed by reference.
		 */
		do_action_ref_array( 'generate_rewrite_rules', array( &$this ) );

		/**
		 * Filter the full set of generated rewrite rules.
		 *
		 * @since 1.5.0
		 *
		 * @param array $this->rules The compiled array of rewrite rules.
		 */
		$this->rules = apply_filters( 'rewrite_rules_array', $this->rules );

		return $this->rules;
	}

	/**
	 * Retrieve the rewrite rules.
	 *
	 * The difference between this method and {@link
	 * WP_Rewrite::rewrite_rules()} is that this method stores the rewrite rules
	 * in the 'rewrite_rules' option and retrieves it. This prevents having to
	 * process all of the permalinks to get the rewrite rules in the form of
	 * caching.
	 *
	 * @since 1.5.0
	 * @access public
	 *
	 * @return array Rewrite rules.
	 */
	public function wp_rewrite_rules() {
		$this->rules = get_option('rewrite_rules');
		if ( empty($this->rules) ) {
			$this->matches = 'matches';
			$this->rewrite_rules();
			update_option('rewrite_rules', $this->rules);
		}

		return $this->rules;
	}

	/**
	 * Remove rewrite rules and then recreate rewrite rules.
	 *
	 * Calls {@link WP_Rewrite::wp_rewrite_rules()} after removing the
	 * 'rewrite_rules' option. If the function named 'save_mod_rewrite_rules'
	 * exists, it will be called.
	 *
	 * @since 2.0.1
	 * @access public
	 * @param bool $hard Whether to update .htaccess (hard flush) or just update rewrite_rules option (soft flush). Default is true (hard).
	 */
	public function flush_rules($hard = true) {
		delete_option('rewrite_rules');
		$this->wp_rewrite_rules();
		/**
		 * Filter whether a "hard" rewrite rule flush should be performed when requested.
		 *
		 * A "hard" flush updates .htaccess (Apache) or web.config (IIS).
		 *
		 * @since 3.7.0
		 *
		 * @param bool $hard Whether to flush rewrite rules "hard". Default true.
		 */
		if ( ! $hard || ! apply_filters( 'flush_rewrite_rules_hard', true ) ) {
			return;
		}
		if ( function_exists( 'save_mod_rewrite_rules' ) )
			save_mod_rewrite_rules();
		if ( function_exists( 'iis7_save_url_rewrite_rules' ) )
			iis7_save_url_rewrite_rules();
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