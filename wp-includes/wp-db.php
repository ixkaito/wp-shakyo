<?php
/**
 * WordPress DB Class
 *
 * Original code from {@link http://php.justinvincent.com Justin Vincent (justin@visunet.ie)}
 *
 * @package WordPress
 * @subpackage Database
 * @since 0.71
 */

/**
 * @since 0.71
 */
define( 'EZSQL_VERSION', 'WP1.25' );

/**
 * @since 0.71
 */
define( 'OBJECT', 'OBJECT' );
define( 'object', 'OBJECT' ); // Back compat.

/**
 * @since 2.5.0
 */
define( 'OBJECT_K', 'OBJECT_K' );

/**
 * @since 0.71
 */
define( 'ARRAY_A', 'ARRAY_A' );

/**
 * @since 0.71
 */
define( 'ARRAY_N', 'ARRAY_N' );

/**
 * WordPress Database Access Abstraction Object
 *
 * It is possible to replace this class with your own
 * by setting the $wpdb global variable in wp-content/db.php
 * file to your class. The wpdb class will still be included,
 * so you can extend it or simply use your own.
 *
 * @link http://codex.wordpress.org/Function_Reference/wpdb_Class
 *
 * @package WordPress
 * @subpackage Database
 * @since 0.71
 */
class wpdb {

	/**
	 * Whether to show SQL/DB errors.
	 *
	 * Default behavior is to show errors if both WP_DEBUG and WP_DEBUG_DISPLAY
	 * evaluated to true.
	 *
	 * @since 0.71
	 * @access private
	 * @var bool
	 */
	var $show_errors = false;

	/**
	 * Whether to suppress errors during the DB bootstrapping.
	 *
	 * @access private
	 * @since 2.5.0
	 * @var bool
	 */
	var $suppress_errors = false;

	/**
	 * The last error during query.
	 *
	 * @since 2.5.0
	 * @var string
	 */
	public $last_error = '';

	/**
	 * Amount of queries made
	 *
	 * @since 1.2.0
	 * @access private
	 * @var int
	 */
	var $num_queries = 0;

	/**
	 * Count of rows returned by previous query
	 *
	 * @since 0.71
	 * @access private
	 * @var int
	 */
	var $num_rows = 0;

	/**
	 * Count of affected rows by previous query
	 *
	 * @since 0.71
	 * @access private
	 * @var int
	 */
	var $rows_affected = 0;

	/**
	 * The ID generated for an AUTO_INCREMENT column by the previous query (usually INSERT).
	 *
	 * @since 0.71
	 * @access public
	 * @var int
	 */
	var $insert_id = 0;

	/**
	 * Last query made
	 *
	 * @since 0.71
	 * @access private
	 * @var array
	 */
	var $last_query;

	/**
	 * Results of the last query made
	 *
	 * @since 0.71
	 * @access private
	 * @var array|null
	 */
	var $last_result;

	/**
	 * MySQL result, which is either a resource or boolean.
	 *
	 * @since 0.71
	 * @access protected
	 * @var mixed
	 */
	protected $result;

	/**
	 * Saved info on the table column
	 *
	 * @since 0.71
	 * @access protected
	 * @var array
	 */
	protected $col_info;

	/**
	 * Saved queries that were executed
	 *
	 * @since 1.5.0
	 * @access private
	 * @var array
	 */
	var $queries;

	/**
	 * The number of times to retry reconnecting before dying.
	 *
	 * @since 3.9.0
	 * @access protected
	 * @see wpdb::check_connection()
	 * @var int
	 */
	protected $reconnect_retries = 5;

	/**
	 * WordPress table prefix
	 *
	 * You can set this to have multiple WordPress installations
	 * in a single database. The second reason is for possible
	 * security precautions.
	 *
	 * @since 2.5.0
	 * @access private
	 * @var string
	 */
	var $prefix = '';

	/**
	 * WordPress base table prefix.
	 *
	 * @since 3.0.0
	 * @access public
	 * @var string
	 */
	 public $base_prefix;

	/**
	 * Whether the database queries are ready to start executing.
	 *
	 * @since 2.3.2
	 * @access private
	 * @var bool
	 */
	var $ready = false;

	/**
	 * {@internal Missing Description}}
	 *
	 * @since 3.0.0
	 * @access public
	 * @var int
	 */
	public $blogid = 0;

	/**
	 * {@internal Missing Description}}
	 *
	 * @since 3.0.0
	 * @access public
	 * @var int
	 */
	public $siteid = 0;

	/**
	 * List of WordPress per-blog tables
	 *
	 * @since 2.5.0
	 * @access private
	 * @see wpdb::tables()
	 * @var array
	 */
	var $tables = array( 'posts', 'comments', 'links', 'options', 'postmeta',
		'terms', 'term_taxonomy', 'term_relationships', 'commentmeta' );

