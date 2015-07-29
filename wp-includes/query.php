<?php
/**
 * WordPress Query API
 *
 * The query API attempts to get which part of WordPress the user is on. It
 * also provides functionality for getting URL query information.
 *
 * @link http://codex.wordpress.org/The_Loop More information on The Loop.
 *
 * @package WordPress
 * @subpackage Query
 */

/*
 * WP_Query
 */

/**
 * The WordPress Query class.
 *
 * @link http://codex.wordpress.org/Function_Reference/WP_Query Codex page.
 *
 * @since 1.5.0
 */
class WP_Query {

	/**
	 * Query vars set by the user
	 *
	 * @since 1.5.0
	 * @access public
	 * @var array
	 */
	public $query;

	/**
	 * Query vars, after parsing
	 *
	 * @since 1.5.0
	 * @access public
	 * @var array
	 */
	public $query_vars = array();

	/**
	 * Taxonomy query, as passed to get_tax_sql()
	 *
	 * @since 3.1.0
	 * @access public
	 * @var object WP_Tax_Query
	 */
	public $tax_query;

	/**
	 * Metadata query container
	 *
	 * @since 3.2.0
	 * @access public
	 * @var object WP_Meta_Query
	 */
	public $meta_query = false;

	/**
	 * Date query container
	 *
	 * @since 3.7.0
	 * @access public
	 * @var object WP_Date_Query
	 */
	public $date_query = false;

	/**
	 * Holds the data for a single object that is queried.
	 *
	 * Holds the contents of a post, page, category, attachment.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var object|array
	 */
	public $queried_object;

	/**
	 * The ID of the queried object.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var int
	 */
	public $queried_object_id;

	/**
	 * Get post database query.
	 *
	 * @since 2.0.1
	 * @access public
	 * @var string
	 */
	public $request;

	/**
	 * List of posts.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var array
	 */
	public $posts;

	/**
	 * The amount of posts for the current query.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var int
	 */
	public $post_count = 0;

	/**
	 * Index of the current item in the loop.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var int
	 */
	public $current_post = -1;

	/**
	 * Whether the loop has started and the caller is in the loop.
	 *
	 * @since 2.0.0
	 * @access public
	 * @var bool
	 */
	public $in_the_loop = false;

	/**
	 * The current post.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var WP_Post
	 */
	public $post;

	/**
	 * The list of comments for current post.
	 *
	 * @since 2.2.0
	 * @access public
	 * @var array
	 */
	public $comments;

	/**
	 * The amount of comments for the posts.
	 *
	 * @since 2.2.0
	 * @access public
	 * @var int
	 */
	public $comment_count = 0;

	/**
	 * The index of the comment in the comment loop.
	 *
	 * @since 2.2.0
	 * @access public
	 * @var int
	 */
	public $current_comment = -1;

	/**
	 * Current comment ID.
	 *
	 * @since 2.2.0
	 * @access public
	 * @var int
	 */
	public $comment;

	/**
	 * The amount of found posts for the current query.
	 *
	 * If limit clause was not used, equals $post_count.
	 *
	 * @since 2.1.0
	 * @access public
	 * @var int
	 */
	public $found_posts = 0;

	/**
	 * The amount of pages.
	 *
	 * @since 2.1.0
	 * @access public
	 * @var int
	 */
	public $max_num_pages = 0;

	/**
	 * The amount of comment pages.
	 *
	 * @since 2.7.0
	 * @access public
	 * @var int
	 */
	public $max_num_comment_pages = 0;

	/**
	 * Set if query is single post.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_single = false;

	/**
	 * Set if query is preview of blog.
	 *
	 * @since 2.0.0
	 * @access public
	 * @var bool
	 */
	public $is_preview = false;

	/**
	 * Set if query returns a page.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_page = false;

	/**
	 * Set if query is an archive list.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_archive = false;

	/**
	 * Set if query is part of a date.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_date = false;

	/**
	 * Set if query contains a year.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_year = false;

	/**
	 * Set if query contains a month.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_month = false;

	/**
	 * Set if query contains a day.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_day = false;

	/**
	 * Set if query contains time.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_time = false;

	/**
	 * Set if query contains an author.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_author = false;

	/**
	 * Set if query contains category.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_category = false;

	/**
	 * Set if query contains tag.
	 *
	 * @since 2.3.0
	 * @access public
	 * @var bool
	 */
	public $is_tag = false;

