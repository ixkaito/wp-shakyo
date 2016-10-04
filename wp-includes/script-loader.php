<?php
/**
 * WordPress scripts and styles default loader.
 *
 * Most of the functionality that existed here was moved to
 * {@link http://backpress.automattic.com/ BackPress}. WordPress themes and
 * plugins will only be concerned about the filters and actions set in this
 * file.
 *
 * Several constants are used to manage the loading, concatenating and compression of scripts and CSS:
 * define('SCRIPT_DEBUG', true); loads the development (non-minified) versions of all scripts and CSS, and disables compression and concatenation,
 * define('CONCATENATE_SCRIPTS', false); disables compression and concatenation of scripts and CSS,
 * define('COMPRESS_SCRIPTS', false); disables compression of scripts,
 * define('COMPRESS_CSS', false); disables compression of CSS,
 * define('ENFORCE_GZIP', true); forces gzip for compression (default is deflate).
 *
 * The globals $concatenate_scripts, $compress_scripts and $compress_css can be set by plugins
 * to temporarily override the above settings. Also a compression test is run once and the result is saved
 * as option 'can_compress_scripts' (0/1). The test will run again if that option is deleted.
 *
 * @package WordPress
 */
