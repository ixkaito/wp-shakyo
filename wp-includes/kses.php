<?php
/**
 * kses 0.2.2 - HTML/XHTML filter that only allows some elements and attributes
 * Copyright (C) 2002, 2003, 2005  Ulf Harnhammar
 *
 * This program is free software and open source software; you can redistribute
 * it and/or modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; either version 2 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
 * more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin St, Fifth Floor, Boston, MA 02110-1301, USA
 * http://www.gnu.org/licenses/gpl.html
 *
 * [kses strips evil scripts!]
 *
 * Added wp_ prefix to avoid conflicts with existing kses users
 *
 * @version 0.2.2
 * @copyright (C) 2002, 2003, 2005
 * @author Ulf Harnhammar <http://advogato.org/person/metaur/>
 *
 * @package External
 * @subpackage KSES
 *
 */

/**
 * You can override this in a plugin.
 *
 * The wp_kses_allowed_html filter is more powerful and supplies context.
 * CUSTOM_TAGS is not recommended and should be considered deprecated.
 *
 * @see wp_kses_allowed_html()
 *
 * @since 1.2.0
 */
if ( ! defined( 'CUSTOM_TAGS' ) )
	define( 'CUSTOM_TAGS', false );

// Ensure that these variables are added to the global namespace
// (e.g. if using namespaces / autoload in the current PHP environment).
global $allowedposttags, $allowedtags, $allowedentitynames;

