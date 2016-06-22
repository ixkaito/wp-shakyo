<?php
/**
 * WordPress Upgrade API
 *
 * Most of the functions are pluggable and can be overwritten
 *
 * @package WordPress
 * @subpackage Administration
 */

/** Include user install customize script. */
if ( file_exists(WP_CONTENT_DIR . '/install.php') )
	require (WP_CONTENT_DIR . '/install.php');

/** WordPress Administration API */
require_once(ABSPATH . 'wp-admin/includes/admin.php');

/** WordPress Schema API */
require_once(ABSPATH . 'wp-admin/includes/schema.php');

if ( !function_exists('wp_install') ) :
/**
 * Installs the blog
 *
 * {@internal Missing Long Description}}
 *
 * @since 2.1.0
 *
 * @param string $blog_title Blog title.
 * @param string $user_name User's username.
 * @param string $user_email User's email.
 * @param bool $public Whether blog is public.
 * @param null $deprecated Optional. Not used.
 * @param string $user_password Optional. User's chosen password. Will default to a random password.
 * @param string $language Optional. Language chosen.
 * @return array Array keys 'url', 'user_id', 'password', 'password_message'.
 */
function wp_install( $blog_title, $user_name, $user_email, $public, $deprecated = '', $user_password = '', $language = '' ) {
	if ( !empty( $deprecated ) )
		_deprecated_argument( __FUNCTION__, '2.6' );

	wp_check_mysql_version();
	wp_cache_flush();
	make_db_current_silent();
	populate_options();
	populate_roles();

	update_option('blogname', $blog_title);
	update_option('admin_email', $user_email);
	update_option('blog_public', $public);

	if ( $language ) {
		update_option( 'WPLANG', $language );
	}

	$guessurl = wp_guess_url();

	update_option('siteurl', $guessurl);

	// If not a public blog, don't ping.
	if ( ! $public )
		update_option('default_pingback_flag', 0);

	/*
	 * Create default user. If the user already exists, the user tables are
	 * being shared among blogs. Just set the role in that case.
	 */
	$user_id = username_exists($user_name);
	$user_password = trim($user_password);
	$email_password = false;
	if ( !$user_id && empty($user_password) ) {
		$user_password = wp_generate_password( 12, false );
		$message = __('<strong><em>Note that password</em></strong> carefully! It is a <em>random</em> password that was generated just for you.');
		$user_id = wp_create_user($user_name, $user_password, $user_email);
		update_user_option($user_id, 'default_password_nag', true, true);
		$email_password = true;
	} else if ( !$user_id ) {
		// Password has been provided
		$message = '<em>'.__('Your chosen password.').'</em>';
		$user_id = wp_create_user($user_name, $user_password, $user_email);
	} else {
		$message = __('User already exists. Password inherited.');
	}

	$user = new WP_User($user_id);
	$user->set_role('administrator');

	wp_install_defaults($user_id);

	flush_rewrite_rules();

	wp_new_blog_notification($blog_title, $guessurl, $user_id, ($email_password ? $user_password : __('The password you chose during the install.') ) );

	wp_cache_flush();

	/**
	 * Fires after a site is fully installed.
	 *
	 * @since 3.9.0
	 *
	 * @param WP_User $user The site owner.
	 */
	do_action( 'wp_install', $user );

	return array('url' => $guessurl, 'user_id' => $user_id, 'password' => $user_password, 'password_message' => $message);
}
endif;

if ( !function_exists('wp_install_defaults') ) :
/**
 * {@internal Missing Short Description}}
 *
 * {@internal Missing Long Description}}
 *
 * @since 2.1.0
 *
 * @param int $user_id User ID.
 */
