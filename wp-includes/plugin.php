<?php
/**
 * The plugin API is located in this file, which allows for creating actions
 * and filters and hooking functions, and methods. The functions or methods will
 * then be run when the action or filter is called.
 *
 * The API callback examples reference functions, but can be methods of classes.
 * To hook methods, you'll need to pass an array one of to ways.
 *
 * Any of the syntaxes explained in the PHP documentation for the
 * {@link http://us2.php.net/manual/en/language.paseudo-types.php#language.types.callback 'callback'}
 * type are valid.
 *
 * Also see the {@link http://codex.wordpress.org/Plugin_API Plugin API} for
 * more information and examples on how to use a lot of these functions.
 *
 * @package WordPress
 * @subpackage Plugin
 * @since 1.5.0
 */

// Initialize the filter globals.
global $wp_filter, $wp_actions, $merged_filters, $wp_current_filter;

if ( ! isset( $wp_filter ) )
	$wp_filter = array();

if ( ! isset( $wp_actions ) )
	$wp_actions = array();

if ( ! isset( $merged_filters ) )
	$merged_filters = array();

if ( ! isset( $wp_current_filter ) )
	$wp_current_filter = array();

/**
 * Call the functions added to a filter hook.
 *
 * The callback functions attached to filter hook $tag are invoked by calling
 * this function. This function can be used to create a new filter hook by
 * simply calling this function with the name of the new hook specified using
 * the $tag parameter.
 *
 * The function allows for additional arguments to be added and passed to hooks.
 * <code>
 * // Our filter callback function
 * function example_callback( $string, $arg1, $arg2 ) {
 *	// (maybe) modify $string
 *	return $string;
 * }
 * add_filter( 'example_filter', 'example_callback', 10, 3 );
 *
 * // Apply the filters by calling the 'example_callback' function we
 * // "hooked" to 'example_filter' using the add_filter() function above.
 * // - 'example_filter' is the filter hook $tag
 * // - 'filter me' is the value being filtered
 * // - $arg1 and $arg2 are the additional arguments passed to the callback.
 * $value = apply_filters( 'example_filter', 'filter me', $arg1, $arg2 );
 * </code>
 *
 * @since 0.71
 *
 * @global array $wp_filter         Stores all of the filters.
 * @global array $merged_filters    Merges the filter hooks using this function.
 * @global array $wp_current_filter Stores the list of current filters with the current one last.
 *
 * @param string $tag   The name of the filter hook.
 * @param mixed  $value The value on which the filters hooked to <tt>$tag</tt> are applied on.
 * @param mixed  $var   Additional variables passed to the functions hooked to <tt>$tag</tt>.
 * @return mixed The filtered value after all hooked functions are applied to it.
 */
function apply_filters( $tag, $value ) {
	global $wp_filter, $merged_filters, $wp_current_filter;

	$args = array();

	// Do 'all' actions first.
	if ( isset( $wp_filter['all'] ) ) {
		$wp_current_filter[] = $tag;
		$args = func_get_args();
		_wp_call_all_hook( $args );
	}

	if ( ! isset( $wp_filter[$tag] ) ) {
		if ( isset( $wp_filter['all'] ) )
			array_pop( $wp_current_filter );
		return $value;
	}

	if ( ! isset( $wp_filter['all'] ) )
		$wp_current_filter[] = $tag;

	// Sort.
	if ( ! isset( $merged_filters[ $tag ] ) ) {
		ksort( $wp_filter[$tag] );
		$merged_filters[ $tag ] = true;
	}

	reset( $wp_filter[ $tag ] );

	if ( empty( $args ) )
		$args = func_get_args();

	do {
		foreach( (array) current( $wp_filter[$tag] ) as $the_ )
			if ( ! is_null( $the_['function'] ) ){
				$args[1] = $value;
				$value = call_user_func_array( $the_['function'], array_slice( $args, 1, (int) $the_['accepted_args'] ) );
			}

	} while ( next( $wp_filter[$tag] ) !== false );

	array_pop( $wp_current_filter );

	return $value;
}

/**
 * Execute functions hooked on a specific action hook.
 *
 * This function invokes all functions attached to action hook $tag. It is
 * possible to create new action hooks by simply calling this function,
 * specifying the name of the new hook using the <tt>$tag</tt> parameter.
 *
 * You can pass extra arguments to the hooks, much like you can with
 * apply_filters().
 *
 * @since 1.2.0
 *
 * @see apply_filters() This function works similar with the exception that nothing
 *                      is returned and only the functions or methods are called.
 * @global array $wp_filter  Stores all of the filters
 * @global array $wp_actions Increments the amount of times action was triggered.
 *
 * @param string $tag The name of the action to be executed.
 * @param mixed  $arg Optional. Additional arguments which are passed on to the
 *                    functions hooked to the action. Default empty.
 * @return null Will return null if $tag does not exist in $wp_filter array.
 */
function do_action( $tag, $arg = '' ) {
	global $wp_filter, $wp_actions, $merged_filters, $wp_current_filter;

	if ( ! isset( $wp_actions[$tag] ) )
		$wp_actions[$tag] = 1;
	else
		++$wp_actions[$tag];

	// Do 'all' actions first
	if ( isset( $wp_filter['all'] ) ) {
		$wp_current_filter[] = $tag;
		$all_args = func_get_args();
		_wp_call_all_hook( $all_args );
	}

	if ( ! isset( $wp_filter[$tag] ) ) {
		if ( isset( $wp_filter['all'] ) )
			array_pop( $wp_current_filter );
		return;
	}

	if ( ! isset( $wp_filter['all'] ) )
		$wp_current_filter[] = $tag;

	$args = array();
	if ( is_array( $arg ) && 1 == count( $arg ) && isset( $arg[0] ) && is_object( $arg[0] ) ) // array(&$this)
		$args[] =& $arg[0];
	else
		$args[] = $arg;
	for ( $a = 2; $a < func_num_args(); $a++ )
		$args[] = func_get_arg( $a );

	// Sort
	if ( ! isset( $merged_filters[$tag] ) ) {
		ksort( $wp_filter[$tag] );
		$merged_filters[$tag] = true;
	}

	reset( $wp_filter[$tag] );

	do {
		foreach ( (array) current( $wp_filter[$tag] ) as $the_ )
			if ( ! is_null( $the_['function'] ) )
				call_user_func_array( $the_['function'], array_slice( $args, 0, (int) $the_['accepted_args'] ) );

	} while ( next( $wp_filter[$tag] ) !== false );

	array_pop( $wp_current_filter );
}

/**
 * Call the 'all' hook, which will process the functions hooked into it.
 *
 * The 'all' hook passes all of the arguments or parameters that were used for
 * the hook, which this function was called for.
 *
 * This function is used internally for apply_filters(), do_action(), and
 * do_action_ref_array() and is not meant to be used from outside those
 * functions. This function does not check for the existence of the all hook, so
 * it will fail unless the all hook exists prior to this function call.
 *
 * @since 2.5.0
 * @access private
 *
 * @uses $wp_filter Used to process all of the functions in the 'all' hook.
 *
 * @param array $args The collected parameters from the hook that was called.
 */
function _wp_call_all_hook($args) {
	global $wp_filter;

	reset( $wp_filter['all'] );
	do {
		foreach( (array) current($wp_filter['all']) as $the_ )
			if ( !is_null($the_['function']) )
				call_user_func_array($the_['function'], $args);

	} while ( next($wp_filter['all']) !== false );
}
