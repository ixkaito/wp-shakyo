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

	/**
	 * The {@link do_shortcode()} callback function.
	 *
	 * Attempts to convert a URL into embed HTML. Starts by checking the URL against the regex of the registered embed handlers.
	 * If none of the regex matches and it's enabled, then the URL will be given to the {@link WP_oEmbed} class.
	 *
	 * @uses wp_oembed_get()
	 * @uses wp_parse_args()
	 * @uses wp_embed_defaults()
	 * @uses WP_Embed::maybe_make_link()
	 * @uses get_option()
	 * @uses author_can()
	 * @uses wp_cache_get()
	 * @uses wp_cache_set()
	 * @uses get_post_meta()
	 * @uses update_post_meta()
	 *
	 * @param array $attr {
	 *     Shortcode attributes. Optional.
	 *
	 *     @type int $width  Width of the embed in pixels.
	 *     @type int $height Height of the embed in pixels.
	 * }
	 * @param string $url The URL attempting to be embedded.
	 * @return string The embed HTML on success, otherwise the original URL.
	 */
	public function shortcode( $attr, $url = '' ) {
		$post = get_post();

		if ( empty( $url ) && ! empty( $attr['src'] ) ) {
			$url = $attr['src'];
		}

		if ( empty( $url ) )
			return '';

		$rawattr = $attr;
		$attr = wp_parse_args( $attr, wp_embed_defaults( $url ) );

		// kses converts & into &amp; and we need to undo this
		// See Http://core.trac.wordpress.org/ticket/11311
		$url = str_replace( '&amp;', '&', $url );

		// Look for known internal handlers
		ksort( $this->handlers );
		foreach ( $this->handlers as $priority => $handlers ) {
			foreach ( $handlers as $id => $handler ) {
				if ( preg_match( $handler['regex'], $url, $matches ) && is_callable( $handler['callback'] ) ) {
					if ( false !== $return = call_user_func( $handler['callback'], $matches, $attr, $url, $rawattr ) )
						/**
						 * Filter the returned embed handler.
						 *
						 * @since 2.9.0
						 *
						 * @see WP_Embed::shortcode()
						 *
						 * @param mixed  $return The shortcode callback function to call.
						 * @param string $url    The attempted embed URL.
						 * @param array  $attr   An array of shortcode attributes.
						 */
						return apply_filters( 'embed_handler_html', $return, $url, $attr );
				}
			}
		}

		$post_ID = ( ! empty( $post->ID ) ) ? $post->ID : null;
		if ( ! empty( $this->post_ID ) ) // Potentially set by WP_Embed::cache_oembed()
			$post_ID = $this->post_ID;

		// Unkown URL format. Let oEmbed have a go.
		if ( $post_ID ) {

			// Check for a cached result (stored in the post meta)
			$key_suffix = md5( $url . serialize( $attr ) );
			$cachekey = '_oembed_' . $key_suffix;
			$cachekey_time = '_oembed_time_' . $key_suffix;

			/**
			 * Filter the oEmbed TTL value (time to live).
			 *
			 * @since 4.0.0
			 *
			 * @param int    $time    Time to live (in seconds).
			 * @param string $url     The attempted embed URL.
			 * @param array  $attr    An array of shortcode attributes.
			 * @param int    $post_ID Post ID.
			 */
			$ttl = apply_filters( 'oembed_ttl', DAY_IN_SECONDS, $url, $attr, $post_ID );

			$cache = get_post_meta( $post_ID, $cachekey, true );
			$cache_time = get_post_meta( $post_ID, $cachekey_time, true );

			if ( ! $cache_time ) {
				$cache_time = 0;
			}

			$cached_recently = ( time() - $cache_time ) < $ttl;

			if ( $this->usecache || $cached_recently ) {
				// Failures are cached. Serve one if we're using the cache.
				if ( '{{unknown}}' === $cache )
					return $this->maybe_make_link( $url );

				if ( ! empty( $cache ) ) {
					/**
					 * Filter the cached oEmbed HTML.
					 *
					 * @since 2.9.0
					 *
					 * @see WP_Embed::shortcode()
					 *
					 * @param mixed  $cache   The cached HTML result, stored in post meta.
					 * @param string $url     The attemped embed URL.
					 * @param array  $attr    And array of shortcode attributes.
					 * @param int    $post_ID Post ID.
					 */
					return apply_filters( 'embed_oembed_html', $cache, $url, $attr, $post_ID );
				}
			}

			/**
			 * Filter whether to inspect the given URL for discoverable <link> tags.
			 *
			 * @since 2.9.0
			 *
			 * @see WP_eEmbed::discover()
			 *
			 * @param bool $enable whether to enable <link> tag discovery. Default false.
			 */
			$attr['discover'] = ( apply_filters( 'embed_oembed_discover', false ) && author_can( $post_ID, 'unfiltered_html' ) );

			// Use oEmbed to get the HTML
			$html = wp_oembed_get( $url, $attr );

			// Maybe cache the result
			if ( $html ) {
				update_post_meta( $post_ID, $cachekey, $html );
				update_post_meta( $post_ID, $cachekey_time, time() );
			} elseif ( ! $cache ) {
				update_post_meta( $post_ID, $cachekey, '{{unknown}}' );
			}

			// If there was a result, return it
			if ( $html ) {
				/** This filter is documented in wp-includes/class-wp-embed.php */
				return apply_filters( 'embed_oembed_html', $html, $url, $attr, $post_ID );
			}
		}

		// Still unknown
		return $this->maybe_make_link( $url );
	}

	/**
	 * Delete all oEmbed caches. Unused by core as of 4.0.0.
	 *
	 * @param int $post_ID post ID to delete the caches for.
	 */
	public function delete_oembed_caches( $post_ID ) {
		$post_metas = get_post_custom_keys( $post_ID );
		if ( empty($post_metas) )
			return;

		foreach( $post_metas as $post_meta_key ) {
			if ( '_oembed_' == substr( $post_meta_key, 0, 8 ) )
				delete_post_meta( $post_ID, $post_meta_key );
		}
	}

}

$GLOBALS['wp_embed'] = new WP_Embed();
