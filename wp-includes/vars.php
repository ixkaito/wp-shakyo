<?php
/**
 * Creates common globals for the rest of WordPress
 *
 * Sets $pagenow global which is the current page. Checks
 * for the browser to set which one is currently being used.
 *
 * Detects which user environment WordPress is being used on.
 * Only attempts to check for Apache, Nginx and IIS -- three web
 * servers with known pretty permalink capability.
 *
 * Note: Though Nginx is detected, WordPress does not currently
 * generate rewrite rules for it. See http://codex.wordpress.org/Nginx
 *
 * @package WordPress
 */

global $pagenow,
	$is_lynx, $is_gecko, $is_winIE, $is_macIE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone, $is_IE,
	$is_apache, $is_IIS, $is_iis7, $is_nginx;

// On which page are we ?
if ( is_admin() ) {
	// wp-admin pages are checked more carefully
	if ( is_network_admin() )
		preg_match('#/wp-admin/network/?(.*?)$#i', $_SERVER['PHP_SELF'], $self_matches);
	elseif ( is_user_admin() )
		preg_match('#/wp-admin/user/?(.*?)$#i', $_SERVER['PHP_SELF'], $self_matches);
	else
		preg_match('#/wp-admin/?(.*?)$#i', $_SERVER['PHP_SELF'], $self_matches);
	$pagenow = $self_matches[1];
	$pagenow = trim($pagenow, '/');
	$pagenow = preg_replace('#\?.*?$#', '', $pagenow);
	if ( '' === $pagenow || 'index' === $pagenow || 'index.php' === $pagenow ) {
		$pagenow = 'index.php';
	} else {
		preg_match('#(.*?)(/|$)#', $pagenow, $self_matches);
		$pagenow = strtolower($self_matches[1]);
		if ( '.php' !== substr($pagenow, -4, 4) )
			$pagenow .= '.php'; // for Options +Multiviews: /wp-admin/themes/index.php (themes.php is queried)
	}
} else {
	if ( preg_match('#([^/]+\.php)([?/].*?)?$#i', $_SERVER['PHP_SELF'], $self_matches) )
		$pagenow = strtolower($self_matches[1]);
	else
		$pagenow = 'index.php';
}
unset($self_matches);
