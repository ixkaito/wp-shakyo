<?php
/**
 * Theme, template, and stylesheet functions.
 *
 * @package WordPress
 * @subpackage Theme
 */

/**
 * Gets a WP_Theme object for a theme.
 *
 * @since 3.4.0
 *
 * @param string $stylesheet Directory name for the theme. Optional. Defaults to current theme.
 * @param string $theme_root Absolute path of the theme root to look in. Optional. If not specified, get_raw_theme_root()
 * 	is used to calculate the theme root for the $stylesheet provided (or current theme).
 * @return WP_Theme Theme object. Be sure to check the object's exists() method if you need to confirm the theme's existence.
 */
function wp_get_theme( $stylesheet = null, $theme_root = null ) {
	global $wp_theme_directories;

	if ( empty( $stylesheet ) )
		$stylesheet = get_stylesheet();

	if ( empty( $theme_root ) ) {
		$theme_root = get_raw_theme_root( $stylesheet );
		if ( false === $theme_root )
			$theme_root = WP_CONTENT_DIR . '/themes';
		elseif ( ! in_array( $theme_root, (array) $wp_theme_directories ) )
			$theme_root = WP_CONTENT_DIR . $theme_root;
	}

	return new WP_Theme( $stylesheet, $theme_root );
}

/**
 * Retrieve name of the current stylesheet.
 *
 * The theme name that the administrator has currently set the front end theme
 * as.
 *
 * For all intents and purposes, the template name and the stylesheet name are
 * going to be the same for most cases.
 *
 * @since 1.5.0
 *
 * @return string Stylesheet name.
 */
function get_stylesheet() {
	/**
	 * Filter the name of current stylesheet.
	 *
	 * @since 1.5.0
	 *
	 * @param string $stylesheet Name of the current stylesheet.
	 */
	return apply_filters( 'stylesheet', get_option( 'stylesheet' ) );
}

/**
 * Retrieve stylesheet directory path for current theme.
 *
 * @since 1.5.0
 *
 * @return string Path to current theme directory.
 */
function get_stylesheet_directory() {
	$stylesheet = get_stylesheet();
	$theme_root = get_theme_root( $stylesheet );
	$stylesheet_dir = "$theme_root/$stylesheet";

	/**
	 * Filter the stylesheet directory path for current theme.
	 *
	 * @since 1.5.0
	 *
	 * @param string $stylesheet_dir Absolute path to the current theme.
	 * @param string $stylesheet     Directory name of the current theme.
	 * @param string $theme_root     Absolute path to themes directory.
	 */
	return apply_filters( 'stylesheet_directory', $stylesheet_dir, $stylesheet, $theme_root );
}

/**
 * Retrieve name of the current theme.
 *
 * @since 1.5.0
 * @uses apply_filters() Calls 'template' filter on template option.
 *
 * @return string Template name.
 */
function get_template() {
	/**
	 * Filter the name of the current theme.
	 *
	 * @since 1.5.0
	 *
	 * @param string $template Current theme's directory name.
	 */
	return apply_filters( 'template', get_option( 'template' ) );
}

/**
 * Retrieve current theme directory.
 *
 * @since 1.5.0
 *
 * @return string Template directory path.
 */
function get_template_directory() {
	$template = get_template();
	$theme_root = get_theme_root( $template );
	$template_dir = "$theme_root/$template";

	/**
	 * Filter the current theme directory path.
	 *
	 * @since 1.5.0
	 *
	 * @param string $template_dir The URI of the current theme directory.
	 * @param string $template     Directory name of the current theme.
	 * @param string $theme_root   Absolute path to the themes directory.
	 */
	return apply_filters( 'template_directory', $template_dir, $template, $theme_root );
}

/**
 * Retrieve theme roots.
 *
 * @since 2.9.0
 *
 * @return array|string An array of theme roots keyed by template/stylesheet or a single theme root if all themes have the same root.
 */
function get_theme_roots() {
	global $wp_theme_directories;

	if ( count($wp_theme_directories) <= 1 )
		return '/themes';

	$theme_roots = get_site_transient( 'theme_roots' );
	if ( false === $theme_roots ) {
		search_theme_directories( true ); // Regenerate the transient.
		$theme_roots = get_site_transient( 'theme_roots' );
	}
	return $theme_roots;
}

/**
 * Register a directory that contains themes.
 *
 * @since 2.9.0
 *
 * @param string $directory Either the full filesystem path to a theme folder or a folder within WP_CONTENT_DIR
 * @return bool
 */
function register_theme_directory( $directory ) {
	global $wp_theme_directories;

	if ( ! file_exists( $directory ) ) {
		// Try prepending as the theme directory could be relative to the content directory
		$directory = WP_CONTENT_DIR . '/' . $directory;
		// If this directory does not exist, return and do not register
		if ( ! file_exists( $directory ) ) {
			return false;
		}
	}

	if ( ! is_array( $wp_theme_directories ) ) {
		$wp_theme_directories = array();
	}

	$untrailed = untrailingslashit( $directory );
	if ( ! empty( $untrailed ) && ! in_array( $untrailed, $wp_theme_directories ) ) {
		$wp_theme_directories[] = $untrailed;
	}

	return true;
}

