<?php
/**
 * WordPress Post Template Functions.
 *
 * Gets content for the current post in the loop.
 *
 * @package WordPress
 * @subpackage Template
 */

/**
 * Display the ID of the current item in the WordPress Loop.
 *
 * @since 0.71
 */
function the_ID() {
	echo get_the_ID();
}

/**
 * Retrieve the ID of the current item in the WordPress Loop.
 *
 * @since 2.1.0
 * @uses $post
 *
 * @return int|bool The ID of the current item in the WordPress Loop. False if $post is not set.
 */
function get_the_ID() {
	$post = get_post();
	return ! empty( $post ) ? $post->ID : false;
}

/**
 * Display or retrieve the current post title with optional content.
 *
 * @since 0.71
 *
 * @param string $before Optional. Content to prepend to the title.
 * @param string $after Optional. Content to append to the title.
 * @param bool $echo Optional, default to true.Whether to display or return.
 * @return null|string Null on no title. String if $echo parameter is false.
 */
function the_title($before = '', $after = '', $echo = true) {
	$title = get_the_title();

	if ( strlen($title) == 0 )
		return;

	$title = $before . $title . $after;

	if ( $echo )
		echo $title;
	else
		return $title;
}

/**
 * Retrieve post title.
 *
 * If the post is protected and the visitor is not an admin, then "Protected"
 * will be displayed before the post title. If the post is private, then
 * "Private" will be located before the post title.
 *
 * @since 0.71
 *
 * @param int|WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
 * @return string
 */
function get_the_title( $post = 0 ) {
	$post = get_post( $post );

	$title = isset( $post->post_title ) ? $post->post_title : '';
	$id = isset( $post->ID ) ? $post->ID : 0;

	if ( ! is_admin() ) {
		if ( ! empty( $post->post_password ) ) {

			/**
			 * Filter the text prepended to the post title for protected posts.
			 *
			 * The filter is only applied on the front end.
			 *
			 * @since 2.8.0
			 *
			 * @param string  $prepend Text displayed before the post title.
			 *                         Default 'Protected: %s'.
			 * @param WP_Post $post    Current post object.
			 */
			$protected_title_format = apply_filters( 'protected_title_format', __( 'Protected: %s' ), $post );
			$title = sprintf( $protected_title_format, $title );
		} else if ( isset( $post->post_status ) && 'private' == $post->post_status ) {

			/**
			 * Filter the text prepended to the post title of private posts.
			 *
			 * The filter is only applied on the front end.
			 *
			 * @since 2.8.0
			 *
			 * @param string  $prepend Text displayed before the post title.
			 *                         Default 'Private: %s'.
			 * @param WP_Post $post    Current post object.
			 */
			$private_title_format = apply_filters( 'private_title_format', __( 'Private: %s' ), $post );
			$title = sprintf( $private_title_format, $title );
		}
	}

	/**
	 * Filter the post title.
	 *
	 * @since 0.71
	 *
	 * @param string $title The post title.
	 * @param int    $id    The post ID.
	 */
	return apply_filters( 'the_title', $title, $id );
}

/**
 * Display the post content.
 *
 * @since 0.71
 *
 * @param string $more_link_text Optional. Content for when there is more text.
 * @param bool $strip_teaser Optional. Strip teaser content before the more text. Default is false.
 */
function the_content( $more_link_text = null, $strip_teaser = false) {
	$content = get_the_content( $more_link_text, $strip_teaser );

	/**
	 * Filter the post content.
	 *
	 * @since 0.71
	 *
	 * @param string $content Content of the current post.
	 */
	$content = apply_filters( 'the_content', $content );
	$content = str_replace( ']]>', ']]&gt;', $content );
	echo $content;
}

/**
 * Retrieve the post content.
 *
 * @since 0.71
 *
 * @param string $more_link_text Optional. Content for when there is more text.
 * @param bool $stripteaser Optional. Strip teaser content before the more text. Default is false.
 * @return string
 */