	/**
	 * Set if query contains taxonomy.
	 *
	 * @since 2.5.0
	 * @access public
	 * @var bool
	 */
	public $is_tax = false;

	/**
	 * Set if query was part of a search result.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_search = false;

	/**
	 * Set if query is feed display.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_feed = false;

	/**
	 * Set if query is comment feed display.
	 *
	 * @since 2.2.0
	 * @access public
	 * @var bool
	 */
	public $is_comment_feed = false;

	/**
	 * Set if query is trackback.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_trackback = false;

	/**
	 * Set if query is blog homepage.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_home = false;

	/**
	 * Set if query couldn't found anything.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_404 = false;

	/**
	 * Set if query is within comments popup window.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_comments_popup = false;

	/**
	 * Set if query is paged
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_paged = false;

	/**
	 * Set if query is part of administration page.
	 *
	 * @since 1.5.0
	 * @access public
	 * @var bool
	 */
	public $is_admin = false;

	/**
	 * Set if query is an attachment.
	 *
	 * @since 2.0.0
	 * @access public
	 * @var bool
	 */
	public $is_attachment = false;

	/**
	 * Set if is single, is a page, or is an attachment.
	 *
	 * @since 2.1.0
	 * @access public
	 * @var bool
	 */
	public $is_singular = false;

	/**
	 * Set if query is for robots.
	 *
	 * @since 2.1.0
	 * @access public
	 * @var bool
	 */
	public $is_robots = false;

	/**
	 * Set if query contains posts.
	 *
	 * Basically, the homepage if the option isn't set for the static homepage.
	 *
	 * @since 2.1.0
	 * @access public
	 * @var bool
	 */
	public $is_posts_page = false;

	/**
	 * Set if query is for a post type archive.
	 *
	 * @since 3.1.0
	 * @access public
	 * @var bool
	 */
	public $is_post_type_archive = false;

	/**
	 * Stores the ->query_vars state like md5(serialize( $this->query_vars ) ) so we know
	 * whether we have to re-parse because something has changed
	 *
	 * @since 3.1.0
	 * @access private
	 */
	private $query_vars_hash = false;

	/**
	 * Whether query vars have changed since the initial parse_query() call. Used to catch modifications to query vars made
	 * via pre_get_posts hooks.
	 *
	 * @since 3.1.1
	 * @access private
	 */
	private $query_vars_changed = true;

	/**
	 * Set if post thumbnails are cached
	 *
	 * @since 3.2.0
	 * @access public
	 * @var bool
	 */
	 public $thumbnails_cached = false;

	/**
	 * Cached list of search stopwords.
	 *
	 * @since 3.7.0
	 * @var array
	 */
	private $stopwords;

	/**
	 * Resets query flags to false.
	 *
	 * The query flags are what page info WordPress was able to figure out.
	 *
	 * @since 2.0.0
	 * @access private
	 */
	private function init_query_flags() {
		$this->is_single = false;
		$this->is_preview = false;
		$this->is_page = false;
		$this->is_archive = false;
		$this->is_date = false;
		$this->is_year = false;
		$this->is_month = false;
		$this->is_day = false;
		$this->is_time = false;
		$this->is_author = false;
		$this->is_category = false;
		$this->is_tag = false;
		$this->is_tax = false;
		$this->is_search = false;
		$this->is_feed = false;
		$this->is_comment_feed = false;
		$this->is_trackback = false;
		$this->is_home = false;
		$this->is_404 = false;
		$this->is_comments_popup = false;
		$this->is_paged = false;
		$this->is_admin = false;
		$this->is_attachment = false;
		$this->is_singular = false;
		$this->is_robots = false;
		$this->is_posts_page = false;
		$this->is_post_type_archive = false;
	}

