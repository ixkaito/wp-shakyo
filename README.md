# wp.shakyo

## index.php

> **wp-blog-header.php**
> 
>> **wp-load.php**
>> 
>>> **wp-config.php**
>>> 
>>>> **wp-settings.php**
>>>> 
>>>>> **wp-includes/load.php**
>>>>> 
>>>>> **wp-includes/default-constants.php**
>>>>> 
>>>>> `wp_initial_constants()`
>>>>> 
>>>>>> `is_multisite()`
>>>>> 
>>>>> `wp_check_php_mysql_versions()`
>>>>> 
>>>>> `date_default_timezone_set()`
>>>>> 
>>>>> `wp_unregister_GLOBALS()`
>>>>> 
>>>>> `wp_fix_server_vars()`
>>>>> 
>>>>> `wp_favicon_request()`
>>>>> 
>>>>> `wp_maintenance()`
>>>>> 
>>>>> `timer_start()`
>>>>> 
>>>>> `wp_debug_mode()`
>>>>> 
>>>>> `wp_set_lang_dir()`
>>>>> 
>>>>> **wp-includes/compat.php**
>>>>> 
>>>>> **wp-includes/functions.php**
>>>>> 
>>>>>> **wp-includes/option.php**
>>>>> 
>>>>> **wp-includes/class-wp.php**
>>>>> 
>>>>> **wp-includes/class-wp-error.php**
>>>>> 
>>>>> **wp-includes/plugin.php**
>>>>> 
>>>>> **wp-includes/pomo/mo.php**
>>>>> 
>>>>>> **wp-includes/pomo/translations.php**
>>>>>> 
>>>>>>> **wp-includes/pomo/entry.php**
>>>>>> 
>>>>>> **wp-includes/pomo/streams.php**
>>>>> 
>>>>> `require_wp_db()`
>>>>> 
>>>>>> **wp-includes/wp-db.php**
>>>>>> 
>>>>>> `new wpdb()`
>>>>>> 
>>>>>>> `wpdb::__construct()`
>>>>>>> 
>>>>>>>> `wpdb::__destruct()`
>>>>>>>> 
>>>>>>>> `wpdb::init_charset()`
>>>>>>>> 
>>>>>>>> `wpdb::db_connect()`
>>>>>>>> 
>>>>>>>>> `wpdb::set_charset()`
>>>>>>>>> 
>>>>>>>>>> `wpdb::has_cap()`
>>>>>>>>>> 
>>>>>>>>>>> `wpdb::db_version()`
>>>>>>>>> 
>>>>>>>>> `wpdb::set_sql_mode()`
>>>>>>>>> 
>>>>>>>>> `wpdb::select()`
>>>>> 
>>>>> `wp_set_wpdb_vars()`
>>>>> 
>>>>>> `wpdb::set_prefix()`
>>>>>> 
>>>>>>> `wpdb::tables()`
>>>>>>> 
>>>>>>>> `wpdb::get_blog_prefix()`
>>>>>>> 
>>>>>>> `wpdb::get_blog_prefix()`
>>>>>> 
>>>>>> `is_wp_error()`
>>>>> 
>>>>> `wp_start_object_cache()`
>>>>> 
>>>>>> `wp_using_ext_object_cache()`
>>>>>> 
>>>>>> **wp-includes/cache.php**
>>>>>> 
>>>>>> `wp_cache_init()`
>>>>>> 
>>>>>>> `new WP_Object_Cache()`
>>>>>>> 
>>>>>>>> `WP_Object_Cache::__construct()`
>>>>>>>> 
>>>>>>>>> `WP_Object_Cache::__destruct()`
>>>>>> 
>>>>>> `wp_cache_add_global_groups()`
>>>>>> 
>>>>>>> `WP_Object_Cache::add_global_groups()`
>>>>>> 
>>>>>> `wp_cache_add_non_persistent_groups()`
>>>>> 
>>>>> **wp-includes/default-filters.php**
>>>>> 
>>>>>> `add_filter()`
>>>>>> 
>>>>>>> `_wp_filter_build_unique_id()`
>>>>>> 
>>>>>> `is_admin()`
>>>>>> 
>>>>>> `add_action()`
>>>>> 
>>>>> `register_shutdown_function( 'shutdown_action_hook' )`
>>>>> 
>>>>>> `shutdown_action_hook()`
>>>>>> 
>>>>>>> `do_action( 'shutdown' )`
>>>>>>> 
>>>>>>>> `wp_ob_end_flush_all()`
>>>>> 
>>>>> **wp-includes/l10n.php**
>>>>> 
>>>>> `wp_not_installed()`
>>>>> 
>>>>>> `is_blog_installed()`
>>>>>> 
>>>>>>> `wp_cache_get()`
>>>>>>> 
>>>>>>>> `WP_Object_Cache::get()`
>>>>>>>> 
>>>>>>>>> `WP_Object_Cache::_exists()`
>>>>>>> 
>>>>>>> `wpdb::suppress_errors()`
>>>>>>> 
>>>>>>> `wp_load_alloptions()`
>>>>>>> 
>>>>>>>> `wpdb::get_results()`
>>>>>>>> 
>>>>>>>>> `wpdb::query()`
>>>>>>>>> 
>>>>>>>>>> `apply_filters()`
>>>>>>>>>> 
>>>>>>>>>> `wpdb::flush()`
>>>>>>>>>> 
>>>>>>>>>> `wpdb::_do_query()`
>>>>>>>>>> 
>>>>>>>>>> `wpdb::print_error()`
>>>>>>>> 
>>>>>>>> `wp_cache_add()`
>>>>>>>> 
>>>>>>>>> `WP_Object_Cache::add()`
>>>>>>>>> 
>>>>>>>>>> `wp_suspend_cache_addition()`
>>>>>>>>>> 
>>>>>>>>>> `WP_Object_Cache::set()`
>>>>>>> 
>>>>>>> `wpdb::get_var()`
>>>>>>> 
>>>>>>> `wp_cache_set()`
>>>>>> 
>>>>>> `nocache_headers()`
>>>>>> 
>>>>>>> `wp_get_nocache_headers()`
>>>>>> 
>>>>>> **wp-includes/kses.php**
>>>>>> 
>>>>>>> `_wp_add_global_attributes()`
>>>>>> 
>>>>>> **wp-includes/pluggable.php**
>>>>>> 
>>>>>> **wp-includes/formatting.php**
>>>>>> 
>>>>>> `wp_guess_url()`
>>>>>> 
>>>>>>> `is_ssl()`
>>>>>> 
>>>>>> `wp_redirect()`
>>>>>> 
>>>>>>> `wp_sanitize_redirect()`
>>>>>>> 
>>>>>>>> `wp_kses_no_null()`
>>>>>>>> 
>>>>>>>> `_deep_replace()`
>>>>>>> 
>>>>>>> `status_header()`
>>>>>>> 
>>>>>>>> `get_status_header_desc()`
>>>>>>>> 
>>>>>>>>> `absint()`
>>>>>> 
>>>>>> _Redirect to **wp-admin/install.php**_