function get_the_content( $more_link_text = null, $strip_teaser = false ) {
	global $page, $more, $preview, $pages, $multipage;

	$post = get_post();

	if ( null === $more_link_text )
		$more_link_text = __( '(more&hellip;)' );

	$output = '';
	$has_teaser = false;

	// If post password required and it doesn't match the cookie.
	if ( post_password_required( $post ) )
		return get_the_password_form( $post );

	if ( $page > count( $pages ) ) // if the requested page doesn't exist
		$page = count( $pages ); // give them the highest numbered page that DOES exist

	$content = $pages[$page - 1];
	if ( preg_match( '/<!--more(.*?)?-->/', $content, $matches ) ) {
		$content = explode( $matches[0], $content, 2 );
		if ( ! empty( $matches[1] ) && ! empty( $more_link_text ) )
			$more_link_text = strip_tags( wp_kses_no_null( trim( $matches[1] ) ) );

		$has_teaser = true;
	} else {
		$content = array( $content );
	}

	if ( false !== strpos( $post->post_content, '<!--noteaser-->' ) && ( ! $multipage || $page == 1 ) )
		$strip_teaser = true;

	$teaser = $content[0];

	if ( $more && $strip_teaser && $has_teaser )
		$teaser = '';

	$output .= $teaser;

	if ( count( $content ) > 1 ) {
		if ( $more ) {
			$output .= '<span id="more-' . $post->ID . '"></span>' . $content[1];
		} else {
			if ( ! empty( $more_link_text ) )

				/**
				 * Filter the Read More link text.
				 *
				 * @since 2.8.0
				 *
				 * @param string $more_link_element Read More link element.
				 * @param string $more_link_text    Read More text.
				 */
				$output .= apply_filters( 'the_content_more_link', ' <a href="' . get_permalink() . "#more-{$post->ID}\" class=\"more-link\">$more_link_text</a>", $more_link_text );
			$output = force_balance_tags( $output );
		}
	}

	if ( $preview ) // preview fix for javascript bug with foreign languages
		$output =	preg_replace_callback( '/\%u([0-9A-F]{4})/', '_convert_urlencoded_to_entities', $output );

	return $output;
}

/**
 * Display the classes for the post div.
 *
 * @since 2.7.0
 *
 * @param string|array $class One or more classes to add to the class list.
 * @param int|WP_Post $post_id Optional. Post ID or post object.
 */
function post_class( $class = '', $post_id = null ) {
	// Separates classes with a single space, collates classes for post DIV
	echo 'class="' . join( ' ', get_post_class( $class, $post_id ) ) . '"';
}

/**
 * Retrieve the classes for the post div as an array.
 *
 * The class names are many. If the post is a sticky, then the 'sticky'
 * class name. The class 'hentry' is always added to each post. If the post has a
 * post thumbnail, 'has-post-thumbnail' is added as a class. For each
 * category, the class will be added with 'category-' with category slug is
 * added. The tags are the same way as the categories with 'tag-' before the tag
 * slug. All classes are passed through the filter, 'post_class' with the list
 * of classes, followed by $class parameter value, with the post ID as the last
 * parameter.
 *
 * @since 2.7.0
 *
 * @param string|array $class One or more classes to add to the class list.
 * @param int|WP_Post $post_id Optional. Post ID or post object.
 * @return array Array of classes.
 */
