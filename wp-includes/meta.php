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
