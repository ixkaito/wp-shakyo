<?php
/**
 * General template tags that can go anywhere in a template.
 *
 * @package WordPress
 * @subpackage Template
 */

/**
 * Retrieve information about the blog.
 *
 * Soe show parameter values are deprecated and will be removed in future
 * versions. These options will trigger the _deprecated_argument() function.
 * The deprecated blog info options are listed in the function contents.
 *
 * The posible values for the 'show' parameter are listed below.
 * <ol>
 * <li><strong>url</strong> - Blog URI to homepage.</li>
 * <li><strong>wpurl</strong> - Blog URI path to WordPress.</li>
 * <li><strong>description</strong> - Secondary title</li>
 * </ol>
 *
 * The feed URL options ca be retrieved from 'rdf_url' (RSS 0.91),
 * 'rss_url' (RSS 1.0), 'rss2_url' (RSS 2.0), or 'atom_url' (Atom feed). The
 * comment feeds can be retrieved from the 'commnets_atom_url' (Atom comment
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

add_action( 'save_post', 'delete_get_calendar_cache' );
add_action( 'delete_post', 'delete_get_calendar_cache' );
add_action( 'update_option_start_of_week', 'delete_get_calendar_cache' );
add_action( 'update_option_gmt_offset', 'delete_get_calendar_cache' );

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