	/**
	 * List of deprecated WordPress tables
	 *
	 * categories, post2cat, and link2cat were deprecated in 2.3.0, db version 5539
	 *
	 * @since 2.9.0
	 * @access private
	 * @see wpdb::tables()
	 * @var array
	 */
	var $old_tables = array( 'categories', 'post2cat', 'link2cat' );

	/**
	 * List of WordPress global tables
	 *
	 * @since 3.0.0
	 * @access private
	 * @see wpdb::tables()
	 * @var array
	 */
	var $global_tables = array( 'users', 'usermeta' );

	/**
	 * List of Multisite global tables
	 *
	 * @since 3.0.0
	 * @access private
	 * @see wpdb::tables()
	 * @var array
	 */
	var $ms_global_tables = array( 'blogs', 'signups', 'site', 'sitemeta',
		'sitecategories', 'registration_log', 'blog_versions' );

	/**
	 * WordPress Comments table
	 *
	 * @since 1.5.0
	 * @access public
	 * @var string
	 */
	public $comments;

	/**
	 * WordPress Comment Metadata table
	 *
	 * @since 2.9.0
	 * @access public
	 * @var string
	 */
	public $commentmeta;

	/**
	 * WordPress Links table
	 *
	 * @since 1.5.0
	 * @access public
	 * @var string
	 */
	public $links;

	/**
	 * WordPress Options table
	 *
	 * @since 1.5.0
	 * @access public
	 * @var string
	 */
	public $options;

	/**
	 * WordPress Post Metadata table
	 *
	 * @since 1.5.0
	 * @access public
	 * @var string
	 */
	public $postmeta;

	/**
	 * WordPress Posts table
	 *
	 * @since 1.5.0
	 * @access public
	 * @var string
	 */
	public $posts;

	/**
	 * WordPress Terms table
	 *
	 * @since 2.3.0
	 * @access public
	 * @var string
	 */
	public $terms;

	/**
	 * WordPress Term Relationships table
	 *
	 * @since 2.3.0
	 * @access public
	 * @var string
	 */
	public $term_relationships;

	/**
	 * WordPress Term Taxonomy table
	 *
	 * @since 2.3.0
	 * @access public
	 * @var string
	 */
	public $term_taxonomy;

	/*
	 * Global and Multisite tables
	 */

	/**
	 * WordPress User Metadata table
	 *
	 * @since 2.3.0
	 * @access public
	 * @var string
	 */
	public $usermeta;

	/**
	 * WordPress Users table
	 *
	 * @since 1.5.0
	 * @access public
	 * @var string
	 */
	public $users;

	/**
	 * Multisite Blogs table
	 *
	 * @since 3.0.0
	 * @access public
	 * @var string
	 */
	public $blogs;

	/**
	 * Multisite Blog Versions table
	 *
	 * @since 3.0.0
	 * @access public
	 * @var string
	 */
	public $blog_versions;

	/**
	 * Multisite Registration Log table
	 *
	 * @since 3.0.0
	 * @access public
	 * @var string
	 */
	public $registration_log;

	/**
	 * Multisite Signups table
	 *
	 * @since 3.0.0
	 * @access public
	 * @var string
	 */
	public $signups;

	/**
	 * Multisite Sites table
	 *
	 * @since 3.0.0
	 * @access public
	 * @var string
	 */
	public $site;

	/**
	 * Multisite Sitewide Terms table
	 *
	 * @since 3.0.0
	 * @access public
	 * @var string
	 */
	public $sitecategories;

	/**
	 * Multisite Site Metadata table
	 *
	 * @since 3.0.0
	 * @access public
	 * @var string
	 */
	public $sitemeta;

	/**
	 * Format specifiers for DB columns. Columns not listed here default to %s. Initialized during WP load.
	 *
	 * Keys are column names, values are format types: 'ID' => '%d'
	 *
	 * @since 2.8.0
	 * @see wpdb::prepare()
	 * @see wpdb::insert()
	 * @see wpdb::update()
	 * @see wpdb::delete()
	 * @see wp_set_wpdb_vars()
	 * @access public
	 * @var array
	 */
	public $field_types = array();

	/**
	 * Database table columns charset
	 *
	 * @since 2.2.0
	 * @access public
	 * @var string
	 */
	public $charset;

	/**
	 * Database table columns collate
	 *
	 * @since 2.2.0
	 * @access public
	 * @var string
	 */
	public $collate;

	/**
	 * Database Username
	 *
	 * @since 2.9.0
	 * @access protected
	 * @var string
	 */
	protected $dbuser;

