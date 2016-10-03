<?php
/**
 * Author Template functions for use in themes.
 *
 * These functions must be used within the WordPress Loop.
 *
 * @link http://codex.wordpress.org/Author_Templates
 *
 * @package WordPress
 * @subpackage Template
 */

add_action('transition_post_status', '__clear_multi_author_cache');