function wp_install_defaults( $user_id ) {
	global $wpdb, $wp_rewrite, $table_prefix;

	// Default category
	$cat_name = __('Uncategorized');
	/* translators: Default category slug */
	$cat_slug = sanitize_title(_x('Uncategorized', 'Default category slug'));

	if ( global_terms_enabled() ) {
		$cat_id = $wpdb->get_var( $wpdb->prepare( "SELECT cat_ID FROM {$wpdb->sitecategories} WHERE category_nicename = %s", $cat_slug ) );
		if ( $cat_id == null ) {
			$wpdb->insert( $wpdb->sitecategories, array('cat_ID' => 0, 'cat_name' => $cat_name, 'category_nicename' => $cat_slug, 'last_updated' => current_time('mysql', true)) );
			$cat_id = $wpdb->insert_id;
		}
		update_option('default_category', $cat_id);
	} else {
		$cat_id = 1;
	}

	$wpdb->insert( $wpdb->terms, array('term_id' => $cat_id, 'name' => $cat_name, 'slug' => $cat_slug, 'term_group' => 0) );
	$wpdb->insert( $wpdb->term_taxonomy, array('term_id' => $cat_id, 'taxonomy' => 'category', 'description' => '', 'parent' => 0, 'count' => 1));
	$cat_tt_id = $wpdb->insert_id;

	// First post
	$now = date('Y-m-d H:i:s');
	$now_gmt = gmdate('Y-m-d H:i:s');
	$first_post_guid = get_option('home') . '/?p=1';

	if ( is_multisite() ) {
		$first_post = get_site_option( 'first_post' );

		if ( empty($first_post) )
			$first_post = __( 'Welcome to <a href="SITE_URL">SITE_NAME</a>. This is your first post. Edit or delete it, then start blogging!' );

		$first_post = str_replace( "SITE_URL", esc_url( network_home_url() ), $first_post );
		$first_post = str_replace( "SITE_NAME", get_current_site()->site_name, $first_post );
	} else {
		$first_post = __('Welcome to WordPress. This is your first post. Edit or delete it, then start blogging!');
	}

	$wpdb->insert( $wpdb->posts, array(
								'post_author' => $user_id,
								'post_date' => $now,
								'post_date_gmt' => $now_gmt,
								'post_content' => $first_post,
								'post_excerpt' => '',
								'post_title' => __('Hello world!'),
								/* translators: Default post slug */
								'post_name' => sanitize_title( _x('hello-world', 'Default post slug') ),
								'post_modified' => $now,
								'post_modified_gmt' => $now_gmt,
								'guid' => $first_post_guid,
								'comment_count' => 1,
								'to_ping' => '',
								'pinged' => '',
								'post_content_filtered' => ''
								));
	$wpdb->insert( $wpdb->term_relationships, array('term_taxonomy_id' => $cat_tt_id, 'object_id' => 1) );

	// Default comment
	$first_comment_author = __('Mr WordPress');
	$first_comment_url = 'https://wordpress.org/';
	$first_comment = __('Hi, this is a comment.
To delete a comment, just log in and view the post&#039;s comments. There you will have the option to edit or delete them.');
	if ( is_multisite() ) {
		$first_comment_author = get_site_option( 'first_comment_author', $first_comment_author );
		$first_comment_url = get_site_option( 'first_comment_url', network_home_url() );
		$first_comment = get_site_option( 'first_comment', $first_comment );
	}
	$wpdb->insert( $wpdb->comments, array(
								'comment_post_ID' => 1,
								'comment_author' => $first_comment_author,
								'comment_author_email' => '',
								'comment_author_url' => $first_comment_url,
								'comment_date' => $now,
								'comment_date_gmt' => $now_gmt,
								'comment_content' => $first_comment
								));

	// First Page
	$first_page = sprintf( __( "This is an example page. It's different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:

<blockquote>Hi there! I'm a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin' caught in the rain.)</blockquote>

...or something like this:

<blockquote>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</blockquote>

As a new WordPress user, you should go to <a href=\"%s\">your dashboard</a> to delete this page and create new pages for your content. Have fun!" ), admin_url() );
	if ( is_multisite() )
		$first_page = get_site_option( 'first_page', $first_page );
	$first_post_guid = get_option('home') . '/?page_id=2';
	$wpdb->insert( $wpdb->posts, array(
								'post_author' => $user_id,
								'post_date' => $now,
								'post_date_gmt' => $now_gmt,
								'post_content' => $first_page,
								'post_excerpt' => '',
								'post_title' => __( 'Sample Page' ),
								/* translators: Default page slug */
								'post_name' => __( 'sample-page' ),
								'post_modified' => $now,
								'post_modified_gmt' => $now_gmt,
								'guid' => $first_post_guid,
								'post_type' => 'page',
								'to_ping' => '',
								'pinged' => '',
								'post_content_filtered' => ''
								));
	$wpdb->insert( $wpdb->postmeta, array( 'post_id' => 2, 'meta_key' => '_wp_page_template', 'meta_value' => 'default' ) );

	// Set up default widgets for default theme.
	update_option( 'widget_search', array ( 2 => array ( 'title' => '' ), '_multiwidget' => 1 ) );
	update_option( 'widget_recent-posts', array ( 2 => array ( 'title' => '', 'number' => 5 ), '_multiwidget' => 1 ) );
	update_option( 'widget_recent-comments', array ( 2 => array ( 'title' => '', 'number' => 5 ), '_multiwidget' => 1 ) );
	update_option( 'widget_archives', array ( 2 => array ( 'title' => '', 'count' => 0, 'dropdown' => 0 ), '_multiwidget' => 1 ) );
	update_option( 'widget_categories', array ( 2 => array ( 'title' => '', 'count' => 0, 'hierarchical' => 0, 'dropdown' => 0 ), '_multiwidget' => 1 ) );
	update_option( 'widget_meta', array ( 2 => array ( 'title' => '' ), '_multiwidget' => 1 ) );
	update_option( 'sidebars_widgets', array ( 'wp_inactive_widgets' => array (), 'sidebar-1' => array ( 0 => 'search-2', 1 => 'recent-posts-2', 2 => 'recent-comments-2', 3 => 'archives-2', 4 => 'categories-2', 5 => 'meta-2', ), 'sidebar-2' => array (), 'sidebar-3' => array (), 'array_version' => 3 ) );

	if ( ! is_multisite() )
		update_user_meta( $user_id, 'show_welcome_panel', 1 );
	elseif ( ! is_super_admin( $user_id ) && ! metadata_exists( 'user', $user_id, 'show_welcome_panel' ) )
		update_user_meta( $user_id, 'show_welcome_panel', 2 );

	if ( is_multisite() ) {
		// Flush rules to pick up the new page.
		$wp_rewrite->init();
		$wp_rewrite->flush_rules();

		$user = new WP_User($user_id);
		$wpdb->update( $wpdb->options, array('option_value' => $user->user_email), array('option_name' => 'admin_email') );

		// Remove all perms except for the login user.
		$wpdb->query( $wpdb->prepare("DELETE FROM $wpdb->usermeta WHERE user_id != %d AND meta_key = %s", $user_id, $table_prefix.'user_level') );
		$wpdb->query( $wpdb->prepare("DELETE FROM $wpdb->usermeta WHERE user_id != %d AND meta_key = %s", $user_id, $table_prefix.'capabilities') );

		// Delete any caps that snuck into the previously active blog. (Hardcoded to blog 1 for now.) TODO: Get previous_blog_id.
		if ( !is_super_admin( $user_id ) && $user_id != 1 )
			$wpdb->delete( $wpdb->usermeta, array( 'user_id' => $user_id , 'meta_key' => $wpdb->base_prefix.'1_capabilities' ) );
	}
}
endif;

