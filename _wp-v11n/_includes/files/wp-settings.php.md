<p><b><a href="https://developer.wordpress.org/reference/files/wp-settings.php/">wp-settings.php</a></b></p>

<blockquote>

{% include files/wp-includes/load.php.md %}

{% include files/wp-includes/default-constants.php.md %}

{% include functions/wp_initial_constants.md %}

{% include functions/wp_check_php_mysql_versions.md %}

{% include functions/wp_unregister_GLOBALS.md %}

{% include functions/wp_fix_server_vars.md %}

{% include functions/wp_favicon_request.md %}

{% include functions/wp_maintenance.md %}

{% include functions/timer_start.md %}

{% include functions/wp_debug_mode.md %}

{% include functions/wp_set_lang_dir.md %}

{% include files/wp-includes/compat.php.md %}

{% include files/wp-includes/functions.php.md %}

{% include files/wp-includes/class-wp.php.md %}

{% include files/wp-includes/class-wp-error.php.md %}

{% include files/wp-includes/plugin.php.md %}

{% include files/wp-includes/pomo/mo.php.md %}

{% include functions/require_wp_db.md %}

{% include functions/wp_set_wpdb_vars.md %}

{% include functions/wp_start_object_cache.md %}

{% include files/wp-includes/default-filters.php.md %}

{% include functions/shutdown_action_hook.md %}

{% include files/wp-includes/l10n.php.md %}

{% include functions/wp_not_installed.md %}

{% include files/wp-includes/class-wp-walker.php.md %}

{% include files/wp-includes/class-wp-ajax-response.php.md %}

{% include files/wp-includes/formatting.php.md %}

{% include files/wp-includes/capabilities.php.md %}

{% include files/wp-includes/query.php.md %}

{% include files/wp-includes/date.php.md %}

{% include files/wp-includes/theme.php.md %}

{% include files/wp-includes/class-wp-theme.php.md %}

{% include files/wp-includes/template.php.md %}

{% include files/wp-includes/user.php.md %}

{% include files/wp-includes/session.php.md %}

{% include files/wp-includes/meta.php.md %}

{% include files/wp-includes/general-template.php.md %}

{% include files/wp-includes/link-template.php.md %}

{% include files/wp-includes/author-template.php.md %}

{% include files/wp-includes/post.php.md %}

{% include files/wp-includes/category.php.md %}

{% include files/wp-includes/category-template.php.md %}

{% include files/wp-includes/comment.php.md %}

{% include files/wp-includes/comment-template.php.md %}

{% include files/wp-includes/rewrite.php.md %}

{% include files/wp-includes/feed.php.md %}

{% include files/wp-includes/bookmark.php.md %}

{% include files/wp-includes/bookmark-template.php.md %}

{% include files/wp-includes/kses.php.md %}

{% include files/wp-includes/cron.php.md %}

{% include files/wp-includes/deprecated.php.md %}

{% include files/wp-includes/script-loader.php.md %}

{% include files/wp-includes/taxonomy.php.md %}

{% include files/wp-includes/update.php.md %}

{% include files/wp-includes/canonical.php.md %}

{% include files/wp-includes/shortcodes.php.md %}

{% include files/wp-includes/class-wp-embed.php.md %}

{% include files/wp-includes/media.php.md %}

{% include files/wp-includes/http.php.md %}

{% include files/wp-includes/class-http.php.md %}

{% include files/wp-includes/widgets.php.md %}

{% include files/wp-includes/nav-menu.php.md %}

{% include files/wp-includes/nav-menu-template.php.md %}

{% include files/wp-includes/admin-bar.php.md %}

{% include functions/is_multisite.md %}

{% include files/wp-includes/ms-functions.php.md %}

{% include files/wp-includes/ms-default-filters.php.md %}

{% include files/wp-includes/ms-deprecated.php.md %}

{% include functions/wp_plugin_directory_constants.md %}

{% include functions/wp_get_mu_plugins.md %}

{% include functions/is_multisite.md %}

{% include functions/wp_get_active_network_plugins.md %}

{% include functions/wp_register_plugin_realpath.md %}

{% include functions/do_action.md hook="muplugins_loaded" %}

{% include functions/ms_cookie_constants.md %}

{% include functions/wp_cookie_constants.md %}

{% include functions/wp_ssl_constants.md %}

{% include files/wp-includes/vars.php.md %}

{% include functions/create_initial_taxonomies.md %}

{% include functions/create_initial_post_types.md %}

{% include functions/register_theme_directory.md %}

{% include functions/wp_get_active_and_valid_plugins.md %}

{% include functions/wp_register_plugin_realpath.md %}

{% include files/wp-includes/pluggable.php.md %}

{% include files/wp-includes/pluggable-deprecated.php.md %}

{% include functions/wp_set_internal_encoding.md %}

{% include functions/do_action.md hook="plugins_loaded" %}

{% include functions/wp_functionality_constants.md %}

{% include functions/wp_magic_quotes.md %}

{% include functions/do_action.md hook="sanitize_comment_cookies" %}

{% include classes/WP_Query.md %}

{% include classes/WP_Rewrite.md %}

{% include classes/WP.md %}

{% include classes/WP_Widget_Factory.md %}

{% include classes/WP_Roles.md %}

{% include functions/do_action.md hook="setup_theme" %}

{% include functions/wp_templating_constants.md %}

{% include functions/load_default_textdomain.md %}

{% include functions/get_locale.md %}

{% include files/wp-includes/locale.php.md %}

{% include classes/WP_Locale.md %}

{% include functions/do_action.md hook="after_setup_theme" %}

{% include classes/WP/init.md %}

{% include functions/do_action.md hook="init" %}

</blockquote>
