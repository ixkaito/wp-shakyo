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
	 * Process the [embed] shortcode.
	 *
	 * Since the [embed] shortcode needs to be run earlier than other shortcodes,
	 * this function removes all existing shortcodes, registers the [embed] shortcode,
	 * calls {@link do_shortcode()}, and then re-registers the old shortcodes.
	 *
	 * @uses $shortcode_tags
	 * @uses remove_all_shortcodes()
	 * @uses add_shortcode()
	 * @uses do_shortcode()
	 *
	 * @param string $content Content to parse
	 * @return string Content with shortcode parsed
	 */
	public function run_shortcode( $content ) {
		global $shortcode_tags;

		// Back up current registered shortcodes and clear them all out
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();

		add_shortcode( 'embed', array( $this, 'shortcode' ) );

		// Do the shortcode (only the [embed] one is registered)
		$content = do_shortcode( $content );

		// Put the original shortcodes back
		$shortcode_tags = $orig_shortcode_tags;

		return $content;
	}

	/**
	 * If a post/page was saved, then output JavaScript to make
	 * an AJAX request that will call WP_Embed::cache_oembed().
	 */
	public function maybe_run_ajax_cache() {
		$post = get_post();

		if ( ! $post || empty( $_GET['message'] ) )
			return;

?>
<script type="text/javascript">
/* <![CDATA[ */
	jQuery(document).ready(function($){
		$.get("<?php echo admin_url( 'admin-ajax.php?action=oembed-cache&post=' . $post->ID, 'relative' ); ?>");
	});
/* ]]> */
</script>
<?php
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

	/**
	 * Unregister a previously registered embed handler. Do not use this function directly, use {@link wp_embed_unregister_handler()} instead.
	 *
	 * @param string $id The handler ID that should be removed.
	 * @param int $priority Optional. The priority of the handler to be removed (default: 10).
	 */
	public function unregister_handler( $id, $priority = 10 ) {
		if ( isset($this->handlers[$priority][$id]) )
			unset($this->handlers[$priority][$id]);
	}
}

$GLOBALS['wp_embed'] = new WP_Embed();