function get_post_class( $class = '', $post_id = null ) {
	$post = get_post($post_id);

	$classes = array();

	if ( empty($post) )
		return $classes;

	$classes[] = 'post-' . $post->ID;
	if ( ! is_admin() )
		$classes[] = $post->post_type;
	$classes[] = 'type-' . $post->post_type;
	$classes[] = 'status-' . $post->post_status;

	// Post Format
	if ( post_type_supports( $post->post_type, 'post-formats' ) ) {
		$post_format = get_post_format( $post->ID );

		if ( $post_format && !is_wp_error($post_format) )
			$classes[] = 'format-' . sanitize_html_class( $post_format );
		else
			$classes[] = 'format-standard';
	}

	// Post requires password
	if ( post_password_required( $post->ID ) ) {
		$classes[] = 'post-password-required';
	// Post thumbnails
	} elseif ( ! is_attachment( $post ) && current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail( $post->ID ) ) {
		$classes[] = 'has-post-thumbnail';
	}

	// sticky for Sticky Posts
	if ( is_sticky( $post->ID ) ) {
		if ( is_home() && ! is_paged() ) {
			$classes[] = 'sticky';
		} elseif ( is_admin() ) {
			$classes[] = 'status-sticky';
		}
	}

	// hentry for hAtom compliance
	$classes[] = 'hentry';

	// Categories
	if ( is_object_in_taxonomy( $post->post_type, 'category' ) ) {
		foreach ( (array) get_the_category($post->ID) as $cat ) {
			if ( empty($cat->slug ) )
				continue;
			$classes[] = 'category-' . sanitize_html_class($cat->slug, $cat->term_id);
		}
	}

	// Tags
	if ( is_object_in_taxonomy( $post->post_type, 'post_tag' ) ) {
		foreach ( (array) get_the_tags($post->ID) as $tag ) {
			if ( empty($tag->slug ) )
				continue;
			$classes[] = 'tag-' . sanitize_html_class($tag->slug, $tag->term_id);
		}
	}

	if ( !empty($class) ) {
		if ( !is_array( $class ) )
			$class = preg_split('#\s+#', $class);
		$classes = array_merge($classes, $class);
	}

	$classes = array_map('esc_attr', $classes);

	/**
	 * Filter the list of CSS classes for the current post.
	 *
	 * @since 2.7.0
	 *
	 * @param array  $classes An array of post classes.
	 * @param string $class   A comma-separated list of additional classes added to the post.
	 * @param int    $post_id The post ID.
	 */
	$classes = apply_filters( 'post_class', $classes, $class, $post->ID );

	return array_unique( $classes );
}

/**
 * Display the classes for the body element.
 *
 * @since 2.8.0
 *
 * @param string|array $class One or more classes to add to the class list.
 */
function body_class( $class = '' ) {
	// Separates classes with a single space, collates classes for body element
	echo 'class="' . join( ' ', get_body_class( $class ) ) . '"';
}

/**
 * Retrieve the classes for the body element as an array.
 *
 * @since 2.8.0
 *
 * @param string|array $class One or more classes to add to the class list.
 * @return array Array of classes.
 */
