<?php
/**
 * API for easily embedding rich media such as videos and images into content.
 *
 * @package WordPress
 * @subpackage Embed
 * @since 2.9.0
 */
class WP_Embed {
	public $handlers = array();
	public $post_ID;
	public $usecache = true;
	public $linkifunknown = true;

	/**
	 * When an URL cannot be embedded, return false instead of returning a link
	 * or the URL. Bypasses the 'embed_maybe_make_link' filter.
	 */
	public $return_false_on_fail = false;

	/**
	 * Constructor
	 */
	public function __construct() {
		// Hack to get the [embed] shortcode to run before wpautop()
		add_filter( 'the_content', array( $this, 'run_shortcode' ), 8 );

		// Shortcode placeholder for strip_shortcodes()
		add_shortcode( 'embed', '__return_false' );

		// Attempts to embed all URLs in a post
		add_filter( 'the_content', array( $this, 'autoembed' ), 8 );

		// After a post is saved, cache oEmbed items via AJAX
		add_action( 'edit_form_advanced', array( $this, 'maybe_run_ajax_cache' ) );
	}

	/**
	 * Register an embed handler. Do not use this function directly, use {@link wp_embed_register_handler()} instead.
	 * This function should probably also only be used for sites that do not support oEmbed.
	 *
	 * @param string $id An internal ID/name for the handler. Needs to be unique.
	 * @param string $regex The regex that will be used to see if this handler should be used for a URL.
	 * @param callback $callback The callback function that will be called if the regex is matched.
	 * @param int $priority Optional. Used to specify the order in which the registered handlers will be tested (default: 10). Lower numbers correspond with earlier testing, and handlers with the same priority are tested in the order in which they were added to the action.
	 */
	public function register_handler( $id, $regex, $callback, $priority = 10 ) {
		$this->handlers[$priority][$id] = array(
			'regex'    => $regex,
			'callback' => $callback,
		);
	}
}

$GLOBALS['wp_embed'] = new WP_Embed();
