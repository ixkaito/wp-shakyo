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
 *                                          Default is 'wp_page_menu'. set to false for no fallback.
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

add_filter( 'nav_menu_item_id', '_nav_menu_item_id_use_once', 10, 2 );
