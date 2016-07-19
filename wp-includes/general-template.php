<?php
/**
 * General template tags that can go anywhere in a template.
 *
 * @package WordPress
 * @subpackage Template
 */

/**
 * Load header template.
 *
 * Includes the header template for a theme or if a name is specified then a
 * specialised header will be included.
 *
 * For the parameter, if the file is called "header-special.php" then specify
 * "special".
 *
 * @since 1.5.0
 *
 * @uses locate_template()
 *
 * @param string $name The name of the specialised header.
 */
function get_header( $name = null ) {
	/**
	 * Fires before the header template file is loaded.
	 *
	 * The hook allows a specific header template file to be used in place of the
	 * default header template file. If your file is called header-new.php,
	 * you would specify the filename in the hook as get_header( 'new' ).
	 *
	 * @since 2.1.0
	 * @since 2.8.0 $name parameter added.
	 *
	 * @param string $name Name of the specific header file to use.
	 */
	do_action( 'get_header', $name );

	$templates = array();
	$name = (string) $name;
	if ( '' !== $name )
		$templates[] = "header-{$name}.php";

	$templates[] = 'header.php';

	// Backward compat code will be removed in a future release
	if ('' == locate_template($templates, true))
		load_template( ABSPATH . WPINC . '/theme-compat/header.php');
}

/**
 * Returns the Lost Password URL.
 *
 * Returns the URL that allows the user to retrieve the lost password
 *
 * @since 2.8.0
 *
 * @uses site_url() To generate the lost password URL
 *
 * @param string $redirect Path to redirect to on login.
 * @return string Lost password URL.
 */
function wp_lostpassword_url( $redirect = '' ) {
	$args = array( 'action' => 'lostpassword' );
	if ( !empty($redirect) ) {
		$args['redirect_to'] = $redirect;
	}

	$lostpassword_url = add_query_arg( $args, network_site_url('wp-login.php', 'login') );

	/**
	 * Filter the Lost Password URL.
	 *
	 * @since 2.8.0
	 *
	 * @param string $lostpassword_url The lost password page URL.
	 * @param string $redirect         The path to redirect to on login.
	 */
	return apply_filters( 'lostpassword_url', $lostpassword_url, $redirect );
}

/**
 * Display information about the blog.
 *
 * @see get_bloginfo() For possible values for the parameter.
 * @since 0.71
 *
 * @param string $show What to display.
 */
function bloginfo( $show='' ) {
	echo get_bloginfo( $show, 'display' );
}

/**
 * Retrieve information about the blog.
 *
 * Some show parameter values are deprecated and will be removed in future
 * versions. These options will trigger the _deprecated_argument() function.
 * The deprecated blog info options are listed in the function contents.
 *
 * The possible values for the 'show' parameter are listed below.
 * <ol>
 * <li><strong>url</strong> - Blog URI to homepage.</li>
 * <li><strong>wpurl</strong> - Blog URI path to WordPress.</li>
 * <li><strong>description</strong> - Secondary title</li>
 * </ol>
 *
 * The feed URL options can be retrieved from 'rdf_url' (RSS 0.91),
 * 'rss_url' (RSS 1.0), 'rss2_url' (RSS 2.0), or 'atom_url' (Atom feed). The
 * comment feeds can be retrieved from the 'comments_atom_url' (Atom comment
 * feed) or 'comments_rss2_url' (RSS 2.0 comment feed).
 *
 * @since 0.71
 *
 * @param string $show Blog info to retrieve.
 * @param string $filter How to filter what is retrieved.
 * @return string Mostly string values, might be empty.
 */