function get_body_class( $class = '' ) {
	global $wp_query, $wpdb;

	$classes = array();

	if ( is_rtl() )
		$classes[] = 'rtl';

	if ( is_front_page() )
		$classes[] = 'home';
	if ( is_home() )
		$classes[] = 'blog';
	if ( is_archive() )
		$classes[] = 'archive';
	if ( is_date() )
		$classes[] = 'date';
	if ( is_search() ) {
		$classes[] = 'search';
		$classes[] = $wp_query->posts ? 'search-results' : 'search-no-results';
	}
	if ( is_paged() )
		$classes[] = 'paged';
	if ( is_attachment() )
		$classes[] = 'attachment';
	if ( is_404() )
		$classes[] = 'error404';

	if ( is_single() ) {
		$post_id = $wp_query->get_queried_object_id();
		$post = $wp_query->get_queried_object();

		$classes[] = 'single';
		if ( isset( $post->post_type ) ) {
			$classes[] = 'single-' . sanitize_html_class($post->post_type, $post_id);
			$classes[] = 'postid-' . $post_id;

			// Post Format
			if ( post_type_supports( $post->post_type, 'post-formats' ) ) {
				$post_format = get_post_format( $post->ID );

				if ( $post_format && !is_wp_error($post_format) )
					$classes[] = 'single-format-' . sanitize_html_class( $post_format );
				else
					$classes[] = 'single-format-standard';
			}
		}

		if ( is_attachment() ) {
			$mime_type = get_post_mime_type($post_id);
			$mime_prefix = array( 'application/', 'image/', 'text/', 'audio/', 'video/', 'music/' );
			$classes[] = 'attachmentid-' . $post_id;
			$classes[] = 'attachment-' . str_replace( $mime_prefix, '', $mime_type );
		}
	} elseif ( is_archive() ) {
		if ( is_post_type_archive() ) {
			$classes[] = 'post-type-archive';
			$post_type = get_query_var( 'post_type' );
			if ( is_array( $post_type ) )
				$post_type = reset( $post_type );
			$classes[] = 'post-type-archive-' . sanitize_html_class( $post_type );
		} else if ( is_author() ) {
			$author = $wp_query->get_queried_object();
			$classes[] = 'author';
			if ( isset( $author->user_nicename ) ) {
				$classes[] = 'author-' . sanitize_html_class( $author->user_nicename, $author->ID );
				$classes[] = 'author-' . $author->ID;
			}
		} elseif ( is_category() ) {
			$cat = $wp_query->get_queried_object();
			$classes[] = 'category';
			if ( isset( $cat->term_id ) ) {
				$classes[] = 'category-' . sanitize_html_class( $cat->slug, $cat->term_id );
				$classes[] = 'category-' . $cat->term_id;
			}
		} elseif ( is_tag() ) {
			$tags = $wp_query->get_queried_object();
			$classes[] = 'tag';
			if ( isset( $tags->term_id ) ) {
				$classes[] = 'tag-' . sanitize_html_class( $tags->slug, $tags->term_id );
				$classes[] = 'tag-' . $tags->term_id;
			}
		} elseif ( is_tax() ) {
			$term = $wp_query->get_queried_object();
			if ( isset( $term->term_id ) ) {
				$classes[] = 'tax-' . sanitize_html_class( $term->taxonomy );
				$classes[] = 'term-' . sanitize_html_class( $term->slug, $term->term_id );
				$classes[] = 'term-' . $term->term_id;
			}
		}
	} elseif ( is_page() ) {
		$classes[] = 'page';

		$page_id = $wp_query->get_queried_object_id();

		$post = get_post($page_id);

		$classes[] = 'page-id-' . $page_id;

		if ( get_pages( array( 'parent' => $page_id, 'number' => 1 ) ) ) {
			$classes[] = 'page-parent';
		}

		if ( $post->post_parent ) {
			$classes[] = 'page-child';
			$classes[] = 'parent-pageid-' . $post->post_parent;
		}
		if ( is_page_template() ) {
			$classes[] = 'page-template';
			$classes[] = 'page-template-' . sanitize_html_class( str_replace( '.', '-', get_page_template_slug( $page_id ) ) );
		} else {
			$classes[] = 'page-template-default';
		}
	}

	if ( is_user_logged_in() )
		$classes[] = 'logged-in';

	if ( is_admin_bar_showing() ) {
		$classes[] = 'admin-bar';
		$classes[] = 'no-customize-support';
	}

	if ( get_theme_mod( 'background_color' ) || get_background_image() )
		$classes[] = 'custom-background';

	$page = $wp_query->get( 'page' );

	if ( ! $page || $page < 2 )
		$page = $wp_query->get( 'paged' );

	if ( $page && $page > 1 && ! is_404() ) {
		$classes[] = 'paged-' . $page;

		if ( is_single() )
			$classes[] = 'single-paged-' . $page;
		elseif ( is_page() )
			$classes[] = 'page-paged-' . $page;
		elseif ( is_category() )
			$classes[] = 'category-paged-' . $page;
		elseif ( is_tag() )
			$classes[] = 'tag-paged-' . $page;
		elseif ( is_date() )
			$classes[] = 'date-paged-' . $page;
		elseif ( is_author() )
			$classes[] = 'author-paged-' . $page;
		elseif ( is_search() )
			$classes[] = 'search-paged-' . $page;
		elseif ( is_post_type_archive() )
			$classes[] = 'post-type-paged-' . $page;
	}

	if ( ! empty( $class ) ) {
		if ( !is_array( $class ) )
			$class = preg_split( '#\s+#', $class );
		$classes = array_merge( $classes, $class );
	} else {
		// Ensure that we always coerce class to being an array.
		$class = array();
	}

	$classes = array_map( 'esc_attr', $classes );

	/**
	 * Filter the list of CSS body classes for the current post or page.
	 *
	 * @since 2.8.0
	 *
	 * @param array  $classes An array of body classes.
	 * @param string $class   A comma-separated list of additional classes added to the body.
	 */
	$classes = apply_filters( 'body_class', $classes, $class );

	return array_unique( $classes );
}

