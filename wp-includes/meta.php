<?php
/**
 * Metadata API
 *
 * Functions for retrieving and manipulating metadata of various WordPress object types. Metadata
 * for an object is a represented by a simple key-value pair. Objects may contain multiple
 * metadata entries that share the same key and differ only in their value.
 *
 * @package WordPress
 * @subpackage Meta
 * @since 2.9.0
 */

















































































































/**
 * Update metadata for the specified object. If no value already exists for the specified object
 * ID and metadata key, the metadata will be added.
 *
 * @since 2.9.0
 * @uses $wpdb WordPress database object for queries.
 *
 * @param string $meta_type Type of object metadata is for (e.g., comment, post, or user)
 * @param int $object_id ID of the object metadata is for
 * @param string $meta_key Metadata key
 * @param mixed $meta_value Metadata value. Must be serializable if non-scalar.
 * @param mixed $prev_value Optional. If specified, only update existing metadata entries with
 * 		the specified value. Otherwise, update all entries.
 * @return int|bool Meta ID if the key didn't exist, true on successful update, false on failure.
 */
function update_metadata($meta_type, $object_id, $meta_key, $meta_value, $prev_value = '') {
	global $wpdb;

	if ( ! $meta_type || ! $meta_key || ! is_numeric( $object_id ) ) {
		return false;
	}

	$object_id = absint( $object_id );
	if ( ! $object_id ) {
		return false;
	}

	$table = _get_meta_table( $meta_type );
	if ( ! $table ) {
		return false;
	}

	$column = sanitize_key($meta_type . '_id');
	$id_column = 'user' == $meta_type ? 'umeta_id' : 'meta_id';

	// expected_slashed ($meta_key)
	$meta_key = wp_unslash($meta_key);
	$passed_value = $meta_value;
	$meta_value = wp_unslash($meta_value);
	$meta_value = sanitize_meta( $meta_key, $meta_value, $meta_type );

	/**
	 * Filter whether to update metadata of a specific type.
	 *
	 * The dynamic portion of the hook, $meta_type, refers to the meta
	 * object type (comment, post, or user). Returning a non-null value
	 * will effectively short-circuit the function.
	 *
	 * @since 3.1.0
	 *
	 * @param null|bool $check      Whether to allow updating metadata for the given type.
	 * @param int       $object_id  Object ID.
	 * @param string    $meta_key   Meta key.
	 * @param mixed     $meta_value Meta value. Must be serializable if non-scalar.
	 * @param mixed     $prev_value Optional. If specified, only update existing
	 *                              metadata entries with the specified value.
	 *                              Otherwise, update all entries.
	 */
	$check = apply_filters( "update_{$meta_type}_metadata", null, $object_id, $meta_key, $meta_value, $prev_value );
	if ( null !== $check )
		return (bool) $check;

	// Compare existing value to new value if no prev value given and the key exists only once.
	if ( empty($prev_value) ) {
		$old_value = get_metadata($meta_type, $object_id, $meta_key);
		if ( count($old_value) == 1 ) {
			if ( $old_value[0] === $meta_value )
				return false;
		}
	}

	if ( ! $meta_id = $wpdb->get_var( $wpdb->prepare( "SELECT $id_column FROM $table WHERE meta_key = %s AND $column = %d", $meta_key, $object_id ) ) )
		return add_metadata($meta_type, $object_id, $meta_key, $passed_value);

	$_meta_value = $meta_value;
	$meta_value = maybe_serialize( $meta_value );

	$data  = compact( 'meta_value' );
	$where = array( $column => $object_id, 'meta_key' => $meta_key );

	if ( !empty( $prev_value ) ) {
		$prev_value = maybe_serialize($prev_value);
		$where['meta_value'] = $prev_value;
	}

	/**
	 * Fires immediately before updating metadata of a specific type.
	 *
	 * The dynamic portion of the hook, $meta_type, refers to the meta
	 * object type (comment, post, or user).
	 *
	 * @since 2.9.0
	 *
	 * @param int    $meta_id    ID of the metadata entry to update.
	 * @param int    $object_id  Object ID.
	 * @param string $meta_key   Meta key.
	 * @param mixed  $meta_value Meta value.
	 */
	do_action( "update_{$meta_type}_meta", $meta_id, $object_id, $meta_key, $_meta_value );

	if ( 'post' == $meta_type )
		/**
		 * Fires immediately before updating a post's metadata.
		 *
		 * @since 2.9.0
		 *
		 * @param int    $meta_id    ID of metadata entry to update.
		 * @param int    $object_id  Object ID.
		 * @param string $meta_key   Meta key.
		 * @param mixed  $meta_value Meta value.
		 */
		do_action( 'update_postmeta', $meta_id, $object_id, $meta_key, $meta_value );

	$result = $wpdb->update( $table, $data, $where );
	if ( ! $result )
		return false;

	wp_cache_delete($object_id, $meta_type . '_meta');

	/**
	 * Fires immediately after updating metadata of a specific type.
	 *
	 * The dynamic portion of the hook, $meta_type, refers to the meta
	 * object type (comment, post, or user).
	 *
	 * @since 2.9.0
	 *
	 * @param int    $meta_id    ID of updated metadata entry.
	 * @param int    $object_id  Object ID.
	 * @param string $meta_key   Meta key.
	 * @param mixed  $meta_value Meta value.
	 */
	do_action( "updated_{$meta_type}_meta", $meta_id, $object_id, $meta_key, $_meta_value );

	if ( 'post' == $meta_type ) {
		/**
		 * Fires immediately after updating a post's metadata.
		 *
		 * @since 2.9.0
		 *
		 * @param int    $meta_id    ID of updated metadata entry.
		 * @param int    $object_id  Object ID.
		 * @param string $meta_key   Meta key.
		 * @param mixed  $meta_value Meta value.
		 */
		do_action( 'updated_postmeta', $meta_id, $object_id, $meta_key, $meta_value );
	}

	return true;
}























































































































































