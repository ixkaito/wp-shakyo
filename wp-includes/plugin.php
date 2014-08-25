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
 * Hook a function or method to a specific filter action.
 *
 * WordPress offers filter hooks to allow plugins to modify
 * various types of internal data at runtime.
 *
 * A plugin can modify data by binding a callback to a filter hook. When the filter
 * is later applied, each bound callback is run in order of priority, and given
 * the opportunity to modify a value by returning a new value.
 *
 * The following example shows how a callback function is bound to a filter hook.
 * Note that $example is passed to the callback, (maybe) modified, then returned:
 *
 * <code>
 * function example_callback( $example ) {
 * 	// Maybe modify $example in some way
 * 	return $example;
 * }
 * add_filter( 'example_filter', 'example_callback' );
 * </code>
 *
 * Since WordPress 1.5.1, bound callback can take as many arguments as are
 * passed as parameters in the corresponding apply_filters() call. The $accepted_args
 * parameter allows for calling functions only when the number of args match.
 *
 * <strong>Note:</strong> the function will return true whether or not the callback
 * is valid. It is up to you to take care. This is done for optimization purpose,
 * so everything is as quick as possible.
 *
 * @since 0.71
 *
 * @global array $wp_filter      A multidimensional array of all hooks and the callbacks hooked to them.
 * @global array $merged_filters Tracks the tags that need to be merged for later. If the hook is added,
 *                               it doesn't need to run through that process.
 *
 * @param string   $tag             The name of the filter to hook the $function_to_add callback to.
 * @param callback $function_to_add The callback to be run when the filter is applied.
 * @param int      $priority        Optional. Used to specify the order in which the functions
 *                                  associated with a particular action are executed. Default 10.
 *                                  Lower numbers correspond with earlier execution,
 *                                  and functions with the same priority are executed
 *                                  in the order in which they were added to the action.
 * @param int      $accepted_args   Optional. The number of arguments the function accepts. Default 1.
 * @return boolean true
 */
function add_filter( $tag, $function_to_add, $priority = 10, $accepted_args = 1 ) {
	global $wp_filter, $merged_filters;

	$idx = _wp_filter_build_unique_id($tag, $function_to_add, $priority);
	$wp_filter[$tag][$priority][$idx] = array('function' => $function_to_add, 'accepted_args' => $accepted_args);
	unset( $merged_filters[ $tag ] );
	return true;
}

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

/**
 * Build Unique ID for storage and retrieval.
 *
 * The old way to serialize the callback caused issues and this function is the
 * solution. It works by checking for objects and creating an a new property in
 * the class to keep track of the object and new objects of the same class that
 * need to be added.
 *
 * It alse allows for the removal of actions and filters for objects after they
 * change class properties. It is possible to include the property $wp_filter_id
 * in your class and set it to "null" or a number to bypass the workaround.
 * However this will prevent you from adding new classes and any new classes
 * will overwrite the previous hook by the same class.
 *
 * Functions and static method callbacks are just returned as strings and
 * shouldn't have any speed penalty.
 *
 * @link http://trac.wordpress.org/ticket/3875
 *
 * @since 2.2.3
 * @access private
 *
 * @global array $wp_filter Storage for all of the filters and actions.
 *
 * @param string   $tag      Used in counting how many hooks were applied
 * @param callback $function Used for creating unique id
 * @param int|bool $priority Used in counting how many hooks were applied. If === false
 *                           and $function is an object reference, we return the unique
 *                           id only if it already has one, false otherwise.
 * @return string|bool Unique ID for usage as array key or false if $priority === false
 *                     and $function is an object reference, and it does not already have
 *                     a unique id.
 */
function _wp_filter_build_unique_id($tag, $funtion, $priority) {
	global $wp_filter;
	static $filter_id_count = 0;

	if ( is_string($function) )
		return $function;

	if ( is_object($function) ) {
		// Closures are currently implemented as objects
		$function = array( $function, '' );
	} else {
		$function = (array) $function;
	}

	if (is_object($function[0]) ) {
		// Object Class Calling
		if ( function_exists('spl_object_hash') ) {
			return spl_object_hash($function[0]) . $function[1];
		} else {
			$obj_idx = get_class($function[0]).$function[1];
			if ( !isset($function[0]->wp_filter_id) ) {
				if ( false === $priority )
					return false;
				$obj_idx .= isset($wp_filter[$tag][$priority]) ? count((array)$wp_filter[$tag][$priority]) : $filter_id_count;
				$function[0]->wp_filter_id = $filter_id_count;
				++$filter_id_count;
			} else {
				$obj_idx .= $function[0]->wp_filter_id;
			}

			return $obj_idx;
		}
	} else if ( is_string($function[0]) ) {
		// static Calling
		return $function[0] . '::' . $function[1];
	}
}
