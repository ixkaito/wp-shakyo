<?php
/**
 * Navigation Menu template functions
 *
 * @package WordPress
 * @subpackage Nav_Menus
 * @since 3.0.0
 */

/**
 * Displays a navigation menu.
 *
 * @since 3.0.0
 *
 * @param array $args {
 *     Optional. Array of nav menu arguments.
 *
 *     @type string        $menu            Desired menu. Accepts (matching in order) id, slug, name. Default empty.
 *     @type string        $menu_class      CSS class to use for the ul element which forms the menu. Default 'menu'.
 *     @type string        $menu_id         The ID that is applied to the ul element which forms the menu.
 *                                          Default is the menu slug, incremented.
 *     @type string        $container       Whether to wrap the ul, and what to wrap it with. Default 'div'.
 *     @type string        $container_class Class that is applied to the container. Default 'menu-{menu slug}-container'.
 *     @type string        $container_id    The ID that is applied to the container. Default empty.
 *     @type callback|bool $fallback_cb     If the menu doesn't exists, a callback function will fire.
 *                                          Default is 'wp_page_menu'. Set to false for no fallback.
 *     @type string        $before          Text before the link text. Default empty.
 *     @type string        $after           Text after the link text. Default empty.
 *     @type string        $link_before     Text before the link. Default empty.
 *     @type string        $link_after      Text after the link. Default empty.
 *     @type bool          $echo            Whether to echo the menu or return it. Default true.
 *     @type int           $depth           How many levels of the hierarchy are to be included. 0 means all. Default 0.
 *     @type object        $walker          Instance of a custom walker class. Default empty.
 *     @type string        $theme_location  Theme location to be used. Must be registered with register_nav_menu()
 *                                          in order to be selectable by the user.
 *     @type string        $items_wrap      How the list items should be wrapped. Default is a ul with an id and class.
 *                                          Uses printf() format with numbered placeholders.
 * }
 * @return mixed Menu output if $echo is false, false if there are no items or no menu was found.
 */