/**
 * Retrieve path to themes directory.
 *
 * Does not have trailing slash.
 *
 * @since 1.5.0
 *
 * @param string $stylesheet_or_template The stylesheet or template name of the theme
 * @return string Theme path.
 */
function get_theme_root( $stylesheet_or_template = false ) {
	global $wp_theme_directories;

	if ( $stylesheet_or_template && $theme_root = get_raw_theme_root( $stylesheet_or_template ) ) {
		// Always prepend WP_CONTENT_DIR unless the root currently registered as a theme directory.
		// This gives relative theme roots the benefit of the doubt when things go haywire.
		if ( ! in_array( $theme_root, (array) $wp_theme_directories ) )
			$theme_root = WP_CONTENT_DIR . $theme_root;
	} else {
		$theme_root = WP_CONTENT_DIR . '/themes';
	}

	/**
	 * Filter the absolute path to the themes directory.
	 *
	 * @since 1.5.0
	 *
	 * @param string $theme_root Absolute path to themes directory.
	 */
	return apply_filters( 'theme_root', $theme_root );
}

/**
 * Get the raw theme root relative to the content directory with no filters applied.
 *
 * @since 3.1.0
 *
 * @param string $stylesheet_or_template The stylesheet or template name of the theme
 * @param bool $skip_cache Optional. Whether to skip the cache. Defaults to false, meaning the cache is used.
 * @return string Theme root
 */
function get_raw_theme_root( $stylesheet_or_template, $skip_cache = false ) {
	global $wp_theme_directories;

	if ( count($wp_theme_directories) <= 1 )
		return '/themes';

	$theme_root = false;

	// If requesting the root for the current theme, consult options to avoid calling get_theme_roots()
	if ( ! $skip_cache ) {
		if ( get_option('stylesheet') == $stylesheet_or_template )
			$theme_root = get_option('stylesheet_root');
		elseif ( get_option('template') == $stylesheet_or_template )
			$theme_root = get_option('template_root');
	}

	if ( empty($theme_root) ) {
		$theme_roots = get_theme_roots();
		if ( !empty($theme_roots[$stylesheet_or_template]) )
			$theme_root = $theme_roots[$stylesheet_or_template];
	}

	return $theme_root;
}

/**
 * Start preview theme output buffer.
 *
 * Will only perform task if the user has permissions and template and preview
 * query variables exist.
 *
 * @since 2.6.0
 */
function preview_theme() {
	if ( ! (isset($_GET['template']) && isset($_GET['preview'])) )
		return;

	if ( !current_user_can( 'switch_themes' ) )
		return;

	// Admin Thickbox requests
	if ( isset( $_GET['preview_iframe'] ) )
		show_admin_bar( false );

	$_GET['template'] = preg_replace('|[^a-z0-9_./-]|i', '', $_GET['template']);

	if ( validate_file($_GET['template']) )
		return;

	add_filter( 'template', '_preview_theme_template_filter' );

	if ( isset($_GET['stylesheet']) ) {
		$_GET['stylesheet'] = preg_replace('|[^a-z0-9_./-]|i', '', $_GET['stylesheet']);
		if ( validate_file($_GET['stylesheet']) )
			return;
		add_filter( 'stylesheet', '_preview_theme_stylesheet_filter' );
	}

	// Prevent theme mods to current theme being used on theme being previewed
	add_filter( 'pre_option_theme_mods_' . get_option( 'stylesheet' ), '__return_empty_array' );

	ob_start( 'preview_theme_ob_filter' );
}
add_action('setup_theme', 'preview_theme');

/**
 * Registers the internal custom header and background routines.
 *
 * @since 3.4.0
 * @access private
 */
function _custom_header_background_just_in_time() {
	global $custom_image_header, $custom_background;

	if ( current_theme_supports( 'custom-header' ) ) {
		// In case any constants were defined after an add_custom_image_header() call, re-run.
		add_theme_support( 'custom-header', array( '__jit' => true ) );

		$args = get_theme_support( 'custom-header' );
		if ( $args[0]['wp-head-callback'] )
			add_action( 'wp_head', $args[0]['wp-head-callback'] );

		if ( is_admin() ) {
			require_once( ABSPATH . 'wp-admin/custom-header.php' );
			$custom_image_header = new Custom_Image_Header( $args[0]['admin-head-callback'], $args[0]['admin-preview-callback'] );
		}
	}

	if ( current_theme_supports( 'custom-background' ) ) {
		// In case any constants were defined after an add_custom_background() call, re-run.
		add_theme_support( 'custom-background', array( '__jit' => true ) );

		$args = get_theme_support( 'custom-background' );
		add_action( 'wp_head', $args[0]['wp-head-callback'] );

		if ( is_admin() ) {
			require_once( ABSPATH . 'wp-admin/custom-background.php' );
			$custom_background = new Custom_Background( $args[0]['admin-head-callback'], $args[0]['admin-preview-callback'] );
		}
	}
}
add_action( 'wp_loaded', '_custom_header_background_just_in_time' );

