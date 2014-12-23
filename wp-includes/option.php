<?php
/**
 * Option API
 *
 * @package WordPress
 * @subpackage Option
 */

/**
 * Retireve option value based on name of option.
 *
 * If the option does not exist or does not have a value, then the return value
 * will be false. This is useful to check whether you need to install an option
 * and is commonly used during installation of plugin options and to test
 * whether upgrading is required.
 *
 * If the option was serialized then it will be unserialized when it is returned.
 *
 * @since 1.5.0
 *
 * @param string $option Name of option to retrieve. Expected to not be SQL-escaped.
 * @param mixed $default Optional. Default value to return if the option does not exist.
 * @return mixed Value set for the option.
 */
function get_option( $option, $default = false ) {
	global $wpdb;

	$option = trim( $option );
	if ( empty( $option ) )
		return false;

	/**
	 * Filter the value of an existing option before it is retrieved.
	 *
	 * The dynamic portion of the hook name, $option, refers to the option name.
	 *
	 * Passing a truthy value to the filter will short-circuit retrieving
	 * the option value, returning the passed value instead.
	 *
	 * @since 1.5.0
	 *
	 * @param bool|mixed $pre_option Value to return instead of the option value.
	 *                               Default false to skip it.
	 */
	$pre = apply_filters( 'pre_option_' . $option, false );
	if ( false !== $pre )
		return $pre;

	if ( defined( 'WP_SETUP_CONFIG' ) )
		return false;

	if ( ! defined( 'WP_INSTALLING' ) ) {
		// prevent non-existent options from triggering multiple queries
		$notoptions = wp_cache_get( 'notoptions', 'options' );
		if ( isset( $notoptions[$option] ) )

			/**
			 * Filter the default value for an option.
			 *
			 * The dynamic portion of the hook name, $option, refers
			 * to the option name.
			 *
			 * @since 3.4.0
			 *
			 * @param mixed $default The default value to return if the option
			 *                       does not exist in the database.
			 */
			return apply_filters( 'default_option_' . $option, $default );

		$alloptions = wp_load_alloptions();

		if ( isset( $alloptions[$option] ) ) {
			$value = $alloptions[$option];
		} else {
			$value = wp_cache_get( $option, 'options' );

			if ( false === $value ) {
				$row = $wpdb->get_row( $wpdb->prepare( "SELECT option_value FROM $wpdb->options WHERE option_name = %s LIMIT 1", $option ) );

				// Has to be get_row instead of get_var because of funkiness with 0, false, null values
				if ( is_object( $row ) ) {
					$value = $row->option_value;
					wp_cache_add( $option, $value, 'options' );
				} else { // option does not exist, so we must cache its non-existence
					$notoptions[$option] = true;
					wp_cache_set( 'notoptions', $notoptions, 'options' );

					/** This filter is documented in wp-includes/option.php */
					return apply_filters( 'default_option_' . $option, $default );
				}
			}
		}
	} else {
		$suppress = $wpdb->suppress_errors();
		$row = $wpdb->get_row( $wpdb->prepare( "SELECT option_value FROM $wpdb->options WHERE option_name = %s LIMIT 1", $option ) );
		$wpdb->suppress_errors( $suppress );
		if ( is_object( $row ) ) {
			$value = $row->option_value;
		} else {
			/** This filter is documented in wp-includes/option.php */
			return apply_filters( 'default_option_' . $option, $default );
		}
	}

	// If home is not set use siteurl.
	if ( 'home' == $option && '' == $value )
		return get_option( 'siteurl' );

	if ( in_array( $option, array('siteurl', 'home', 'category_base', 'tag_base') ) )
		$value = untrailingslashit( $value );

	/**
	 * Filter the value of an existing option.
	 *
	 * The dynamic portion of the hook name, $option, refers to the option name.
	 *
	 * @since 1.5.0 As 'option_' . $setting
	 * @since 3.0.0
	 *
	 * @param mixed $value Value of the option. If stored serialized, it will be
	 *                     unserialized prior to being returned.
	 */
	return apply_filters( 'option_' . $option, maybe_unserialize( $value ) );
}

/**
 * Retrieve site option value based on name of option.
 *
 * @since 2.8.0
 *
 * @see get_option()
 *
 * @param string $option Name of option to retrieve. Expected to not be SQL-escaped.
 * @param mixed $default Optional value to return if option doesn't exist. Default false.
 * @param bool $use_cache Whether to use cache. Multisite only. Default true.
 * @return mixed Value set for the option.
 */
function get_site_option( $option, $default = false, $use_cache = true ) {
	global $wpdb;

	/**
	 * Filter an existing site option before it is retrieved.
	 *
	 * The dynamic portion of the hook name, $option, refers to the option name.
	 *
	 * Passing a truthy value to the filter will effectively short-circuit retrieval,
	 * returning the passed value instead.
	 *
	 * @since 2.9.0 As 'pre_site_option_' . $key
	 * @since 3.0.0
	 *
	 * @param mixed $pre_option The default value to return if the option does not exist.
	 */
	$pre = apply_filters( 'pre_site_option_' . $option, false );

	if ( false !== $pre )
		return $pre;

	// prevent non-existent options from triggering multiple queries
	$notoptions_key = "{$wpdb->siteid}:notoptions";
	$notoptions = wp_cache_get( $notoptions_key, 'site-options' );

	if ( isset( $notoptions[$option] ) ) {

		/**
		 * Filter a specific default site option.
		 *
		 * The dynamic portion of the hook name, $option, refers to the option name.
		 *
		 * @since 3.4.0
		 *
		 * @param mixed $default The value to return if the site option does not exist
		 *                       in the database.
		 */
		return apply_filters( 'default_site_option_' . $option, $default );
	}

	if ( ! is_multisite() ) {

		/** This filter is documented in wp-includes/option.php */
		$default = apply_filters( 'default_site_option_' . $option, $default );
		$value = get_option($option, $default);
	} else {
		$cache_key = "{$wpdb->siteid}:$option";
		if ( $use_cache )
			$value = wp_cache_get($cache_key, 'site-options');

		if ( !isset($value) || (false === $value) ) {
			$row = $wpdb->get_row( $wpdb->prepare("SELECT meta_value FROM $wpdb->sitemeta WHERE meta_key = %s AND site_id = %d", $option, $wpdb->siteid ) );

			// Has to be get_row instead of get_var becuase of funkiness with 0, false, null values
			if ( is_object( $row ) ) {
				$value = $row->meta_value;
				$value = maybe_unserialize( $value );
				wp_cache_set( $cache_key, $value, 'site-options' );
			} else {
				$notoptions[$option] = true;
				wp_cache_set( $notoptions_key, $notoptions, 'site-options' );

				/** This filter is documented in wp-includes/option.php */
				$value = apply_filters( 'default_site_option_' . $option, $default );
			}
		}
	}

	/**
	 * Filter the value of an existing site option.
	 *
	 * The dynamic portion of the hook name, $option, refers to the option name.
	 *
	 * @since 2.9.0 As 'site_option_' . $key
	 * @since 3.0.0
	 *
	 * @param mixed $value Value of site option.
	 */
	return apply_filters( 'site_option_' . $option, $value );
}