if ( ! CUSTOM_TAGS ) {
	/**
	 * Kses global for default allowable HTML tags.
	 *
	 * Can be override by using CUSTOM_TAGS constant.
	 *
	 * @global array $allowedposttags
	 * @since 2.0.0
	 */
	$allowedposttags = array(
		'address' => array(),
		'a' => array(
			'href' => true,
			'rel' => true,
			'rev' => true,
			'name' => true,
			'target' => true,
		),
		'abbr' => array(),
		'acronym' => array(),
		'area' => array(
			'alt' => true,
			'coords' => true,
			'href' => true,
			'nohref' => true,
			'shape' => true,
			'target' => true,
		),
		'article' => array(
			'align' => true,
			'dir' => true,
			'lang' => true,
			'xml:lang' => true,
		),
		'aside' => array(
			'align' => true,
			'dir' => true,
			'lang' => true,
			'xml:lang' => true,
		),
		'b' => array(),
		'big' => array(),
		'blockquote' => array(
			'cite' => true,
			'lang' => true,
			'xml:lang' => true,
		),
		'br' => array(),
		'button' => array(
			'disabled' => true,
			'name' => true,
			'type' => true,
			'value' => true,
		),
		'caption' => array(
			'align' => true,
		),
		'cite' => array(
			'dir' => true,
			'lang' => true,
		),
		'code' => array(),
		'col' => array(
			'align' => true,
			'char' => true,
			'charoff' => true,
			'span' => true,
			'dir' => true,
			'valign' => true,
			'width' => true,
		),
		'del' => array(
			'datetime' => true,
		),
		'dd' => array(),
		'dfn' => array(),
		'details' => array(
			'align' => true,
			'dir' => true,
			'lang' => true,
			'open' => true,
			'xml:lang' => true,
		),
		'div' => array(
			'align' => true,
			'dir' => true,
			'lang' => true,
			'xml:lang' => true,
		),
		'dl' => array(),
		'dt' => array(),
		'em' => array(),
		'fieldset' => array(),
		'figure' => array(
			'align' => true,
			'dir' => true,
			'lang' => true,
			'xml:lang' => true,
		),
		'figcaption' => array(
			'align' => true,
			'dir' => true,
			'lang' => true,
			'xml:lang' => true,
		),
		'font' => array(
			'color' => true,
			'face' => true,
			'size' => true,
		),
		'footer' => array(
			'align' => true,
			'dir' => true,
			'lang' => true,
			'xml:lang' => true,
		),
		'form' => array(
			'action' => true,
			'accept' => true,
			'accept-charset' => true,
			'enctype' => true,
			'method' => true,
			'name' => true,
			'target' => true,
		),
		'h1' => array(
			'align' => true,
		),
		'h2' => array(
			'align' => true,
		),
		'h3' => array(
			'align' => true,
		),
		'h4' => array(
			'align' => true,
		),
		'h5' => array(
			'align' => true,
		),
		'h6' => array(
			'align' => true,
		),
		'header' => array(
			'align' => true,
			'dir' => true,
			'lang' => true,
			'xml:lang' => true,
		),
		'hgroup' => array(
			'align' => true,
			'dir' => true,
			'lang' => true,
			'xml:lang' => true,
		),
		'hr' => array(
			'align' => true,
			'noshade' => true,
			'size' => true,
			'width' => true,
		),
		'i' => array(),
		'img' => array(
			'alt' => true,
			'align' => true,
			'border' => true,
			'height' => true,
			'hspace' => true,
			'longdesc' => true,
			'vspace' => true,
			'src' => true,
			'usemap' => true,
			'width' => true,
		),
		'ins' => array(
			'datetime' => true,
			'cite' => true,
		),
		'kbd' => array(),
		'label' => array(
			'for' => true,
		),
		'legend' => array(
			'align' => true,
		),
		'li' => array(
			'align' => true,
			'value' => true,
		),
		'map' => array(
			'name' => true,
		),
		'mark' => array(),
		'menu' => array(
			'type' => true,
		),
		'nav' => array(
			'align' => true,
			'dir' => true,
			'lang' => true,
			'xml:lang' => true,
		),
		'p' => array(
			'align' => true,
			'dir' => true,
			'lang' => true,
			'xml:lang' => true,
		),
		'pre' => array(
			'width' => true,
		),
		'q' => array(
			'cite' => true,
		),
		's' => array(),
		'samp' => array(),
		'span' => array(
			'dir' => true,
			'align' => true,
			'lang' => true,
			'xml:lang' => true,
		),
		'section' => array(
			'align' => true,
			'dir' => true,
			'lang' => true,
			'xml:lang' => true,
		),
		'small' => array(),
		'strike' => array(),
		'strong' => array(),
		'sub' => array(),
		'summary' => array(
			'align' => true,
			'dir' => true,
			'lang' => true,
			'xml:lang' => true,
		),
		'sup' => array(),
		'table' => array(
			'align' => true,
			'bgcolor' => true,
			'border' => true,
			'cellpadding' => true,
			'cellspacing' => true,
			'dir' => true,
			'rules' => true,
			'summary' => true,
			'width' => true,
		),
		'tbody' => array(
			'align' => true,
			'char' => true,
			'charoff' => true,
			'valign' => true,
		),
		'td' => array(
			'abbr' => true,
			'align' => true,
			'axis' => true,
			'bgcolor' => true,
			'char' => true,
			'charoff' => true,
			'colspan' => true,
			'dir' => true,
			'headers' => true,
			'height' => true,
			'nowrap' => true,
			'rowspan' => true,
			'scope' => true,
			'valign' => true,
			'width' => true,
		),
		'textarea' => array(
			'cols' => true,
			'rows' => true,
			'disabled' => true,
			'name' => true,
			'readonly' => true,
		),
		'tfoot' => array(
			'align' => true,
			'char' => true,
			'charoff' => true,
			'valign' => true,
		),
		'th' => array(
			'abbr' => true,
			'align' => true,
			'axis' => true,
			'bgcolor' => true,
			'char' => true,
			'charoff' => true,
			'colspan' => true,
			'headers' => true,
			'height' => true,
			'nowrap' => true,
			'rowspan' => true,
			'scope' => true,
			'valign' => true,
			'width' => true,
		),
		'thead' => array(
			'align' => true,
			'char' => true,
			'charoff' => true,
			'valign' => true,
		),
		'title' => array(),
		'tr' => array(
			'align' => true,
			'bgcolor' => true,
			'char' => true,
			'charoff' => true,
			'valign' => true,
		),
		'tt' => array(),
		'u' => array(),
		'ul' => array(
			'type' => true,
		),
		'ol' => array(
			'start' => true,
			'type' => true,
		),
		'var' => array(),
	);

	/**
	 * Kses allowed HTML elements.
	 *
	 * @global array $allowedtags
	 * @since 1.0.0
	 */
	$allowedtags = array(
		'a' => array(
			'href' => true,
			'title' => true,
		),
		'abbr' => array(
			'title' => true,
		),
		'acronym' => array(
			'title' => true,
		),
		'b' => array(),
		'blockquote' => array(
			'cite' => true,
		),
		'cite' => array(),
		'code' => array(),
		'del' => array(
			'datetime' => true,
		),
		'em' => array(),
		'i' => array(),
		'q' => array(
			'cite' => true,
		),
		'strike' => array(),
		'strong' => array(),
	);

	$allowedentitynames = array(
		'nbsp',    'iexcl',  'cent',    'pound',  'curren', 'yen',
		'brvbar',  'sect',   'uml',     'copy',   'ordf',   'laquo',
		'not',     'shy',    'reg',     'macr',   'deg',    'plusmn',
		'acute',   'micro',  'para',    'middot', 'cedil',  'ordm',
		'raquo',   'iquest', 'Agrave',  'Aacute', 'Acirc',  'Atilde',
		'Auml',    'Aring',  'AElig',   'Ccedil', 'Egrave', 'Eacute',
		'Ecirc',   'Euml',   'Igrave',  'Iacute', 'Icirc',  'Iuml',
		'ETH',     'Ntilde', 'Ograve',  'Oacute', 'Ocirc',  'Otilde',
		'Ouml',    'times',  'Oslash',  'Ugrave', 'Uacute', 'Ucirc',
		'Uuml',    'Yacute', 'THORN',   'szlig',  'agrave', 'aacute',
		'acirc',   'atilde', 'auml',    'aring',  'aelig',  'ccedil',
		'egrave',  'eacute', 'ecirc',   'euml',   'igrave', 'iacute',
		'icirc',   'iuml',   'eth',     'ntilde', 'ograve', 'oacute',
		'ocirc',   'otilde', 'ouml',    'divide', 'oslash', 'ugrave',
		'uacute',  'ucirc',  'uuml',    'yacute', 'thorn',  'yuml',
		'quot',    'amp',    'lt',      'gt',     'apos',   'OElig',
		'oelig',   'Scaron', 'scaron',  'Yuml',   'circ',   'tilde',
		'ensp',    'emsp',   'thinsp',  'zwnj',   'zwj',    'lrm',
		'rlm',     'ndash',  'mdash',   'lsquo',  'rsquo',  'sbquo',
		'ldquo',   'rdquo',  'bdquo',   'dagger', 'Dagger', 'permil',
		'lsaquo',  'rsaquo', 'euro',    'fnof',   'Alpha',  'Beta',
		'Gamma',   'Delta',  'Epsilon', 'Zeta',   'Eta',    'Theta',
		'Iota',    'Kappa',  'Lambda',  'Mu',     'Nu',     'Xi',
		'Omicron', 'Pi',     'Rho',     'Sigma',  'Tau',    'Upsilon',
		'Phi',     'Chi',    'Psi',     'Omega',  'alpha',  'beta',
		'gamma',   'delta',  'epsilon', 'zeta',   'eta',    'theta',
		'iota',    'kappa',  'lambda',  'mu',     'nu',     'xi',
		'omicron', 'pi',     'rho',     'sigmaf', 'sigma',  'tau',
		'upsilon', 'phi',    'chi',     'psi',    'omega',  'thetasym',
		'upsih',   'piv',    'bull',    'hellip', 'prime',  'Prime',
		'oline',   'frasl',  'weierp',  'image',  'real',   'trade',
		'alefsym', 'larr',   'uarr',    'rarr',   'darr',   'harr',
		'crarr',   'lArr',   'uArr',    'rArr',   'dArr',   'hArr',
		'forall',  'part',   'exist',   'empty',  'nabla',  'isin',
		'notin',   'ni',     'prod',    'sum',    'minus',  'lowast',
		'radic',   'prop',   'infin',   'ang',    'and',    'or',
		'cap',     'cup',    'int',     'sim',    'cong',   'asymp',
		'ne',      'equiv',  'le',      'ge',     'sub',    'sup',
		'nsub',    'sube',   'supe',    'oplus',  'otimes', 'perp',
		'sdot',    'lceil',  'rceil',   'lfloor', 'rfloor', 'lang',
		'rang',    'loz',    'spades',  'clubs',  'hearts', 'diams',
		'sup1',    'sup2',   'sup3',    'frac14', 'frac12', 'frac34',
		'there4',
	);

	$allowedposttags = array_map( '_wp_add_global_attributes', $allowedposttags );
} else {
	$allowedtags = wp_kses_array_lc( $allowedtags );
	$allowedposttags = wp_kses_array_lc( $allowedposttags );
}
















































































































































































































































































































































































































































































































