## wp-admin/install.php

> **wp-load.php**
> 
>> **wp-config.php**
>> 
>>> **wp-settings.php**
>>> 
>>>> **wp-includes/load.php**
>>>> 
>>>> **wp-includes/default-constants.php**
>>>> 
>>>> `wp_initial_constants()`
>>>> 
>>>>> `is_multisite()`
>>>> 
>>>> `wp_check_php_mysql_versions()`
>>>> 
>>>> `date_default_timezone_set()`
>>>> 
>>>> `wp_unregister_GLOBALS()`
>>>> 
>>>> `wp_fix_server_vars()`
>>>> 
>>>> `wp_favicon_request()`
>>>> 
>>>> `wp_maintenance()`
>>>> 
>>>> `timer_start()`
>>>> 
>>>> `wp_debug_mode()`
>>>> 
>>>> `wp_set_lang_dir()`
>>>> 
>>>> **wp-includes/compat.php**
>>>> 
>>>> **wp-includes/functions.php**
>>>> 
>>>>> **wp-includes/option.php**
>>>> 
>>>> **wp-includes/class-wp.php**
>>>> 
>>>> **wp-includes/class-wp-error.php**
>>>> 
>>>> **wp-includes/plugin.php**
>>>> 
>>>> **wp-includes/pomo/mo.php**
>>>> 
>>>>> **wp-includes/pomo/translations.php**
>>>>> 
>>>>>> **wp-includes/pomo/entry.php**
>>>>> 
>>>>> **wp-includes/pomo/streams.php**
>>>> 
>>>> `require_wp_db()`
>>>> 
>>>>> **wp-includes/wp-db.php**
>>>>> 
>>>>> `new wpdb()`
>>>>> 
>>>>>> `wpdb::__construct()`
>>>>>> 
>>>>>>> `wpdb::__destruct()`
>>>>>>> 
>>>>>>> `wpdb::init_charset()`
>>>>>>> 
>>>>>>> `wpdb::db_connect()`
>>>>>>> 
>>>>>>>> `wpdb::set_charset()`
>>>>>>>> 
>>>>>>>>> `wpdb::has_cap()`
>>>>>>>>> 
>>>>>>>>>> `wpdb::db_version()`
>>>>>>>> 
>>>>>>>> `wpdb::set_sql_mode()`
>>>>>>>> 
>>>>>>>> `wpdb::select()`
>>>> 
>>>> `wp_set_wpdb_vars()`
>>>> 
>>>>> `wpdb::set_prefix()`
>>>>> 
>>>>>> `wpdb::tables()`
>>>>>> 
>>>>>>> `wpdb::get_blog_prefix()`
>>>>>> 
>>>>>> `wpdb::get_blog_prefix()`
>>>>> 
>>>>> `is_wp_error()`
>>>> 
>>>> `wp_start_object_cache()`
>>>> 
>>>>> `wp_using_ext_object_cache()`
>>>>> 
>>>>> **wp-includes/cache.php**
>>>>> 
>>>>> `wp_cache_init()`
>>>>> 
>>>>>> `new WP_Object_Cache()`
>>>>>> 
>>>>>>> `WP_Object_Cache::__construct()`
>>>>>>> 
>>>>>>>> `WP_Object_Cache::__destruct()`
>>>>> 
>>>>> `wp_cache_add_global_groups()`
>>>>> 
>>>>>> `WP_Object_Cache::add_global_groups()`
>>>>> 
>>>>> `wp_cache_add_non_persistent_groups()`
>>>> 
>>>> **wp-includes/default-filters.php**
>>>> 
>>>>> `add_filter()`
>>>>> 
>>>>>> `_wp_filter_build_unique_id()`
>>>>> 
>>>>> `is_admin()`
>>>>> 
>>>>> `add_action()`
>>>> 
>>>> `register_shutdown_function( 'shutdown_action_hook' )`
>>>> 
>>>>> `shutdown_action_hook()`
>>>>> 
>>>>>> `do_action( 'shutdown' )`
>>>>>> 
>>>>>>> `wp_ob_end_flush_all()`
>>>> 
>>>> **wp-includes/l10n.php**
>>>> 
>>>> `wp_not_installed()`
>>>> 
>>>>> `is_blog_installed()`
>>>>> 
>>>>>> `wp_cache_get()`
>>>>>> 
>>>>>>> `WP_Object_Cache::get()`
>>>>>>> 
>>>>>>>> `WP_Object_Cache::_exists()`
>>>>>> 
>>>>>> `wpdb::suppress_errors()`
>>>>>> 
>>>>>> `wp_load_alloptions()`
>>>>>> 
>>>>>>> `wpdb::get_results()`
>>>>>>> 
>>>>>>>> `wpdb::query()`
>>>>>>>> 
>>>>>>>>> `apply_filters()`
>>>>>>>>> 
>>>>>>>>> `wpdb::flush()`
>>>>>>>>> 
>>>>>>>>> `wpdb::_do_query()`
>>>>>>>>> 
>>>>>>>>> `wpdb::print_error()`
>>>>>>> 
>>>>>>> `wp_cache_add()`
>>>>>>> 
>>>>>>>> `WP_Object_Cache::add()`
>>>>>>>> 
>>>>>>>>> `wp_suspend_cache_addition()`
>>>>>>>>> 
>>>>>>>>> `WP_Object_Cache::set()`
>>>>>> 
>>>>>> `wpdb::get_var()`
>>>>>> 
>>>>>> `wp_cache_set()`
>>>> 
>>>> **wp-includes/class-wp-walker.php**
>>>> 
>>>> **wp-includes/class-wp-ajax-response.php**
>>>> 
>>>> **wp-includes/formatting.php**
>>>> 
>>>> **wp-includes/capabilities.php**
>>>> 
>>>> **wp-includes/query.php**
>>>> 
>>>> **wp-includes/date.php**
>>>> 
>>>> **wp-includes/theme.php**
>>>> 
>>>> **wp-includes/class-wp-theme.php**
>>>> 
>>>> **wp-includes/template.php**
>>>> 
>>>> **wp-includes/user.php**
>>>> 
>>>> **wp-includes/session.php**
>>>> 
>>>> **wp-includes/meta.php**
>>>> 
>>>> **wp-includes/general-template.php**
>>>> 
>>>> **wp-includes/link-template.php**
>>>> 
>>>> **wp-includes/author-template.php**
>>>> 
>>>> **wp-includes/post.php**
>>>> 
>>>> **wp-includes/post-template.php**
>>>> 
>>>> **wp-includes/revision.php**
>>>> 
>>>> **wp-includes/post-formats.php**
>>>> 
>>>> **wp-includes/post-thumbnail-template.php**
>>>> 
>>>> **wp-includes/category.php**
>>>> 
>>>> **wp-includes/category-template.php**
>>>> 
>>>> **wp-includes/comment.php**
>>>> 
>>>> **wp-includes/comment-template.php**
>>>> 
>>>> **wp-includes/rewrite.php**
>>>> 
>>>> **wp-includes/feed.php**
>>>> 
>>>> **wp-includes/bookmark.php**
>>>> 
>>>> **wp-includes/bookmark-template.php**
>>>> 
>>>> **wp-includes/kses.php**
>>>> 
>>>> **wp-includes/cron.php**
>>>> 
>>>> **wp-includes/deprecated.php**
>>>> 
>>>> **wp-includes/script-loader.php**
>>>> 
>>>> **wp-includes/taxonomy.php**
>>>> 
>>>> **wp-includes/update.php**
>>>> 
>>>> **wp-includes/canonical.php**
>>>> 
>>>> **wp-includes/shortcodes.php**
>>>> 
>>>> **wp-includes/class-wp-embed.php**
>>>> 
>>>> **wp-includes/media.php**
>>>> 
>>>> **wp-includes/http.php**
>>>> 
>>>> **wp-includes/class-http.php**
>>>> 
>>>> **wp-includes/widgets.php**
>>>> 
>>>> **wp-includes/nav-menu.php**
>>>> 
>>>> **wp-includes/nav-menu-template.php**
>>>> 
>>>> **wp-includes/admin-bar.php**
> 
> **wp-admin/includes/upgrade.php**
> 
> **wp-admin/includes/translation-install.php**
> 
> **wp-includes/wp-db.php**
> 