	/**
	 * Initiates object properties and sets default values.
	 *
	 * @since 1.5.0
	 * @access public
	 */
	public function init() {
		unset($this->posts);
		unset($this->query);
		$this->query_vars = array();
		unset($this->queried_object);
		unset($this->queried_object_id);
		$this->post_count = 0;
		$this->current_post = -1;
		$this->in_the_loop = false;
		unset( $this->request );
		unset( $this->post );
		unset( $this->comments );
		unset( $this->comment );
		$this->comment_count = 0;
		$this->current_comment = -1;
		$this->found_posts = 0;
		$this->max_num_pages = 0;
		$this->max_num_comment_pages = 0;

		$this->init_query_flags();
	}

	/**
	 * Reparse the query vars.
	 *
	 * @since 1.5.0
	 * @access public
	 */
	public function parse_query_vars() {
		$this->parse_query();
	}

	/**
	 * Fills in the query variables, which do not exist within the parameter.
	 *
	 * @since 2.1.0
	 * @access public
	 *
	 * @param array $array Defined query variables.
	 * @return array Complete query variables with undefined ones filled in empty.
	 */
	public function fill_query_vars($array) {
		$keys = array(
			'error'
			, 'm'
			, 'p'
			, 'post_parent'
			, 'subpost'
			, 'subpost_id'
			, 'attachment'
			, 'attachment_id'
			, 'name'
			, 'static'
			, 'pagename'
			, 'page_id'
			, 'second'
			, 'minute'
			, 'hour'
			, 'day'
			, 'monthnum'
			, 'year'
			, 'w'
			, 'category_name'
			, 'tag'
			, 'cat'
			, 'tag_id'
			, 'author'
			, 'author_name'
			, 'feed'
			, 'tb'
			, 'paged'
			, 'comments_popup'
			, 'meta_key'
			, 'meta_value'
			, 'preview'
			, 's'
			, 'sentence'
			, 'fields'
			, 'menu_order'
		);

		foreach ( $keys as $key ) {
			if ( !isset($array[$key]) )
				$array[$key] = '';
		}

		$array_keys = array( 'category__in', 'category__not_in', 'category__and', 'post__in', 'post__not_in',
			'tag__in', 'tag__not_in', 'tag__and', 'tag_slug__in', 'tag_slug__and', 'post_parent__in', 'post_parent__not_in',
			'author__in', 'author__not_in' );

		foreach ( $array_keys as $key ) {
			if ( !isset($array[$key]) )
				$array[$key] = array();
		}
		return $array;
	}