/**
 * Removes any invalid control characters in $string.
 *
 * Also removes any instance of the '\0' string.
 *
 * @since 1.0.0
 *
 * @param string $string
 * @return string
 */
function wp_kses_no_null($string) {
	$string = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F]/', '', $string);
	$string = preg_replace('/(\\\\0)+/', '', $string);

	return $string;
}


































































































































/**
 * Converts and fixes HTML entities.
 *
 * This function normalizes HTML entities. It will convert "AT&T" to the correct
 * "AT&amp;T", "&#00058;" to "&#58;", "&#XYZZY;" to "&amp;#XYZZY;" and so on.
 *
 * @since 1.0.0
 *
 * @param string $string Content to normalize entities
 * @return string Content with normalized entities
 */
function wp_kses_normalize_entities($string) {
	# Disarm all entities by converting & to &amp;

	$string = str_replace('&', '&amp;', $string);

	# Change back the allowed entities in our entity whitelist

	$string = preg_replace_callback('/&amp;([A-Za-z]{2,8}[0-9]{0,2});/', 'wp_kses_named_entities', $string);
	$string = preg_replace_callback('/&amp;#(0*[0-9]{1,7});/', 'wp_kses_normalize_entities2', $string);
	$string = preg_replace_callback('/&amp;#[Xx](0*[0-9A-Fa-f]{1,6});/', 'wp_kses_normalize_entities3', $string);

	return $string;
}

