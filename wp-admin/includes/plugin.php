<?php
/**
 * WordPress Plugin Administration API
 *
 * @package WordPress
 * @subpackage Administration
 */

add_filter( 'whitelist_options', 'option_update_filter' );
