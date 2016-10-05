<?php
/**
 * Navigation Menu template functions
 *
 * @package WordPress
 * @subpackage Nav_Menus
 * @since 3.0.0
 */

add_filter( 'nav_menu_item_id', '_nav_menu_item_id_use_once', 10, 2 );