/**
 * Whether post requires password and correct password has been provided.
 *
 * @since 2.7.0
 *
 * @param int|WP_Post $post An optional post. Global $post used if not provided.
 * @return bool false if a password is not required or the correct password cookie is present, true otherwise.
 */
function post_password_required( $post = null ) {
	$post = get_post($post);

	if ( empty( $post->post_password ) )
		return false;

	if ( ! isset( $_COOKIE['wp-postpass_' . COOKIEHASH] ) )
		return true;

	require_once ABSPATH . WPINC . '/class-phpass.php';
	$hasher = new PasswordHash( 8, true );

	$hash = wp_unslash( $_COOKIE[ 'wp-postpass_' . COOKIEHASH ] );
	if ( 0 !== strpos( $hash, '$P$B' ) )
		return true;

	return ! $hasher->CheckPassword( $post->post_password, $hash );
}

//
// Page Template Functions for usage in Themes
//

/**
 * The formatted output of a list of pages.
 *
 * Displays page links for paginated posts (i.e. includes the <!--nextpage-->.
 * Quicktag one or more times). This tag must be within The Loop.
 *
 * @since 1.2.0
 *
 * @param string|array $args {
 *     Optional. Array or string of default arguments.
 *
 *     @type string       $before           HTML or text to prepend to each link. Default is '<p> Pages:'.
 *     @type string       $after            HTML or text to append to each link. Default is '</p>'.
 *     @type string       $link_before      HTML or text to prepend to each link, inside the <a> tag.
 *                                          Also prepended to the current item, which is not linked. Default empty.
 *     @type string       $link_after       HTML or text to append to each Pages link inside the <a> tag.
 *                                          Also appended to the current item, which is not linked. Default empty.
 *     @type string       $next_or_number   Indicates whether page numbers should be used. Valid values are number
 *                                          and next. Default is 'number'.
 *     @type string       $separator        Text between pagination links. Default is ' '.
 *     @type string       $nextpagelink     Link text for the next page link, if available. Default is 'Next Page'.
 *     @type string       $previouspagelink Link text for the previous page link, if available. Default is 'Previous Page'.
 *     @type string       $pagelink         Format string for page numbers. The % in the parameter string will be
 *                                          replaced with the page number, so 'Page %' generates "Page 1", "Page 2", etc.
 *                                          Defaults to '%', just the page number.
 *     @type int|bool     $echo             Whether to echo or not. Accepts 1|true or 0|false. Default 1|true.
 * }
 * @return string Formatted output in HTML.
 */