	/**
	 * Database Password
	 *
	 * @since 3.1.0
	 * @access protected
	 * @var string
	 */
	protected $dbpassword;

	/**
	 * Database Name
	 *
	 * @since 3.1.0
	 * @access protected
	 * @var string
	 */
	protected $dbname;

	/**
	 * Database Host
	 *
	 * @since 3.1.0
	 * @access protected
	 * @var string
	 */
	protected $dbhost;

	/**
	 * Database Handle
	 *
	 * @since 0.71
	 * @access protected
	 * @var string
	 */
	protected $dbh;

	/**
	 * A textual description of the last query/get_row/get_var call
	 *
	 * @since 3.0.0
	 * @access public
	 * @var string
	 */
	public $func_call;

	/**
	 * Whether MySQL is used as the database engine.
	 *
	 * Set in WPDB::db_connect() to true, by default. This is used when checking
	 * against the required MySQL version for WordPress. Normally, a replacement
	 * database drop-in (db.php) will skip these checks, but setting this to true
	 * will force the checks to occur.
	 *
	 * @since 3.3.0
	 * @access public
	 * @var bool
	 */
	public $is_mysql = null;

	/**
	 * A list of incompatible SQL modes.
	 *
	 * @since 3.9.0
	 * @access protected
	 * @var array
	 */
	protected $incompatible_modes = array( 'NO_ZERO_DATE', 'ONLY_FULL_GROUP_BY',
		'STRICT_TRANS_TABLES', 'STRICT_ALL_TABLES', 'TRADITIONAL' );

	/**
	 * Whether to use mysqli over mysql.
	 *
	 * @since 3.9.0
	 * @access private
	 * @var bool
	 */
	private $use_mysqli = false;

	/**
	 * Whether we've managed to successfully connect at some point
	 *
	 * @since 3.9.0
	 * @access private
	 * @var bool
	 */
	private $has_connected = false;

	/**
	 * Connects to the database server and selects a database
	 *
	 * PHP5 style constructor for compatibility with PHP5. Does
	 * the actual setting up of the class properties and connection
	 * to the database.
	 *
	 * @link http://core.trac.wordpress.org/ticket/3354
	 * @since 2.0.8
	 *
	 * @param string $dbuser MySQL database user
	 * @param string $dbpassword MySQL database password
	 * @param string $dbname MySQL database name
	 * @param string $dbhost MySQL database host
	 */
	public function __construct( $dbuser, $dbpassword, $dbname, $dbhost ) {
		register_shutdown_function( array( $this, '__destruct' ) );

		if ( WP_DEBUG && WP_DEBUG_DISPLAY )
			$this->show_errors();

		/* Use ext/mysqli if it exists and:
		 *  - WP_USE_EXT_MYSQL is defined as false, or
		 *  - We are a development version of WordPress, or
		 *  - We are running PHP 5.5 or greater, or
		 *  - ext/mysql is not loaded.
		 */
		if ( function_exists( 'mysqli_connect' ) ) {
			if ( defined( 'WP_USE_EXT_MYSQL' ) ) {
				$this->use_mysqli = ! WP_USE_EXT_MYSQL;
			} elseif ( version_compare( phpversion(), '5.5', '>=' ) || ! function_exists( 'mysql_connect' ) ) {
				$this->use_mysqli = true;
			} elseif ( false !== strpos( $GLOBALS['wp_version'], '-' ) ) {
				$this->use_mysqli = true;
			}
		}

		$this->init_charset();

		$this->dbuser = $dbuser;
		$this->dbpassword = $dbpassword;
		$this->dbname = $dbname;
		$this->dbhost = $dbhost;

		// wp-config.php creation will manually connect when ready.
		if ( defined( 'WP_SETUP_CONFIG' ) ) {
			return;
		}

		$this->db_connect();
	}

	/**
	 * PHP5 style destructor and will run when database object is destroyed.
	 *
	 * @see wpdb::__construct()
	 * @since 2.0.8
	 * @return bool true
	 */
	public function __destruct() {
		return true;
	}

	/**
	 * Set $this->charset and $this->collate
	 *
	 * @since 3.1.0
	 */
	public function init_charset() {
		if ( function_exists('is_multisite') && is_multisite() ) {
			$this->charset = 'utf8';
			if ( defined( 'DB_COLLATE' ) && DB_COLLATE )
				$this->collate = DB_COLLATE;
			else
				$this->collate = 'utf8_general_ci';
		} elseif ( defined( 'DB_COLLATE' ) ) {
			$this->collate = DB_COLLATE;
		}

		if ( defined( 'DB_CHARSET' ) )
			$this->charset = DB_CHARSET;
	}
}