/**
 * Retrieve metadata for the specified object.
 *
 * @since 2.9.0
 *
 * @param string $meta_type Type of object metadata is for (e.g., comment, post, or user)
 * @param int $object_id ID of the object metadata is for
 * @param string $meta_key Optional. Metadata key. If not specified, retrieve all metadata for
 * 		the specified object.
 * @param bool $single Optional, default is false. If true, return only the first value of the
 * 		specified meta_key. This parameter has no effect if meta_key is not specified.
 * @return string|array Single metadata value, or array of values
 */
function get_metadata($meta_type, $object_id, $meta_key = '', $single = false) {
	if ( ! $meta_type || ! is_numeric( $object_id ) ) {
		return false;
	}

	$object_id = absint( $object_id );
	if ( ! $object_id ) {
		return false;
	}

	/**
	 * Filter whether to retrieve metadata of a specific type.
	 *
	 * The dynamic portion of the hook, $meta_type, refers to the meta
	 * object type (comment, post, or user). Returning a non-null value
	 * will effectively short-circuit the function.
	 *
	 * @since 3.1.0
	 *
	 * @param null|array|string $value     The value get_metadata() should
	 *                                     return - a single metadata value,
	 *                                     or an array of values.
	 * @param int               $object_id Object ID.
	 * @param string            $meta_key  Meta key.
	 * @param string|array      $single    Meta value, or an array of values.
	 */
	$check = apply_filters( "get_{$meta_type}_metadata", null, $object_id, $meta_key, $single );
	if ( null !== $check ) {
		if ( $single && is_array( $check ) )
			return $check[0];
		else
			return $check;
	}

	$meta_cache = wp_cache_get($object_id, $meta_type . '_meta');

	if ( !$meta_cache ) {
		$meta_cache = update_meta_cache( $meta_type, array( $object_id ) );
		$meta_cache = $meta_cache[$object_id];
	}

	if ( !$meta_key )
		return $meta_cache;

	if ( isset($meta_cache[$meta_key]) ) {
		if ( $single )
			return maybe_unserialize( $meta_cache[$meta_key][0] );
		else
			return array_map('maybe_unserialize', $meta_cache[$meta_key]);
	}

	if ($single)
		return '';
	else
		return array();
}




































































































































































































































