function get_bloginfo( $show = '', $filter = 'raw' ) {

	switch( $show ) {
		case 'home' : // DEPRECATED
		case 'siteurl' : // DEPRECATED
			_deprecated_argument( __FUNCTION__, '2.2', sprintf( __('The <code>%s</code> option is deprecated for the family of <code>bloginfo()</code> functions.' ), $show ) . ' ' . sprintf( __( 'Use the <code>%s</code> option instead.' ), 'url'  ) );
		case 'url' :
			$output = home_url();
			break;
		case 'wpurl' :
			$output = site_url();
			break;
		case 'description':
			$output = get_option('blogdescription');
			break;
		case 'rdf_url':
			$output = get_feed_link('rdf');
			break;
		case 'rss_url':
			$output = get_feed_link('rss');
			break;
		case 'rss2_url':
			$output = get_feed_link('rss2');
			break;
		case 'atom_url':
			$output = get_feed_link('atom');
			break;
		case 'comments_atom_url':
			$output = get_feed_link('comments_atom');
			break;
		case 'comments_rss2_url':
			$output = get_feed_link('comments_rss2');
			break;
		case 'pingback_url':
			$output = site_url( 'xmlrpc.php' );
			break;
		case 'stylesheet_url':
			$output = get_stylesheet_uri();
			break;
		case 'stylesheet_directory':
			$output = get_stylesheet_directory_uri();
			break;
		case 'template_directory':
		case 'template_url':
			$output = get_template_directory_uri();
			break;
		case 'admin_email':
			$output = get_option('admin_email');
			break;
		case 'charset':
			$output = get_option('blog_charset');
			if ('' == $output) $output = 'UTF-8';
			break;
		case 'html_type' :
			$output = get_option('html_type');
			break;
		case 'version':
			global $wp_version;
			$output = $wp_version;
			break;
		case 'language':
			$output = get_locale();
			$output = str_replace('_', '-', $output);
			break;
		case 'text_direction':
			//_deprecated_argument( __FUNCTION__, '2.2', sprintf( __('The <code>%s</code> option is deprecated for the family of <code>bloginfo()</code> functions.' ), $show ) . ' ' . sprintf( __( 'Use the <code>%s</code> function instead.' ), 'is_rtl()'  ) );
			if ( function_exists( 'is_rtl' ) ) {
				$output = is_rtl() ? 'rtl' : 'ltr';
			} else {
				$output = 'ltr';
			}
			break;
		case 'name':
		default:
			$output = get_option('blogname');
			break;
	}

	$url = true;
	if (strpos($show, 'url') === false &&
		strpos($show, 'directory') === false &&
		strpos($show, 'home') === false)
		$url = false;

	if ( 'display' == $filter ) {
		if ( $url ) {
			/**
			 * Filter the URL returned by get_bloginfo().
			 *
			 * @since 2.0.5
			 *
			 * @param mixed $output The URL returned by bloginfo().
			 * @param mixed $show   Type of information requested.
			 */
			$output = apply_filters( 'bloginfo_url', $output, $show );
		} else {
			/**
			 * Filter the site information returned by get_bloginfo().
			 *
			 * @since 0.71
			 *
			 * @param mixed $output The requested non-URL site information.
			 * @param mixed $show   Type of information requested.
			 */
			$output = apply_filters( 'bloginfo', $output, $show );
		}
	}

	return $output;
}

/**
 * Display or retrieve page title for all areas of blog.
 *
 * By default, the page title will display the separator before the page title,
 * so that the blog title will be before the page title. This is not good for
 * title display, since the blog title shows up on most tabs and not what is
 * important, which is the page that the user is looking at.
 *
 * There are also SEO benefits to having the blog title after or to the 'right'
 * or the page title. However, it is mostly common sense to have the blog title
 * to the right with most browsers supporting tabs. You can achieve this by
 * using the seplocation parameter and setting the value to 'right'. This change
 * was introduced around 2.5.0, in case backwards compatibility of themes is
 * important.
 *
 * @since 1.0.0
 *
 * @param string $sep Optional, default is '&raquo;'. How to separate the various items within the page title.
 * @param bool $display Optional, default is true. Whether to display or retrieve title.
 * @param string $seplocation Optional. Direction to display title, 'right'.
 * @return string|null String on retrieve, null when displaying.
 */
