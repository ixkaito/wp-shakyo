<?php
/**
 * WordPress Query API
 *
 * The query API attempts to get which part of WordPress the user is on. It
 * also provides functionality for getting URL query information.
 *
 * @link http://codex.wordpress.org/The_Loop More information on The Loop.
 *
 * @package WordPress
 * @subpackage Query
 */

/*
 * WP_Query
 */

/**
 * The WordPress Query class.
 *
 * @link http://codex.wordpress.org/Function_Reference/WP_Query Codex page.
 *
 * @since 1.5.0
 */
class WP_Query {

	/**
	 * Query vars set by the user
	 *
	 * @since 1.5.0
	 * @access public
	 * @var array
	 */
	public $query;

	/**
	 * Query vars, after parsing
	 *
	 * @since 1.5.0
	 * @access public
	 * @var array
	 */
	public $query_vars = array();

	/**
	 * Taxonomy query, a passed to get_tax_sql()
	 *
	 * @since 3.1.0
	 * @access public
	 * @var object WP_Tax_Query
	 */
	public $tax_query;

	/**
	 * Metadata query container
	 *
	 * @since 3.2.0
	 * @access public
	 * @var object WP_Meta_Query
	 */
	public $meta_query = false;

	/**
	 * Date query container
	 *
	 * @since 3.7.0
	 * @access public
	 * @var object WP_Date_Query
	 */
	public $date_query = false;

}
