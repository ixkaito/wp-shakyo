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
 * Loads and caches all autoloaded options, if available or all options.
 *
 * @since 2.2.0
 *
 * @return array List of all options.
 */
function wp_load_alloptions() {
	global $wpdb;

	if ( !defined( 'WP_INSTALLING' ) || !is_multisite() )
		$alloptions = wp_cache_get( 'alloptions', 'options' );
	else
		$alloptions = false;

	if ( !$alloptions ) {
		$suppress = $wpdb->suppress_errors();
		if ( !$alloptions_db = $wpdb->get_results( "SELECT option_name, option_value FROM $wpdb->options WHERE autoload = 'yes'" ) )
			$alloptions_db = $wpdb->get_results( "SELECT option_name, option_value FROM $wpdb->options" );
		$wpdb->suppress_errors($suppress);
		$alloptions = array();
		foreach ( (array) $alloptions_db as $o ) {
			$alloptions[$o->option_name] = $o->option_value;
		}
		if ( !defined( 'WP_INSTALLING' ) || !is_multisite() )
			wp_cache_add( 'alloptions', $alloptions, 'options' );
	}

	return $alloptions;
}

/**
 * Update the value of an option that was already added.
 *
 * You do not need to serialize values. If the value needs to be serialized, then
 * it will be serialized before it is inserted into the database. Remember,
 * resources can not be serialized or added as an option.
 *
 * If the option does not exist, then the option will be added with the option
 * value, but you will not be able to set whether it is autoloaded. If you want
 * to set whether an option is autoloaded, then you need to use the add_option().
 *
 * @since 1.0.0
 *
 * @param string $option Option name. Expected to not be SQL-escaped.
 * @param mixed $value Option value. Must be serializable if non-scalar. Expected to not be SQL-escaped.
 * @return bool False if value was not updated and true if value was updated.
 */
function update_option( $option, $value ) {
	global $wpdb;

	$option = trim($option);
	if ( empty($option) )
		return false;

	wp_protect_special_option( $option );

	if ( is_object( $value ) )
		$value = clone $value;

	$value = sanitize_option( $option, $value );
	$old_value = get_option( $option );

	/**
	 * Filter a specific option before its value is (maybe) serialized and updated.
	 *
	 * The dynamic portion of the hook name, $option, refers to the option name.
	 *
	 * @since 2.6.0
	 *
	 * @param mixed $value     The new, unserialized option value.
	 * @param mixed $old_value The old option value.
	 */
	$value = apply_filters( 'pre_update_option_' . $option, $value, $old_value );

	/**
	 * Filter an option before its value is (maybe) serialized and updated.
	 *
	 * @since 3.9.0
	 *
	 * @param mixed  $value     The new, unserialized option value.
	 * @param string $option    Name of the option.
	 * @param mixed  $old_value The old option value.
	 */
	$value = apply_filters( 'pre_update_option', $value, $option, $old_value );

	// If the new and old values are the same, no need to update.
	if ( $value === $old_value )
		return false;

	if ( false === $old_value )
		return add_option( $option, $value );

	$serialized_value = maybe_serialize( $value );

	/**
	 * Fires immediately before an option value is updated.
	 *
	 * @since 2.9.0
	 *
	 * @param string $option    Name of the option to update.
	 * @param mixed  $old_value The old option value.
	 * @param mixed  $value     The new option value.
	 */
	do_action( 'update_option', $option, $old_value, $value );

	$result = $wpdb->update( $wpdb->options, array( 'option_value' => $serialized_value ), array( 'option_name' => $option ) );
	if ( ! $result )
		return false;

	$notoptions = wp_cache_get( 'notoptions', 'options' );
	if ( is_array( $notoptions ) && isset( $notoptions[$option] ) ) {
		unset( $notoptions[$option] );
		wp_cache_set( 'notoptions', $notoptions, 'options' );
	}

	if ( ! defined( 'WP_INSTALLING' ) ) {
		$alloptions = wp_load_alloptions();
		if ( isset( $alloptions[$option] ) ) {
			$alloptions[ $option ] = $serialized_value;
			wp_cache_set( 'alloptions', $alloptions, 'options' );
		} else {
			wp_cache_set( $option, $serialized_value, 'options' );
		}
	}

	/**
	 * Fires after the value of a specific option has been successfully updated.
	 *
	 * The dynamic portion of the hook name, $option, refers to the option name.
	 *
	 * @since 2.0.1
	 *
	 * @param mixed $old_value The old option value.
	 * @param mixed $value     The new option value.
	 */
	do_action( "update_option_{$option}", $old_value, $value );

	/**
	 * Fires after the value of an option has been successfully updated.
	 *
	 * @since 2.9.0
	 *
	 * @param string $option    Name of the updated option.
	 * @param mixed  $old_value The old option value.
	 * @param mixed  $value     The new option value.
	 */
	do_action( 'updated_option', $option, $old_value, $value );
	return true;
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