function wp_link_pages( $args = '' ) {
	$defaults = array(
		'before'           => '<p>' . __( 'Pages:' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Next page' ),
		'previouspagelink' => __( 'Previous page' ),
		'pagelink'         => '%',
		'echo'             => 1
	);

	$params = wp_parse_args( $args, $defaults );

	/**
	 * Filter the arguments used in retrieving page links for paginated posts.
	 *
	 * @since 3.0.0
	 *
	 * @param array $params An array of arguments for page links for paginated posts.
	 */
	$r = apply_filters( 'wp_link_pages_args', $params );

	global $page, $numpages, $multipage, $more;

	$output = '';
	if ( $multipage ) {
		if ( 'number' == $r['next_or_number'] ) {
			$output .= $r['before'];
			for ( $i = 1; $i <= $numpages; $i++ ) {
				$link = $r['link_before'] . str_replace( '%', $i, $r['pagelink'] ) . $r['link_after'];
				if ( $i != $page || ! $more && 1 == $page ) {
					$link = _wp_link_page( $i ) . $link . '</a>';
				}
				/**
				 * Filter the HTML output of individual page number links.
				 *
				 * @since 3.6.0
				 *
				 * @param string $link The page number HTML output.
				 * @param int    $i    Page number for paginated posts' page links.
				 */
				$link = apply_filters( 'wp_link_pages_link', $link, $i );
				$output .= $r['separator'] . $link;
			}
			$output .= $r['after'];
		} elseif ( $more ) {
			$output .= $r['before'];
			$prev = $page - 1;
			if ( $prev ) {
				$link = _wp_link_page( $prev ) . $r['link_before'] . $r['previouspagelink'] . $r['link_after'] . '</a>';

				/** This filter is documented in wp-includes/post-template.php */
				$link = apply_filters( 'wp_link_pages_link', $link, $prev );
				$output .= $r['separator'] . $link;
			}
			$next = $page + 1;
			if ( $next <= $numpages ) {
				$link = _wp_link_page( $next ) . $r['link_before'] . $r['nextpagelink'] . $r['link_after'] . '</a>';

				/** This filter is documented in wp-includes/post-template.php */
				$link = apply_filters( 'wp_link_pages_link', $link, $next );
				$output .= $r['separator'] . $link;
			}
			$output .= $r['after'];
		}
	}

	/**
	 * Filter the HTML output of page links for paginated posts.
	 *
	 * @since 3.6.0
	 *
	 * @param string $output HTML output of paginated posts' page links.
	 * @param array  $args   An array of arguments.
	 */
	$html = apply_filters( 'wp_link_pages', $output, $args );

	if ( $r['echo'] ) {
		echo $html;
	}
	return $html;
}

/**
 * Wrap attachment in <<p>> element before content.
 *
 * @since 2.0.0
 *
 * @param string $content
 * @return string
 */
function prepend_attachment($content) {
	$post = get_post();

	if ( empty($post->post_type) || $post->post_type != 'attachment' )
		return $content;

	if ( 0 === strpos( $post->post_mime_type, 'video' ) ) {
		$meta = wp_get_attachment_metadata( get_the_ID() );
		$atts = array( 'src' => wp_get_attachment_url() );
		if ( ! empty( $meta['width'] ) && ! empty( $meta['height'] ) ) {
			$atts['width'] = (int) $meta['width'];
			$atts['height'] = (int) $meta['height'];
		}
		if ( has_post_thumbnail() ) {
			$atts['poster'] = wp_get_attachment_url( get_post_thumbnail_id() );
		}
		$p = wp_video_shortcode( $atts );
	} elseif ( 0 === strpos( $post->post_mime_type, 'audio' ) ) {
		$p = wp_audio_shortcode( array( 'src' => wp_get_attachment_url() ) );
	} else {
		$p = '<p class="attachment">';
		// show the medium sized image representation of the attachment if available, and link to the raw file
		$p .= wp_get_attachment_link(0, 'medium', false);
		$p .= '</p>';
	}

	/**
	 * Filter the attachment markup to be prepended to the post content.
	 *
	 * @since 2.0.0
	 *
	 * @see prepend_attachment()
	 *
	 * @param string $p The attachment HTML output.
	 */
	$p = apply_filters( 'prepend_attachment', $p );

	return "$p\n$content";
}