/**
 * Update the metadata cache for the specified objects.
 *
 * @since 2.9.0
 * @uses $wpdb WordPress database object for queries.
 *
 * @param string $meta_type Type of object metadata is for (e.g., comment, post, or user)
 * @param int|array $object_ids array or comma delimited list of object IDs to update cache for
 * @return mixed Metadata cache for the specified objects, or false on failure.
 */
function update_meta_cache($meta_type, $object_ids) {
	global $wpdb;

	if ( ! $meta_type || ! $object_ids ) {
		return false;
	}

	$table = _get_meta_table( $meta_type );
	if ( ! $table ) {
		return false;
	}

	$column = sanitize_key($meta_type . '_id');

	if ( !is_array($object_ids) ) {
		$object_ids = preg_replace('|[^0-9,]|', '', $object_ids);
		$object_ids = explode(',', $object_ids);
	}

	$object_ids = array_map('intval', $object_ids);

	$cache_key = $meta_type . '_meta';
	$ids = array();
	$cache = array();
	foreach ( $object_ids as $id ) {
		$cached_object = wp_cache_get( $id, $cache_key );
		if ( false === $cached_object )
			$ids[] = $id;
		else
			$cache[$id] = $cached_object;
	}

	if ( empty( $ids ) )
		return $cache;

	// Get meta info
	$id_list = join( ',', $ids );
	$id_column = 'user' == $meta_type ? 'umeta_id' : 'meta_id';
	$meta_list = $wpdb->get_results( "SELECT $column, meta_key, meta_value FROM $table WHERE $column IN ($id_list) ORDER BY $id_column ASC", ARRAY_A );

	if ( !empty($meta_list) ) {
		foreach ( $meta_list as $metarow) {
			$mpid = intval($metarow[$column]);
			$mkey = $metarow['meta_key'];
			$mval = $metarow['meta_value'];

			// Force subkeys to be array type:
			if ( !isset($cache[$mpid]) || !is_array($cache[$mpid]) )
				$cache[$mpid] = array();
			if ( !isset($cache[$mpid][$mkey]) || !is_array($cache[$mpid][$mkey]) )
				$cache[$mpid][$mkey] = array();

			// Add a value to the current pid/key:
			$cache[$mpid][$mkey][] = $mval;
		}
	}

	foreach ( $ids as $id ) {
		if ( ! isset($cache[$id]) )
			$cache[$id] = array();
		wp_cache_add( $id, $cache[$id], $cache_key );
	}

	return $cache;
}







































































































































































































































































































/**
 * Retrieve the name of the metadata table for the specified object type.
 *
 * @since 2.9.0
 * @uses $wpdb WordPress database object for queries.
 *
 * @param string $type Type of object to get metadata table for (e.g., comment, post, or user)
 * @return mixed Metadata table name, or false if no metadata table exists
 */
function _get_meta_table($type) {
	global $wpdb;

	$table_name = $type . 'meta';

	if ( empty($wpdb->$table_name) )
		return false;

	return $wpdb->$table_name;
}
























/**
 * Sanitize meta value.
 *
 * @since 3.1.3
 *
 * @param string $meta_key Meta key
 * @param mixed $meta_value Meta value to sanitize
 * @param string $meta_type Type of meta
 * @return mixed Sanitized $meta_value
 */
function sanitize_meta( $meta_key, $meta_value, $meta_type ) {

	/**
	 * Filter the sanitization of a specific meta key of a specific meta type.
	 *
	 * The dynamic portions of the hook name, $meta_type and $meta_key, refer to the
	 * metadata object type (comment, post, or user) and the meta key value,
	 * respectively.
	 *
	 * @since 3.3.0
	 *
	 * @param mixed  $meta_value Meta value to sanitize.
	 * @param string $meta_key   Meta key.
	 * @param string $meta_type  Meta type.
	 */
	return apply_filters( "sanitize_{$meta_type}_meta_{$meta_key}", $meta_value, $meta_key, $meta_type );
}