function wp_title($sep = '&raquo;', $display = true, $seplocation = '') {
	global $wp_locale;

	$m = get_query_var('m');
	$year = get_query_var('year');
	$monthnum = get_query_var('monthnum');
	$day = get_query_var('day');
	$search = get_query_var('s');
	$title = '';

	$t_sep = '%WP_TITILE_SEP%'; // Temporary separator, for accurate flipping, if necessary

	// If there is a post
	if ( is_single() || ( is_home() && !is_front_page() ) || ( is_page() && !is_front_page() ) ) {
		$title = single_post_title( '', false );
	}

	// If there's a post type archive
	if ( is_post_type_archive() ) {
		$post_type = get_query_var( 'post_type' );
		if ( is_array( $post_type ) )
			$post_type = reset( $post_type );
		$post_type_object = get_post_type_object( $post_type );
		if ( ! $post_type_object->has_archive )
			$title = post_type_archive_title( '', false );
	}

	// If there's a category or tag
	if ( is_category() || is_tag() ) {
		$title = single_term_title( '', false );
	}

	// If there's a taxonomy
	if ( is_tax() ) {
		$term = get_queried_object();
		if ( $term ) {
			$tax = get_taxonomy( $term->taxonomy );
			$title = single_term_title( $tax->labels->name . $t_sep, false );
		}
	}

	// If there's an author
	if ( is_author() && ! is_post_type_archive() ) {
		$author = get_queried_object();
		if ( $author )
			$title = $author->display_name;
	}

	// Post type archives with has_archive should override terms.
	if ( is_post_type_archive() && $post_type_object->has_archive )
		$title = post_type_archive_title( '', false );

	// If there's a month
	if ( is_archive() && !empty($m) ) {
		$my_year = substr($m, 0, 4);
		$my_month = $wp_locale->get_month(substr($m, 4, 2));
		$my_day = intval(substr($m, 6, 2));
		$title = $my_year . ( $my_month ? $t_sep . $my_month : '' ) . ( $my_day ? $t_sep . $my_day : '' );
	}

	// If there's a year
	if ( is_archive() && !empty($year) ) {
		$title = $year;
		if ( !empty($monthnum) )
			$title .= $t_sep . $wp_locale->get_month($monthnum);
		if ( !empty($day) )
			$title .= $t_sep . zeroise($day, 2);
	}

	// If it's a search
	if ( is_search() ) {
		/* translators: 1: separator, 2: search phrase */
		$title = sprintf(__('Search Results %1$s %2$s'), $t_sep, strip_tags($search));
	}

	// If it's a 404 page
	if ( is_404() ) {
		$title = __('Page not found');
	}

	$prefix = '';
	if ( !empty($title) )
		$prefix = " $sep ";

	/**
	 * Filter the parts of the page title.
	 *
	 * @since 4.0.0
	 *
	 * @param array $title_array Parts of the page title.
	 */
	$title_array = apply_filters( 'wp_title_parts', explode( $t_sep, $title ) );

 	// Determines position of the separator and direction of the breadcrumb
	if ( 'right' == $seplocation ) { // sep on right, so reverse the order
		$title_array = array_reverse( $title_array );
		$title = implode( " $sep ", $title_array ) . $prefix;
	} else {
		$title = $prefix . implode( " $sep ", $title_array );
	}

	/**
	 * Filter the text of the page title.
	 *
	 * @since 2.0.0
	 *
	 * @param string $title       Page title.
	 * @param string $sep         Title separator.
	 * @param string $seplocation Location of the separator (left or right).
	 */
	$title = apply_filters( 'wp_title', $title, $sep, $seplocation );

	// Send it out
	if ( $display )
		echo $title;
	else
		return $title;

}

add_action( 'save_post', 'delete_get_calendar_cache' );
add_action( 'delete_post', 'delete_get_calendar_cache' );
add_action( 'update_option_start_of_week', 'delete_get_calendar_cache' );
add_action( 'update_option_gmt_offset', 'delete_get_calendar_cache' );

/**
 * Display a noindex meta tag.
 *
 * Outputs a noindex meta tag that tells web robots not to index the page content.
 * Typical usage is as a wp_head callback. add_action( 'wp_head', 'wp_no_robots' );
 *
 * @since 3.3.0
 */
function wp_no_robots() {
	echo "<meta name='robots' content='noindex,follow' />\n";
}

/**
 * Display the language attributes for the html tag.
 *
 * Builds up a set of html attributes containing the text direction and language
 * information for the page.
 *
 * @since 2.1.0
 *
 * @param string $doctype The type of html document (xhtml|html).
 */
function language_attributes($doctype = 'html') {
	$attributes = array();

	if ( function_exists( 'is_rtl' ) && is_rtl() )
		$attributes[] = 'dir="rtl"';

	if ( $lang = get_bloginfo('language') ) {
		if ( get_option('html_type') == 'text/html' || $doctype == 'html' )
			$attributes[] = "lang=\"$lang\"";

		if ( get_option('html_type') != 'text/html' || $doctype == 'xhtml' )
			$attributes[] = "xml:lang=\"$lang\"";
	}

	$output = implode(' ', $attributes);

	/**
	 * Filter the language attributes for display in the html tag.
	 *
	 * @since 2.5.0
	 *
	 * @param string $output A space-separated list of language attributes.
	 */
	echo apply_filters( 'language_attributes', $output );
}

