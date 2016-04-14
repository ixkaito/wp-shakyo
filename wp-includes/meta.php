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
 * Container class for a multiple metadata query
 *
 * @since 3.2.0
 */
class WP_Meta_Query {
	/**
	* List of metadata queries. A single query is an associative array:
	* - 'key' string The meta key
	* - 'value' string|array The meta value
	* - 'compare' (optional) string How to compare the key to the value.
	*              Possible values: '=', '!=', '>', '>=', '<', '<=', 'LIKE', 'NOT LIKE', 'IN', 'NOT IN',
	*              'BETWEEN', 'NOT BETWEEN', 'REGEXP', 'NOT REGEXP', 'RLIKE'.
	*              Default: '='
	* - 'type' string (optional) The type of the value.
	*              Possible values: 'NUMERIC', 'BINARY', 'CHAR', 'DATE', 'DATETIME', 'DECIMAL', 'SIGNED', 'TIME', 'UNSIGNED'.
	*              Default: 'CHAR'
	*
	* @since 3.2.0
	* @access public
	* @var array
	*/
	public $queries = array();

	/**
	 * The relation between the queries. Can be one of 'AND' or 'OR'.
	 *
	 * @since 3.2.0
	 * @access public
	 * @var string
	 */
	public $relation;

	/**
	 * Constructor
	 *
	 * @param array $meta_query (optional) A meta query
	 */
	public function __construct( $meta_query = false ) {
		if ( !$meta_query )
			return;

		if ( isset( $meta_query['relation'] ) && strtoupper( $meta_query['relation'] ) == 'OR' ) {
			$this->relation = 'OR';
		} else {
			$this->relation = 'AND';
		}

		$this->queries = array();

		foreach ( $meta_query as $key => $query ) {
			if ( ! is_array( $query ) )
				continue;

			$this->queries[] = $query;
		}
	}

	/**
	 * Constructs a meta query based on 'meta_*' query vars
	 *
	 * @since 3.2.0
	 * @access public
	 *
	 * @param array $qv The query variables
	 */
	public function parse_query_vars( $qv ) {
		$meta_query = array();

		// Simple query needs to be first for orderby=meta_value to work correctly
		foreach ( array( 'key', 'compare', 'type' ) as $key ) {
			if ( !empty( $qv[ "meta_$key" ] ) )
				$meta_query[0][ $key ] = $qv[ "meta_$key" ];
		}

		// WP_Query sets 'meta_value' = '' by default
		if ( isset( $qv[ 'meta_value' ] ) && '' !== $qv[ 'meta_value' ] && ( ! is_array( $qv[ 'meta_value' ] ) || $qv[ 'meta_value' ] ) )
			$meta_query[0]['value'] = $qv[ 'meta_value' ];

		if ( !empty( $qv['meta_query'] ) && is_array( $qv['meta_query'] ) ) {
			$meta_query = array_merge( $meta_query, $qv['meta_query'] );
		}

		$this->__construct( $meta_query );
	}
}