	/**
	 * Parse a query string and set query type booleans.
	 *
	 * @since 1.5.0
	 * @access public
	 *
	 * @param string|array $query {
	 *     Optional. Array or string of Query parameters.
	 *
	 *     @type int          $attachment_id           Attachment post ID. Used for 'attachment' post_type.
	 *     @type int|string   $author                  Author ID, or comma-separated list of IDs.
	 *     @type string       $author_name             User 'user_nicename'.
	 *     @type array        $author__in              An array of author IDs to query from.
	 *     @type array        $author__not_in          An array of author IDs not to query from.
	 *     @type bool         $cache_results           Whether to cache post information. Default true.
	 *     @type int|string   $cat                     Category ID or comma-separated list of IDs (this or any children).
	 *     @type array        $category__and           An array of category IDs (AND in).
	 *     @type array        $category__in            An array of category IDs (OR in, no children).
	 *     @type array        $category__not_in        An array of category IDs (NOT in).
	 *     @type string       $category_name           Use category slug (not name, this or any children).
	 *     @type int          $comments_per_page       The number of comments to return per page.
	 *                                                 Default 'comments_per_page' option.
	 *     @type int|string   $comments_popup          Whether the query is within the comments popup. Default empty.
	 *     @type array        $date_query              An associative array of WP_Date_Query arguments.
	 *                                                 {@see WP_Date_Query::__construct()}
	 *     @type int          $day                     Day of the month. Default empty. Accepts numbers 1-31.
	 *     @type bool         $exact                   Whether to search by exact keyword. Default false.
	 *     @type string|array $fields                  Which fields to return. Single field or all fields (string),
	 *                                                 or array of fields. 'id=>parent' uses 'id' and 'post_parent'.
	 *                                                 Default all fields. Accepts 'ids', 'id=>parent'.
	 *     @type int          $hour                    Hour of the day. Default empty. Accepts numbers 0-23.
	 *     @type bool         $ignore_sticky_posts     Whether to ignore sticky posts or not. Setting this to false
	 *                                                 excludes stickies from 'post__in'. Accepts 1|true, 0|false.
	 *                                                 Default 0|false.
	 *     @type int          $m                       Combination YearMonth. Accepts any four-digit year and month
	 *                                                 numbers 1-12. Default empty.
	 *     @type string       $meta_compare            Comparison operator to test the 'meta_value'.
	 *     @type string       $meta_key                Custom field key.
	 *     @type array        $meta_query              An associative array of WP_Meta_Query arguments.
	 *                                                 {@see WP_Meta_Query->queries}
	 *     @type string       $meta_value              Custom field value.
	 *     @type int          $meta_value_num          Custom field value number.
	 *     @type int          $menu_order              The menu order of the posts.
	 *     @type int          $monthnum                The two-digit month. Default empty. Accepts numbers 1-12.
	 *     @type string       $name                    Post slug.
	 *     @type bool         $nopaging                Show all posts (true) or paginate (false). Default false.
	 *     @type bool         $no_found_rows           Whether to skip counting the total rows found. Enabling can improve
	 *                                                 performance. Default false.
	 *     @type int          $offset                  The number of posts to offset before retrieval.
	 *     @type string       $order                   Designates ascending or descending order of posts. Default 'DESC'.
	 *                                                 Accepts 'ASC', 'DESC'.
	 *     @type string       $orderby                 Sort retrieved posts by parameter. One or more options can be
	 *                                                 passed. To use 'meta_value', or 'meta_value_num',
	 *                                                 'meta_key=keyname' must be also be defined. Default 'date'.
	 *                                                 Accepts 'none', 'name', 'author', 'date', 'title', 'modified',
	 *                                                 'menu_order', 'parent', 'ID', 'rand', 'comment_count'.
	 *     @type int          $p                       Post ID.
	 *     @type int          $page                    Show the number of posts that would show up on page X of a
	 *                                                 static front page.
	 *     @type int          $paged                   The number of the current page.
	 *     @type int          $page_id                 Page ID.
	 *     @type string       $pagename                Page slug.
	 *     @type string       $perm                    Show posts if user has the appropriate capability.
	 *     @type array        $post__in                An array of post IDs to retrieve, sticky posts will be included
	 *     @type string       $post_mime_type          The mime type of the post. Used for 'attachment' post_type.
	 *     @type array        $post__not_in            An array of post IDs not to retrieve. Note: a string of comma-
	 *                                                 separated IDs will NOT work.
	 *     @type int          $post_parent             Page ID to retrieve child pages for. Use 0 to only retrieve
	 *                                                 top-level pages.
	 *     @type array        $post_parent__in         An array containing parent page IDs to query child pages from.
	 *     @type array        $post_parent__not_in     An array containing parent page IDs not to query child pages from.
	 * }
	 */
	public function parse_query( $query =  '' ) {
		if ( ! empty( $query ) ) {
			$this->init();
			$this->query = $this->query_vars = wp_parse_args( $query );
		} elseif ( ! isset( $this->query ) ) {
			$this->query = $this->query_vars;
		}

		$this->query_vars = $this->fill_query_vars($this->query_vars);
		$qv = &$this->query_vars;
		$this->query_vars_changed = true;

		if ( ! empty($qv['robots']) )
			$this->is_robots = true;

		$qv['p'] =  absint($qv['p']);
		$qv['page_id'] =  absint($qv['page_id']);
		$qv['year'] = absint($qv['year']);
		$qv['monthnum'] = absint($qv['monthnum']);
		$qv['day'] = absint($qv['day']);
		$qv['w'] = absint($qv['w']);
		$qv['m'] = preg_replace( '|[^0-9]|', '', $qv['m'] );
		$qv['paged'] = absint($qv['paged']);
		$qv['cat'] = preg_replace( '|[^0-9,-]|', '', $qv['cat'] ); // comma separated list of positive or negative integers
		$qv['author'] = preg_replace( '|[^0-9,-]|', '', $qv['author'] ); // comma separated list of positive or negative integers
		$qv['pagename'] = trim( $qv['pagename'] );
		$qv['name'] = trim( $qv['name'] );
		if ( '' !== $qv['hour'] ) $qv['hour'] = absint($qv['hour']);
		if ( '' !== $qv['minute'] ) $qv['minute'] = absint($qv['minute']);
		if ( '' !== $qv['second'] ) $qv['second'] = absint($qv['second']);
		if ( '' !== $qv['menu_order'] ) $qv['menu_order'] = absint($qv['menu_order']);

		// Fairly insane upper bound for search string lengths.
		if ( ! empty( $qv['s'] ) && strlen( $qv['s'] ) > 1600 )
			$qv['s'] = '';

		// Compat. Map subpost to attachment.
		if ( '' != $qv['subpost'] )
			$qv['attachment'] = $qv['subpost'];
		if ( '' != $qv['subpost_id'] )
			$qv['attachment_id'] = $qv['subpost_id'];

		$qv['attachment_id'] = absint($qv['attachment_id']);

		if ( ('' != $qv['attachment']) || !empty($qv['attachment_id']) ) {
			$this->is_single = true;
			$this->is_attachment = true;
		} elseif ( '' != $qv['name'] ) {
			$this->is_single = true;
		} elseif ( $qv['p'] ) {
			$this->is_single = true;
		} elseif ( ('' !== $qv['hour']) && ('' !== $qv['minute']) &&('' !== $qv['second']) && ('' != $qv['year']) && ('' != $qv['monthnum']) && ('' != $qv['day']) ) {
			// If year, month, day, hour, minute, and second are set, a single
			// post is being queried.
			$this->is_single = true;
		} elseif ( '' != $qv['static'] || '' != $qv['pagename'] || !empty($qv['page_id']) ) {
			$this->is_page = true;
			$this->is_single = false;
		} else {
			// Look for archive queries. Dates, categories, authors, search, post type archives.

			if ( isset( $this->query['s'] ) ) {
				$this->is_search = true;
			}

			if ( '' !== $qv['second'] ) {
				$this->is_time = true;
				$this->is_date = true;
			}

			if ( '' !== $qv['minute'] ) {
				$this->is_time = true;
				$this->is_date = true;
			}

			if ( '' !== $qv['hour'] ) {
				$this->is_time = true;
				$this->is_date = true;
			}

			if ( $qv['day'] ) {
				if ( ! $this->is_date ) {
					$date = sprintf( '%04d-%02d-%02d', $qv['year'], $qv['monthnum'], $qv['day'] );
					if ( $qv['monthnum'] && $qv['year'] && ! wp_checkdate( $qv['monthnum'], $qv['day'], $qv['year'], $date ) ) {
						$qv['error'] = '404';
					} else {
						$this->is_day = true;
						$this->is_date = true;
					}
				}
			}

			if ( $qv['monthnum'] ) {
				if ( ! $this->is_date ) {
					if ( 12 < $qv['monthnum'] ) {
						$qv['error'] = '404';
					} else {
						$this->is_month = true;
						$this->is_date = true;
					}
				}
			}

			if ( $qv['year'] ) {
				if ( ! $this->is_date ) {
					$this->is_year = true;
					$this->is_date = true;
				}
			}

			if ( $qv['m'] ) {
				$this->is_date = true;
				if ( strlen($qv['m']) > 9 ) {
					$this->is_time = true;
				} else if ( strlen($qv['m']) > 7 ) {
					$this->is_day = true;
				} else if ( strlen($qv['m']) > 5 ) {
					$this->is_month = true;
				} else {
					$this->is_year = true;
				}
			}

			if ( '' != $qv['w'] ) {
				$this->is_date = true;
			}

			$this->query_vars_hash = false;
			$this->parse_tax_query( $qv );

			foreach ( $this->tax_query->queries as $tax_query ) {
				if ( 'NOT IN' != $tax_query['operator'] ) {
					switch ( $tax_query['taxonomy'] ) {
						case 'category':
							$this->is_category = true;
							break;
						case 'post_tag':
							$this->is_tag = true;
							break;
						default:
							$this->is_tax = true;
					}
				}
			}
			unset( $tax_query );

			if ( empty($qv['author']) || ($qv['author'] == '0') ) {
				$this->is_author = false;
			} else {
				$this->is_author = true;
			}

			if ( '' != $qv['author_name'] )
				$this->is_author = true;

			if ( !empty( $qv['post_type'] ) && ! is_array( $qv['post_type'] ) ) {
				$post_type_obj = get_post_type_object( $qv['post_type'] );
				if ( ! empty( $post_type_obj->has_archive ) )
					$this->is_post_type_archive = true;
			}

			if ( $this->is_post_type_archive || $this->is_date || $this->is_author || $this->is_category || $this->is_tag || $this->is_tax )
				$this->is_archive = true;
		}

		if ( '' != $qv['feed'] )
			$this->is_feed = true;

		if ( '' != $qv['tb'] )
			$this->is_trackback = true;

		if ( '' != $qv['paged'] && ( intval($qv['paged']) > 1 ) )
			$this->is_paged = true;

		if ( '' != $qv['comments_popup'] )
			$this->is_comments_popup = true;

		// if we're previewing inside the write screen
		if ( '' != $qv['preview'] )
			$this->is_preview = true;

		if ( is_admin() )
			$this->is_admin = true;

		if ( false !== strpos($qv['feed'], 'comments-') ) {
			$qv['feed'] = str_replace('comments-', '', $qv['feed']);
			$qv['withcomments'] = 1;
		}

		$this->is_singular = $this->is_single || $this->is_page || $this->is_attachment;

		if ( $this->is_feed && ( !empty($qv['withcomments']) || ( empty($qv['withoutcomments']) && $this->is_singular ) ) )
			$this->is_comment_feed = true;

		if ( !( $this->is_singular || $this->is_archive || $this->is_search || $this->is_feed || $this->is_trackback || $this->is_404 || $this->is_admin || $this->is_comments_popup || $this->is_robots ) )
			$this->is_home = true;

		// Correct is_* for page_on_front and page_for_posts
		if ( $this->is_home && 'page' == get_option('show_on_front') && get_option('page_on_front') ) {
			$_query = wp_parse_args($this->query);
			// pagename can be set and empty depending on matched rewrite rules. Ignore an empty pagename.
			if ( isset($_query['pagename']) && '' == $_query['pagename'] )
				unset($_query['pagename']);
			if ( empty($_query) || !array_diff( array_keys($_query), array('preview', 'page', 'paged', 'cpage') ) ) {
				$this->is_page = true;
				$this->is_home = false;
				$qv['page_id'] = get_option('page_on_front');
				// Correct <!--nextpage--> for page_on_front
				if ( !empty($qv['paged']) ) {
					$qv['page'] = $qv['paged'];
					unset($qv['paged']);
				}
			}
		}

		if ( '' != $qv['pagename'] ) {
			$this->queried_object = get_page_by_path($qv['pagename']);
			if ( !empty($this->queried_object) )
				$this->queried_object_id = (int) $this->queried_object->ID;
			else
				unset($this->queried_object);

			if  ( 'page' == get_option('show_on_front') && isset($this->queried_object_id) && $this->queried_object_id == get_option('page_for_posts') ) {
				$this->is_page = false;
				$this->is_home = true;
				$this->is_posts_page = true;
			}
		}

		if ( $qv['page_id'] ) {
			if  ( 'page' == get_option('show_on_front') && $qv['page_id'] == get_option('page_for_posts') ) {
				$this->is_page = false;
				$this->is_home = true;
				$this->is_posts_page = true;
			}
		}

		if ( !empty($qv['post_type']) ) {
			if ( is_array($qv['post_type']) )
				$qv['post_type'] = array_map('sanitize_key', $qv['post_type']);
			else
				$qv['post_type'] = sanitize_key($qv['post_type']);
		}

		if ( ! empty( $qv['post_status'] ) ) {
			if ( is_array( $qv['post_status'] ) )
				$qv['post_status'] = array_map('sanitize_key', $qv['post_status']);
			else
				$qv['post_status'] = preg_replace('|[^a-z0-9_,-]|', '', $qv['post_status']);
		}

		if ( $this->is_posts_page && ( ! isset($qv['withcomments']) || ! $qv['withcomments'] ) )
			$this->is_comment_feed = false;

		$this->is_singular = $this->is_single || $this->is_page || $this->is_attachment;
		// Done correcting is_* for page_on_front and page_for_posts

		if ( '404' == $qv['error'] )
			$this->set_404();

		$this->query_vars_hash = md5( serialize( $this->query_vars ) );
		$this->query_vars_changed = false;

		/**
		 * Fires after the main query vars have been parsed.
		 *
		 * @since 1.5.0
		 *
		 * @param WP_Query &$this The WP_Query instance (passed by reference).
		 */
		do_action_ref_array( 'parse_query', array( &$this ) );
	}