/**
 * Callback for wp_kses_normalize_entities() regular expression.
 *
 * This function only accepts valid named entity references, which are finite,
 * case-sensitive, and highly scrutinized by HTML and XML validators.
 *
 * @since 3.0.0
 *
 * @param array $matches preg_replace_callback() matches array
 * @return string Correctly encoded entity
 */
function wp_kses_named_entities($matches) {
	global $allowedentitynames;

	if ( empty($matches[1]) )
		return '';

	$i = $matches[1];
	return ( ( ! in_array($i, $allowedentitynames) ) ? "&amp;$i;" : "&$i;" );
}

/**
 * Callback for wp_kses_normalize_entities() regular expression.
 *
 * This function helps wp_kses_normalize_entities() to only accept 16-bit values
 * and nothing more for &#number; entities.
 *
 * @access private
 * @since 1.0.0
 *
 * @param array $matches preg_replace_callback() matches array
 * @return string Correctly encoded entity
 */
function wp_kses_normalize_entities2($matches) {
	if ( empty($matches[1]) )
		return '';

	$i = $matches[1];
	if (valid_unicode($i)) {
		$i = str_pad(ltrim($i,'0'), 3, '0', STR_PAD_LEFT);
		$i = "&#$i;";
	} else {
		$i = "&amp;#$i;";
	}

	return $i;
}

/**
 * Adds all Kses input form content filters.
 *
 * All hooks have default priority. The wp_filter_kses() function is added to
 * the 'pre_comment_content' and 'title_save_pre' hooks.
 *
 * The wp_filter_post_kses() function is added to the 'content_save_pre',
 * 'excerpt_save_pre', and 'content_filtered_save_pre' hooks.
 *
 * @since 2.0.0
 * @uses add_filter() See description for what functions are added to what hooks.
 */
function kses_init_filters() {
	// Normal filtering
	add_filter('title_save_pre', 'wp_filter_kses');

	// Comment filtering
	if ( current_user_can( 'unfiltered_html' ) )
		add_filter( 'pre_comment_content', 'wp_filter_post_kses' );
	else
		add_filter( 'pre_comment_content', 'wp_filter_kses' );

	// Post filtering
	add_filter('content_save_pre', 'wp_filter_post_kses');
	add_filter('excerpt_save_pre', 'wp_filter_post_kses');
	add_filter('content_filtered_save_pre', 'wp_filter_post_kses');
}

/**
 * Removes all Kses input form content filters.
 *
 * A quick procedural method to removing all of the filters that kses uses for
 * content in WordPress Loop.
 *
 * Does not remove the kses_init() function from 'init' hook (priority is
 * default). Also does not remove kses_init() function from 'set_current_user'
 * hook (priority is also default).
 *
 * @since 2.0.6
 */
function kses_remove_filters() {
	// Normal filtering
	remove_filter('title_save_pre', 'wp_filter_kses');

	// Comment filtering
	remove_filter( 'pre_comment_content', 'wp_filter_post_kses' );
	remove_filter( 'pre_comment_content', 'wp_filter_kses' );

	// Post filtering
	remove_filter('content_save_pre', 'wp_filter_post_kses');
	remove_filter('excerpt_save_pre', 'wp_filter_post_kses');
	remove_filter('content_filtered_save_pre', 'wp_filter_post_kses');
}

/**
 * Sets up most of the Kses filters for input form content.
 *
 * If you remove the kses_init() function from 'init' hook and
 * 'set_current_user' (priority is default), then none of the Kses filter hooks
 * will be added.
 *
 * First removes all of the Kses filters in case the current user does not need
 * to have Kses filter the content. If the user does not have unfiltered_html
 * capability, then Kses filters are added.
 *
 * @uses kses_remove_filters() Removes the Kses filters
 * @uses kses_init_filters() Adds the Kses filters back if the user
 *		does not have unfiltered HTML capability.
 * @since 2.0.0
 */
function kses_init() {
	kses_remove_filters();

	if (current_user_can('unfiltered_html') == false)
		kses_init_filters();
}

add_action('init', 'kses_init');
add_action('set_current_user', 'kses_init');

/**
 * Helper function to add global attributes to a tag in the allowed html list.
 *
 * @since 3.5.0
 * @access private
 *
 * @param array $value An array of attributes.
 * @return array The array of attributes with global attributes added.
 */
function _wp_add_global_attributes( $value ) {
	$global_attributes = array(
		'class' => true,
		'id' => true,
		'style' => true,
		'title' => true,
		'role' => true,
	);

	if ( true === $value )
		$value = array();

	if ( is_array( $value ) )
		return array_merge( $value, $global_attributes );

	return $value;
}