/**
 * Enqueues or directly prints a stylesheet link to the specified CSS file.
 *
 * "Intelligently" decides to enqueue or to print the CSS file. If the
 * 'wp_print_styles' action has *not* yet been called, the CSS file will be
 * enqueued. If the wp_print_styles action *has* been called, the CSS link will
 * be printed. Printing may be forced by passing true as the $force_echo
 * (second) parameter.
 *
 * For backward compatibility with WordPress 2.3 calling method: If the $file
 * (first) parameter does not correspond to a registered CSS file, we assume
 * $file is a file relative to wp-admin/ without its ".css" extension. A
 * stylesheet link to that generated URL is printed.
 *
 * @since 2.3.0
 * @uses $wp_styles WordPress Styles Object
 *
 * @param string $file Optional. Style handle name or file name (without ".css" extension) relative
 * 	 to wp-admin/. Defaults to 'wp-admin'.
 * @param bool $force_echo Optional. Force the stylesheet link to be printed rather than enqueued.
 */
function wp_admin_css( $file = 'wp-admin', $force_echo = false ) {
	global $wp_styles;
	if ( !is_a($wp_styles, 'WP_Styles') )
		$wp_styles = new WP_Styles();

	// For backward compatibility
	$handle = 0 === strpos( $file, 'css/' ) ? substr( $file, 4 ) : $file;

	if ( $wp_styles->query( $handle ) ) {
		if ( $force_echo || did_action( 'wp_print_styles' ) ) // we already printed the style queue. Print this one immediately
			wp_print_styles( $handle );
		else // Add to style queue
			wp_enqueue_style( $handle );
		return;
	}

	/**
	 * Filter the stylesheet link to the specified CSS file.
	 *
	 * If the site is set to display right-to-left, the RTL stylesheet link
	 * will be used instead.
	 *
	 * @since 2.3.0
	 *
	 * @param string $file Style handle name or filename (without ".css" extension)
	 *                     relative to wp-admin/. Defaults to 'wp-admin'.
	 */
	echo apply_filters( 'wp_admin_css', "<link rel='stylesheet' href='" . esc_url( wp_admin_css_uri( $file ) ) . "' type='text/css' />\n", $file );

	if ( function_exists( 'is_rtl' ) && is_rtl() ) {
		/** This filter is documented in wp-includes/general-template.php */
		echo apply_filters( 'wp_admin_css', "<link rel='stylesheet' href='" . esc_url( wp_admin_css_uri( "$file-rtl" ) ) . "' type='text/css' />\n", "$file-rtl" );
	}
}

/**
 * Outputs the html checked attribute.
 *
 * Compares the first two arguments and if identical marks as checked
 *
 * @since 1.0.0
 *
 * @param mixed $checked One of the values to compare
 * @param mixed $current (true) The other value to compare if not just true
 * @param bool $echo Whether to echo or just return the string
 * @return string html attribute or empty string
 */
function checked( $checked, $current = true, $echo = true ) {
	return __checked_selected_helper( $checked, $current, $echo, 'checked' );
}

/**
 * Outputs the html disabled attribute.
 *
 * Compares the first two arguments and if identical marks as disabled
 *
 * @since 3.0.0
 *
 * @param mixed $disabled One of the values to compare
 * @param mixed $current (true) The other value to compare if not just true
 * @param bool $echo Whether to echo or just return the string
 * @return string html attribute or empty string
 */
function disabled( $disabled, $current = true, $echo = true ) {
	return __checked_selected_helper( $disabled, $current, $echo, 'disabled' );
}

/**
 * Private helper function for checked, selected, and disabled.
 *
 * Compares the first two arguments and if identical marks as $type
 *
 * @since 2.8.0
 * @access private
 *
 * @param mixed $helper One of the values to compare
 * @param mixed $current (true) The other value to compare if not just true
 * @param bool $echo Whether to echo or just return the string
 * @param string $type The type of checked|selected|disabled we are doing
 * @return string html attribute or empty string
 */
function __checked_selected_helper( $helper, $current, $echo, $type ) {
	if ( (string) $helper === (string) $current )
		$result = " $type='$type'";
	else
		$result = '';

	if ( $echo )
		echo $result;

	return $result;
}