/**
 * Checks a theme's support for a given feature
 *
 * @since 2.9.0
 * @param string $feature the feature being checked
 * @return boolean
 */
function current_theme_supports( $feature ) {
	global $_wp_theme_features;

	if ( 'custom-header-uploads' == $feature )
		return current_theme_supports( 'custom-header', 'uploads' );

	if ( !isset( $_wp_theme_features[$feature] ) )
		return false;

	// If no args passed then no extra checks need be performed
	if ( func_num_args() <= 1 )
		return true;

	$args = array_slice( func_get_args(), 1 );

	switch ( $feature ) {
		case 'post-thumbnails':
			// post-thumbnails can be registered for only certain content/post types by passing
			// an array of types to add_theme_support(). If no array was passed, then
			// any type is accepted
			if ( true === $_wp_theme_features[$feature] )  // Registered for all types
				return true;
			$content_type = $args[0];
			return in_array( $content_type, $_wp_theme_features[$feature][0] );

		case 'html5':
		case 'post-formats':
			// specific post formats can be registered by passing an array of types to
			// add_theme_support()

			// Specific areas of HTML5 support *must* be passed via an array to add_theme_support()

			$type = $args[0];
			return in_array( $type, $_wp_theme_features[$feature][0] );

		case 'custom-header':
		case 'custom-background' :
			// specific custom header and background capabilities can be registered by passing
			// an array to add_theme_support()
			$header_support = $args[0];
			return ( isset( $_wp_theme_features[$feature][0][$header_support] ) && $_wp_theme_features[$feature][0][$header_support] );
	}

	/**
	 * Filter whether the current theme supports a specific feature.
	 *
	 * The dynamic portion of the hook name, $feature, refers to
	 * the specific theme feature. Possible values include 'post-formats',
	 * 'post-thumbnails', 'custom-background', 'custom-header', 'menus',
	 * 'automatic-feed-links', and 'html5'.
	 *
	 * @since 3.4.0
	 *
	 * @param bool   true     Whether the current theme supports the given feature. Default true.
	 * @param array  $args    Array of arguments for the feature.
	 * @param string $feature The theme feature.
	 */
	return apply_filters( "current_theme_supports-{$feature}", true, $args, $_wp_theme_features[$feature] );
}

add_action( 'delete_attachment', '_delete_attachment_theme_mod' );

/**
 * Checks if a theme has been changed and runs 'after_switch_theme' hook on the next WP load
 *
 * @since 3.3.0
 */
function check_theme_switched() {
	if ( $stylesheet = get_option( 'theme_switched' ) ) {
		$old_theme = wp_get_theme( $stylesheet );

		// Prevent retrieve_widgets() from running since Customizer already called it up front
		if ( get_option( 'theme_switched_via_customizer' ) ) {
			remove_action( 'after_switch_theme', '_wp_sidebars_changed' );
			update_option( 'theme_switched_via_customizer', false );
		}

		if ( $old_theme->exists() ) {
			/**
			 * Fires on the first WP load after a theme switch if the old theme still exists.
			 *
			 * This action fires multiple times and the parameters differs
			 * according to the context, if the old theme exists or not.
			 * If the old theme is missing, the parameter will be the slug
			 * of the old theme.
			 *
			 * @since 3.3.0
			 *
			 * @param string   $old_name  Old theme name.
			 * @param WP_Theme $old_theme WP_Theme instance of the old theme.
			 */
			do_action( 'after_switch_theme', $old_theme->get( 'Name' ), $old_theme );
		} else {
			/** This action is documented in wp-includes/theme.php */
			do_action( 'after_switch_theme', $stylesheet );
		}

		update_option( 'theme_switched', false );
	}
}

/**
 * Includes and instantiates the WP_Customize_Manager class.
 *
 * Fires when ?wp_customize=on or on wp-admin/customize.php.
 *
 * @since 3.4.0
 */
function _wp_customize_include() {
	if ( ! ( ( isset( $_REQUEST['wp_customize'] ) && 'on' == $_REQUEST['wp_customize'] )
		|| ( is_admin() && 'customize.php' == basename( $_SERVER['PHP_SELF'] ) )
	) )
		return;

	require( ABSPATH . WPINC . '/class-wp-customize-manager.php' );
	// Init Customize class
	$GLOBALS['wp_customize'] = new WP_Customize_Manager;
}
add_action( 'plugins_loaded', '_wp_customize_include' );

add_action( 'admin_enqueue_scripts', '_wp_customize_loader_settings' );