function wp_nav_menu( $args = array() ) {
	static $menu_id_slugs = array();

	$defaults = array( 'menu' => '', 'container' => 'div', 'container_class' => '', 'container_id' => '', 'menu_class' => 'menu', 'menu_id' => '',
	'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth' => 0, 'walker' => '', 'theme_location' => '' );

	$args = wp_parse_args( $args, $defaults );
	/**
	 * Filter the arguments used to display a navigation menu.
	 *
	 * @since 3.0.0
	 *
	 * @see wp_nav_menu()
	 *
	 * @param array $args Array of wp_nav_menu() arguments.
	 */
	$args = apply_filters( 'wp_nav_menu_args', $args );
	$args = (object) $args;

	/**
	 * Filter whether to short-circuit the wp_nav_menu() output.
	 *
	 * Returning a non-null value to the filter will short-circuit
	 * wp_nav_menu(), echoing that value if $args->echo is true,
	 * returning that value otherwise.
	 *
	 * @since 3.9.0
	 *
	 * @see wp_nav_menu()
	 *
	 * @param string|null $output Nav menu output to short-circuit with. Default null.
	 * @param object      $args   An object containing wp_nav_menu() arguments.
	 */
	$nav_menu = apply_filters( 'pre_wp_nav_menu', null, $args );

	if ( null !== $nav_menu ) {
		if ( $args->echo ) {
			echo $nav_menu;
			return;
		}

		return $nav_menu;
	}

	// Get the nav menu based on the requested menu
	$menu = wp_get_nav_menu_object( $args->menu );

	// Get the nav menu based on the theme_location
	if ( ! $menu && $args->theme_location && ( $locations = get_nav_menu_locations() ) && isset( $locations[ $args->theme_location ] ) )
		$menu = wp_get_nav_menu_object( $locations[ $args->theme_location ] );

	// get the first menu that has items if we still can't find a menu
	if ( ! $menu && !$args->theme_location ) {
		$menus = wp_get_nav_menus( array( 'orderby' => 'name' ) );
		foreach ( $menus as $menu_maybe ) {
			if ( $menu_items = wp_get_nav_menu_items( $menu_maybe->term_id, array( 'update_post_term_cache' => false ) ) ) {
				$menu = $menu_maybe;
				break;
			}
		}
	}

	// If the menu exists, get its items.
	if ( $menu && ! is_wp_error($menu) && !isset($menu_items) )
		$menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'update_post_term_cache' => false ) );

	/*
	 * If no menu was found:
	 *  - Fall back (if one was specified), or bail.
	 *
	 * If no menu items were found:
	 *  - Fall back, but only if no theme location was specified.
	 *  - Otherwise, bail.
	 */
	if ( ( !$menu || is_wp_error($menu) || ( isset($menu_items) && empty($menu_items) && !$args->theme_location ) )
		&& $args->fallback_cb && is_callable( $args->fallback_cb ) )
			return call_user_func( $args->fallback_cb, (array) $args );

	if ( ! $menu || is_wp_error( $menu ) )
		return false;

	$nav_menu = $items = '';

	$show_container = false;
	if ( $args->container ) {
		/**
		 * Filter the list of HTML tags that are valid for use as menu containers.
		 *
		 * @since 3.0.0
		 *
		 * @param array $tags The acceptable HTML tags for use as menu containers.
		 *                    Default is array containing 'div' and 'nav'.
		 */
		$allowed_tags = apply_filters( 'wp_nav_menu_container_allowedtags', array( 'div', 'nav' ) );
		if ( in_array( $args->container, $allowed_tags ) ) {
			$show_container = true;
			$class = $args->container_class ? ' class="' . esc_attr( $args->container_class ) . '"' : ' class="menu-'. $menu->slug .'-container"';
			$id = $args->container_id ? ' id="' . esc_attr( $args->container_id ) . '"' : '';
			$nav_menu .= '<'. $args->container . $id . $class . '>';
		}
	}

	// Set up the $menu_item variables
	_wp_menu_item_classes_by_context( $menu_items );

	$sorted_menu_items = $menu_items_with_children = array();
	foreach ( (array) $menu_items as $menu_item ) {
		$sorted_menu_items[ $menu_item->menu_order ] = $menu_item;
		if ( $menu_item->menu_item_parent )
			$menu_items_with_children[ $menu_item->menu_item_parent ] = true;
	}

	// Add the menu-item-has-children class where applicable
	if ( $menu_items_with_children ) {
		foreach ( $sorted_menu_items as &$menu_item ) {
			if ( isset( $menu_items_with_children[ $menu_item->ID ] ) )
				$menu_item->classes[] = 'menu-item-has-children';
		}
	}

	unset( $menu_items, $menu_item );

	/**
	 * Filter the sorted list of menu item objects before generating the menu's HTML.
	 *
	 * @since 3.1.0
	 *
	 * @param array  $sorted_menu_items The menu items, sorted by each menu item's menu order.
	 * @param object $args              An object containing wp_nav_menu() arguments.
	 */
	$sorted_menu_items = apply_filters( 'wp_nav_menu_objects', $sorted_menu_items, $args );

	$items .= walk_nav_menu_tree( $sorted_menu_items, $args->depth, $args );
	unset($sorted_menu_items);

	// Attributes
	if ( ! empty( $args->menu_id ) ) {
		$wrap_id = $args->menu_id;
	} else {
		$wrap_id = 'menu-' . $menu->slug;
		while ( in_array( $wrap_id, $menu_id_slugs ) ) {
			if ( preg_match( '#-(\d+)$#', $wrap_id, $matches ) )
				$wrap_id = preg_replace('#-(\d+)$#', '-' . ++$matches[1], $wrap_id );
			else
				$wrap_id = $wrap_id . '-1';
		}
	}
	$menu_id_slugs[] = $wrap_id;

	$wrap_class = $args->menu_class ? $args->menu_class : '';

	/**
	 * Filter the HTML list content for navigation menus.
	 *
	 * @since 3.0.0
	 *
	 * @see wp_nav_menu()
	 *
	 * @param string $items The HTML list content for the menu items.
	 * @param object $args  An object containing wp_nav_menu() arguments.
	 */
	$items = apply_filters( 'wp_nav_menu_items', $items, $args );
	/**
	 * Filter the HTML list content for a specific navigation menu.
	 *
	 * @since 3.0.0
	 *
	 * @see wp_nav_menu()
	 *
	 * @param string $items The HTML list content for the menu items.
	 * @param object $args  An object containing wp_nav_menu() arguments.
	 */
	$items = apply_filters( "wp_nav_menu_{$menu->slug}_items", $items, $args );

	// Don't print any markup if there are no items at this point.
	if ( empty( $items ) )
		return false;

	$nav_menu .= sprintf( $args->items_wrap, esc_attr( $wrap_id ), esc_attr( $wrap_class ), $items );
	unset( $items );

	if ( $show_container )
		$nav_menu .= '</' . $args->container . '>';

	/**
	 * Filter the HTML content for navigation menus.
	 *
	 * @since 3.0.0
	 *
	 * @see wp_nav_menu()
	 *
	 * @param string $nav_menu The HTML content for the navigation menu.
	 * @param object $args     An object containing wp_nav_menu() arguments.
	 */
	$nav_menu = apply_filters( 'wp_nav_menu', $nav_menu, $args );

	if ( $args->echo )
		echo $nav_menu;
	else
		return $nav_menu;
}

add_filter( 'nav_menu_item_id', '_nav_menu_item_id_use_once', 10, 2 );