if ( !function_exists('wp_new_blog_notification') ) :
/**
 * {@internal Missing Short Description}}
 *
 * {@internal Missing Long Description}}
 *
 * @since 2.1.0
 *
 * @param string $blog_title Blog title.
 * @param string $blog_url Blog url.
 * @param int $user_id User ID.
 * @param string $password User's Password.
 */
function wp_new_blog_notification($blog_title, $blog_url, $user_id, $password) {
	$user = new WP_User( $user_id );
	$email = $user->user_email;
	$name = $user->user_login;
	$message = sprintf(__("Your new WordPress site has been successfully set up at:

%1\$s

You can log in to the administrator account with the following information:

Username: %2\$s
Password: %3\$s

We hope you enjoy your new site. Thanks!

--The WordPress Team
https://wordpress.org/
"), $blog_url, $name, $password);

	@wp_mail($email, __('New WordPress Site'), $message);
}
endif;

if ( !function_exists('wp_upgrade') ) :
endif;

/**
 * Version of get_option that is private to install/upgrade.
 *
 * @since 1.5.1
 * @access private
 *
 * @param string $setting Option name.
 * @return mixed
 */
function __get_option($setting) {
	global $wpdb;

	if ( $setting == 'home' && defined( 'WP_HOME' ) )
		return untrailingslashit( WP_HOME );

	if ( $setting == 'siteurl' && defined( 'WP_SITEURL' ) )
		return untrailingslashit( WP_SITEURL );

	$option = $wpdb->get_var( $wpdb->prepare("SELECT option_value FROM $wpdb->options WHERE option_name = %s", $setting ) );

	if ( 'home' == $setting && '' == $option )
		return __get_option( 'siteurl' );

	if ( 'siteurl' == $setting || 'home' == $setting || 'category_base' == $setting || 'tag_base' == $setting )
		$option = untrailingslashit( $option );

	return maybe_unserialize( $option );
}

/**
 * {@internal Missing Short Description}}
 *
 * {@internal Missing Long Description}}
 *
 * @since 1.5.0
 *
 * @param unknown_type $queries
 * @param unknown_type $execute
 * @return unknown
 */
function dbDelta( $queries = '', $execute = true ) {
	global $wpdb;

	if ( in_array( $queries, array( '', 'all', 'blog', 'global', 'ms_global' ), true ) )
	    $queries = wp_get_db_schema( $queries );

	// Separate individual queries into an array
	if ( !is_array($queries) ) {
		$queries = explode( ';', $queries );
		$queries = array_filter( $queries );
	}

	/**
	 * Filter the dbDelta SQL queries.
	 *
	 * @since 3.3.0
	 *
	 * @param array $queries An array of dbDelta SQL queries.
	 */
	$queries = apply_filters( 'dbdelta_queries', $queries );

	$cqueries = array(); // Creation Queries
	$iqueries = array(); // Insertion Queries
	$for_update = array();

	// Create a tablename index for an array ($cqueries) of queries
	foreach($queries as $qry) {
		if (preg_match("|CREATE TABLE ([^ ]*)|", $qry, $matches)) {
			$cqueries[ trim( $matches[1], '`' ) ] = $qry;
			$for_update[$matches[1]] = 'Created table '.$matches[1];
		} else if (preg_match("|CREATE DATABASE ([^ ]*)|", $qry, $matches)) {
			array_unshift($cqueries, $qry);
		} else if (preg_match("|INSERT INTO ([^ ]*)|", $qry, $matches)) {
			$iqueries[] = $qry;
		} else if (preg_match("|UPDATE ([^ ]*)|", $qry, $matches)) {
			$iqueries[] = $qry;
		} else {
			// Unrecognized query type
		}
	}

	/**
	 * Filter the dbDelta SQL queries for creating tables and/or databases.
	 *
	 * Queries filterable via this hook contain "CREATE TABLE" or "CREATE DATABASE".
	 *
	 * @since 3.3.0
	 *
	 * @param array $cqueries An array of dbDelta create SQL queries.
	 */
	$cqueries = apply_filters( 'dbdelta_create_queries', $cqueries );

	/**
	 * Filter the dbDelta SQL queries for inserting or updating.
	 *
	 * Queries filterable via this hook contain "INSERT INTO" or "UPDATE".
	 *
	 * @since 3.3.0
	 *
	 * @param array $iqueries An array of dbDelta insert or update SQL queries.
	 */
	$iqueries = apply_filters( 'dbdelta_insert_queries', $iqueries );

	$global_tables = $wpdb->tables( 'global' );
	foreach ( $cqueries as $table => $qry ) {
		// Upgrade global tables only for the main site. Don't upgrade at all if DO_NOT_UPGRADE_GLOBAL_TABLES is defined.
		if ( in_array( $table, $global_tables ) && ( !is_main_site() || defined( 'DO_NOT_UPGRADE_GLOBAL_TABLES' ) ) ) {
			unset( $cqueries[ $table ], $for_update[ $table ] );
			continue;
		}

		// Fetch the table column structure from the database
		$suppress = $wpdb->suppress_errors();
		$tablefields = $wpdb->get_results("DESCRIBE {$table};");
		$wpdb->suppress_errors( $suppress );

		if ( ! $tablefields )
			continue;

		// Clear the field and index arrays.
		$cfields = $indices = array();

		// Get all of the field names in the query from between the parentheses.
		preg_match("|\((.*)\)|ms", $qry, $match2);
		$qryline = trim($match2[1]);

		// Separate field lines into an array.
		$flds = explode("\n", $qryline);

		// todo: Remove this?
		//echo "<hr/><pre>\n".print_r(strtolower($table), true).":\n".print_r($cqueries, true)."</pre><hr/>";

		// For every field line specified in the query.
		foreach ($flds as $fld) {

			// Extract the field name.
			preg_match("|^([^ ]*)|", trim($fld), $fvals);
			$fieldname = trim( $fvals[1], '`' );

			// Verify the found field name.
			$validfield = true;
			switch (strtolower($fieldname)) {
			case '':
			case 'primary':
			case 'index':
			case 'fulltext':
			case 'unique':
			case 'key':
				$validfield = false;
				$indices[] = trim(trim($fld), ", \n");
				break;
			}
			$fld = trim($fld);

			// If it's a valid field, add it to the field array.
			if ($validfield) {
				$cfields[strtolower($fieldname)] = trim($fld, ", \n");
			}
		}

		// For every field in the table.
		foreach ($tablefields as $tablefield) {

			// If the table field exists in the field array ...
			if (array_key_exists(strtolower($tablefield->Field), $cfields)) {

				// Get the field type from the query.
				preg_match("|".$tablefield->Field." ([^ ]*( unsigned)?)|i", $cfields[strtolower($tablefield->Field)], $matches);
				$fieldtype = $matches[1];

				// Is actual field type different from the field type in query?
				if ($tablefield->Type != $fieldtype) {
					// Add a query to change the column type
					$cqueries[] = "ALTER TABLE {$table} CHANGE COLUMN {$tablefield->Field} " . $cfields[strtolower($tablefield->Field)];
					$for_update[$table.'.'.$tablefield->Field] = "Changed type of {$table}.{$tablefield->Field} from {$tablefield->Type} to {$fieldtype}";
				}

				// Get the default value from the array
					// todo: Remove this?
					//echo "{$cfields[strtolower($tablefield->Field)]}<br>";
				if (preg_match("| DEFAULT '(.*?)'|i", $cfields[strtolower($tablefield->Field)], $matches)) {
					$default_value = $matches[1];
					if ($tablefield->Default != $default_value) {
						// Add a query to change the column's default value
						$cqueries[] = "ALTER TABLE {$table} ALTER COLUMN {$tablefield->Field} SET DEFAULT '{$default_value}'";
						$for_update[$table.'.'.$tablefield->Field] = "Changed default value of {$table}.{$tablefield->Field} from {$tablefield->Default} to {$default_value}";
					}
				}

				// Remove the field from the array (so it's not added).
				unset($cfields[strtolower($tablefield->Field)]);
			} else {
				// This field exists in the table, but not in the creation queries?
			}
		}

		// For every remaining field specified for the table.
		foreach ($cfields as $fieldname => $fielddef) {
			// Push a query line into $cqueries that adds the field to that table.
			$cqueries[] = "ALTER TABLE {$table} ADD COLUMN $fielddef";
			$for_update[$table.'.'.$fieldname] = 'Added column '.$table.'.'.$fieldname;
		}

		// Index stuff goes here. Fetch the table index structure from the database.
		$tableindices = $wpdb->get_results("SHOW INDEX FROM {$table};");

		if ($tableindices) {
			// Clear the index array.
			unset($index_ary);

			// For every index in the table.
			foreach ($tableindices as $tableindex) {

				// Add the index to the index data array.
				$keyname = $tableindex->Key_name;
				$index_ary[$keyname]['columns'][] = array('fieldname' => $tableindex->Column_name, 'subpart' => $tableindex->Sub_part);
				$index_ary[$keyname]['unique'] = ($tableindex->Non_unique == 0)?true:false;
			}

			// For each actual index in the index array.
			foreach ($index_ary as $index_name => $index_data) {

				// Build a create string to compare to the query.
				$index_string = '';
				if ($index_name == 'PRIMARY') {
					$index_string .= 'PRIMARY ';
				} else if($index_data['unique']) {
					$index_string .= 'UNIQUE ';
				}
				$index_string .= 'KEY ';
				if ($index_name != 'PRIMARY') {
					$index_string .= $index_name;
				}
				$index_columns = '';

				// For each column in the index.
				foreach ($index_data['columns'] as $column_data) {
					if ($index_columns != '') $index_columns .= ',';

					// Add the field to the column list string.
					$index_columns .= $column_data['fieldname'];
					if ($column_data['subpart'] != '') {
						$index_columns .= '('.$column_data['subpart'].')';
					}
				}
				// Add the column list to the index create string.
				$index_string .= ' ('.$index_columns.')';
				if (!(($aindex = array_search($index_string, $indices)) === false)) {
					unset($indices[$aindex]);
					// todo: Remove this?
					//echo "<pre style=\"border:1px solid #ccc;margin-top:5px;\">{$table}:<br />Found index:".$index_string."</pre>\n";
				}
				// todo: Remove this?
				//else echo "<pre style=\"border:1px solid #ccc;margin-top:5px;\">{$table}:<br /><b>Did not find index:</b>".$index_string."<br />".print_r($indices, true)."</pre>\n";
			}
		}

		// For every remaining index specified for the table.
		foreach ( (array) $indices as $index ) {
			// Push a query line into $cqueries that adds the index to that table.
			$cqueries[] = "ALTER TABLE {$table} ADD $index";
			$for_update[] = 'Added index ' . $table . ' ' . $index;
		}

		// Remove the original table creation query from processing.
		unset( $cqueries[ $table ], $for_update[ $table ] );
	}

	$allqueries = array_merge($cqueries, $iqueries);
	if ($execute) {
		foreach ($allqueries as $query) {
			// todo: Remove this?
			//echo "<pre style=\"border:1px solid #ccc;margin-top:5px;\">".print_r($query, true)."</pre>\n";
			$wpdb->query($query);
		}
	}

	return $for_update;
}

/**
 * {@internal Missing Short Description}}
 *
 * {@internal Missing Long Description}}
 *
 * @since 1.5.0
 */
function make_db_current_silent( $tables = 'all' ) {
	dbDelta( $tables );
}

/**
 * {@internal} Missing Short Description}}
 *
 * {@internal} Missing Long Description}}
 *
 * @since 2.1.0
 */
function wp_check_mysql_version() {
	global $wpdb;
	$result = $wpdb->check_database_version();
	if ( is_wp_error( $result ) )
		die( $result->get_error_message() );
}

/**
 * Install global terms.
 *
 * @since 3.0.0
 *
 */
if ( !function_exists( 'install_global_terms' ) ) :
endif;