	/**
	 * Parses various taxonomy related query vars.
	 *
	 * For BC, this method is not marked as protected. See [28987].
	 *
	 * @access protected
	 * @since 3.1.0
	 *
	 * @param array &$q The query variables
	 */
	function parse_tax_query( &$q ) {
		if ( ! empty( $q['tax_query'] ) && is_array( $q['tax_query'] ) ) {
			$tax_query = $q['tax_query'];
		} else {
			$tax_query = array();
		}

		if ( !empty($q['taxonomy']) && !empty($q['term']) ) {
			$tax_query[] = array(
				'taxonomy' => $q['taxonomy'],
				'terms' => array( $q['term'] ),
				'field' => 'slug',
			);
		}

		foreach ( get_taxonomies( array() , 'objects' ) as $taxonomy => $t ) {
			if ( 'post_tag' == $taxonomy )
				continue;	// Handled further down in the $q['tag'] block

			if ( $t->query_var && !empty( $q[$t->query_var] ) ) {
				$tax_query_defaults = array(
					'taxonomy' => $taxonomy,
					'field' => 'slug',
				);

 				if ( isset( $t->rewrite['hierarchical'] ) && $t->rewrite['hierarchical'] ) {
					$q[$t->query_var] = wp_basename( $q[$t->query_var] );
				}

				$term = $q[$t->query_var];

				if ( strpos($term, '+') !== false ) {
					$terms = preg_split( '/[+]+/', $term );
					foreach ( $terms as $term ) {
						$tax_query[] = array_merge( $tax_query_defaults, array(
							'terms' => array( $term )
						) );
					}
				} else {
					$tax_query[] = array_merge( $tax_query_defaults, array(
						'terms' => preg_split( '/[,]+/', $term )
					) );
				}
			}
		}

		// Category stuff
		if ( ! empty( $q['cat'] ) && ! $this->is_singular ) {
			$cat_in = $cat_not_in = array();

			$cat_array = preg_split( '/[,\s]+/', urldecode( $q['cat'] ) );
			$cat_array = array_map( 'intval', $cat_array );
			$q['cat'] = implode( ',', $cat_array );

			foreach ( $cat_array as $cat ) {
				if ( $cat > 0 )
					$cat_in[] = $cat;
				elseif ( $cat < 0 )
					$cat_not_in[] = abs( $cat );
			}

			if ( ! empty( $cat_in ) ) {
				$tax_query[] = array(
					'taxonomy' => 'category',
					'terms' => $cat_in,
					'field' => 'term_id',
					'include_children' => true
				);
			}

			if ( ! empty( $cat_not_in ) ) {
				$tax_query[] = array(
					'taxonomy' => 'category',
					'terms' => $cat_not_in,
					'field' => 'term_id',
					'operator' => 'NOT IN',
					'include_children' => true
				);
			}
			unset( $cat_array, $cat_in, $cat_not_in );
		}

		if ( ! empty( $q['category__and'] ) && 1 === count( (array) $q['category__and'] ) ) {
			$q['category__and'] = (array) $q['category__and'];
			if ( ! isset( $q['category__in'] ) )
				$q['category__in'] = array();
			$q['category__in'][] = absint( reset( $q['category__and'] ) );
			unset( $q['category__and'] );
		}

		if ( ! empty( $q['category__in'] ) ) {
			$q['category__in'] = array_map( 'absint', array_unique( (array) $q['category__in'] ) );
			$tax_query[] = array(
				'taxonomy' => 'category',
				'terms' => $q['category__in'],
				'field' => 'term_id',
				'include_children' => false
			);
		}

		if ( ! empty($q['category__not_in']) ) {
			$q['category__not_in'] = array_map( 'absint', array_unique( (array) $q['category__not_in'] ) );
			$tax_query[] = array(
				'taxonomy' => 'category',
				'terms' => $q['category__not_in'],
				'operator' => 'NOT IN',
				'include_children' => false
			);
		}

		if ( ! empty($q['category__and']) ) {
			$q['category__and'] = array_map( 'absint', array_unique( (array) $q['category__and'] ) );
			$tax_query[] = array(
				'taxonomy' => 'category',
				'terms' => $q['category__and'],
				'field' => 'term_id',
				'operator' => 'AND',
				'include_children' => false
			);
		}

		// Tag stuff
		if ( '' != $q['tag'] && !$this->is_singular && $this->query_vars_changed ) {
			if ( strpos($q['tag'], ',') !== false ) {
				$tags = preg_split('/[,\r\n\t ]+/', $q['tag']);
				foreach ( (array) $tags as $tag ) {
					$tag = sanitize_term_field('slug', $tag, 0, 'post_tag', 'db');
					$q['tag_slug__in'][] = $tag;
				}
			} else if ( preg_match('/[+\r\n\t ]+/', $q['tag']) || !empty($q['cat']) ) {
				$tags = preg_split('/[+\r\n\t ]+/', $q['tag']);
				foreach ( (array) $tags as $tag ) {
					$tag = sanitize_term_field('slug', $tag, 0, 'post_tag', 'db');
					$q['tag_slug__and'][] = $tag;
				}
			} else {
				$q['tag'] = sanitize_term_field('slug', $q['tag'], 0, 'post_tag', 'db');
				$q['tag_slug__in'][] = $q['tag'];
			}
		}

		if ( !empty($q['tag_id']) ) {
			$q['tag_id'] = absint( $q['tag_id'] );
			$tax_query[] = array(
				'taxonomy' => 'post_tag',
				'terms' => $q['tag_id']
			);
		}

		if ( !empty($q['tag__in']) ) {
			$q['tag__in'] = array_map('absint', array_unique( (array) $q['tag__in'] ) );
			$tax_query[] = array(
				'taxonomy' => 'post_tag',
				'terms' => $q['tag__in']
			);
		}

		if ( !empty($q['tag__not_in']) ) {
			$q['tag__not_in'] = array_map('absint', array_unique( (array) $q['tag__not_in'] ) );
			$tax_query[] = array(
				'taxonomy' => 'post_tag',
				'terms' => $q['tag__not_in'],
				'operator' => 'NOT IN'
			);
		}

		if ( !empty($q['tag__and']) ) {
			$q['tag__and'] = array_map('absint', array_unique( (array) $q['tag__and'] ) );
			$tax_query[] = array(
				'taxonomy' => 'post_tag',
				'terms' => $q['tag__and'],
				'operator' => 'AND'
			);
		}

		if ( !empty($q['tag_slug__in']) ) {
			$q['tag_slug__in'] = array_map('sanitize_title_for_query', array_unique( (array) $q['tag_slug__in'] ) );
			$tax_query[] = array(
				'taxonomy' => 'post_tag',
				'terms' => $q['tag_slug__in'],
				'field' => 'slug'
			);
		}
	}
}
