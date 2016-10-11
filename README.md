# WP-Shakyo 4.0

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
>>>>> [`wp_initial_constants()`](https://developer.wordpress.org/reference/functions/wp_initial_constants/)
>>>>> 
>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>> 
>>>>> [`wp_check_php_mysql_versions()`](https://developer.wordpress.org/reference/functions/wp_check_php_mysql_versions/)
>>>>> 
>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>> 
>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>> 
>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>> 
>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>> 
>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>> 
>>>>> [`wp_unregister_GLOBALS()`](https://developer.wordpress.org/reference/functions/wp_unregister_globals/)
>>>>> 
>>>>> [`wp_fix_server_vars()`](https://developer.wordpress.org/reference/functions/wp_fix_server_vars/)
>>>>> 
>>>>> [`wp_favicon_request()`](https://developer.wordpress.org/reference/functions/wp_favicon_request/)
>>>>> 
>>>>> [`wp_maintenance()`](https://developer.wordpress.org/reference/functions/wp_maintenance/)
>>>>> 
>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>> 
>>>>>>> **wp-includes/version.php**
>>>>>>> 
>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>> 
>>>>>>> **wp-includes/l10n.php**
>>>>>>> 
>>>>>>> **wp-includes/locale.php**
>>>>>>> 
>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>> 
>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>> 
>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>> 
>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>> 
>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>> 
>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>> 
>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>> 
>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>> 
>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
>>>>>> 
>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>> 
>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>> 
>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>> 
>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>> 
>>>>> [`timer_start()`](https://developer.wordpress.org/reference/functions/timer_start/)
>>>>> 
>>>>> [`wp_debug_mode()`](https://developer.wordpress.org/reference/functions/wp_debug_mode/)
>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`enable_wp_debug_mode_checks`](https://developer.wordpress.org/reference/hooks/enable_wp_debug_mode_checks/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>> 
>>>>> [`wp_set_lang_dir()`](https://developer.wordpress.org/reference/functions/wp_set_lang_dir/)
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
>>>>> [`require_wp_db()`](https://developer.wordpress.org/reference/functions/require_wp_db/)
>>>>> 
>>>>>> **wp-includes/wp-db.php**
>>>>>> 
>>>>>> [`new wpdb()`](https://developer.wordpress.org/reference/classes/wpdb/)
>>>>>> 
>>>>>>> [`wpdb::__construct()`](https://developer.wordpress.org/reference/classes/wpdb/__construct/)
>>>>>>> 
>>>>>>>> [`wpdb::__destruct()`](https://developer.wordpress.org/reference/classes/wpdb/__destruct/)
>>>>>>>> 
>>>>>>>> [`wpdb::show_errors()`](https://developer.wordpress.org/reference/classes/wpdb/show_errors/)
>>>>>>>> 
>>>>>>>> [`wpdb::init_charset()`](https://developer.wordpress.org/reference/classes/wpdb/init_charset/)
>>>>>>>> 
>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>> 
>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>> 
>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>> 
>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>> 
>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>> 
>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>> 
>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>> 
>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>> 
>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>> 
>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>> 
>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>> 
>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>> 
>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>> 
>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>> 
>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>> 
>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>> 
>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>> 
>>>>> [`wp_set_wpdb_vars()`](https://developer.wordpress.org/reference/functions/wp_set_wpdb_vars/)
>>>>> 
>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>> 
>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>> 
>>>>>>>> **wp-includes/version.php**
>>>>>>>> 
>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>> 
>>>>>>>> **wp-includes/l10n.php**
>>>>>>>> 
>>>>>>>> **wp-includes/locale.php**
>>>>>>>> 
>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>> 
>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>> 
>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>> 
>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>> 
>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>> 
>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>> 
>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>> 
>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>> 
>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>> 
>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>> 
>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
>>>>>>> 
>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>> 
>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>> 
>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>> 
>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>
>>>>>> [`wpdb::set_prefix()`](https://developer.wordpress.org/reference/classes/wpdb/set_prefix/)
>>>>>> 
>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>> 
>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>> 
>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>> 
>>>>>>> [`wpdb::tables()`](https://developer.wordpress.org/reference/classes/wpdb/tables/)
>>>>>>> 
>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>> 
>>>>>>>> [`wpdb::get_blog_prefix()`](https://developer.wordpress.org/reference/classes/wpdb/get_blog_prefix/)
>>>>>>>> 
>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>> 
>>>>>>> [`wpdb::get_blog_prefix()`](https://developer.wordpress.org/reference/classes/wpdb/get_blog_prefix/)
>>>>>>> 
>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>> 
>>>>>> [`is_wp_error()`](https://developer.wordpress.org/reference/functions/is_wp_error/)
>>>>> 
>>>>> [`wp_start_object_cache()`](https://developer.wordpress.org/reference/functions/wp_start_object_cache/)
>>>>> 
>>>>>> [`wp_using_ext_object_cache()`](https://developer.wordpress.org/reference/functions/wp_using_ext_object_cache/)
>>>>>> 
>>>>>> **wp-includes/cache.php**
>>>>>> 
>>>>>> [`wp_cache_switch_to_blog()`](https://developer.wordpress.org/reference/functions/wp_cache_switch_to_blog/)
>>>>>> 
>>>>>>> [`WP_Object_Cache::switch_to_blog()`](https://developer.wordpress.org/reference/classes/wp_object_cache/switch_to_blog/)
>>>>>> 
>>>>>> [`wp_cache_init()`](https://developer.wordpress.org/reference/functions/wp_cache_init/)
>>>>>> 
>>>>>>> [`new WP_Object_Cache()`](https://developer.wordpress.org/reference/classes/wp_object_cache/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::__construct()`](https://developer.wordpress.org/reference/classes/wp_object_cache/__construct/)
>>>>>>>> 
>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::__destruct()`](https://developer.wordpress.org/reference/classes/wp_object_cache/__destruct/)
>>>>>> 
>>>>>> [`wp_cache_add_global_groups()`](https://developer.wordpress.org/reference/functions/wp_cache_add_global_groups/)
>>>>>> 
>>>>>>> [`WP_Object_Cache::add_global_groups()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add_global_groups/)
>>>>>> 
>>>>>> [`wp_cache_add_non_persistent_groups()`](https://developer.wordpress.org/reference/functions/wp_cache_add_non_persistent_groups/)
>>>>> 
>>>>> **wp-includes/default-filters.php**
>>>>> 
>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>> 
>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>> 
>>>>>> [`is_admin()`](https://developer.wordpress.org/reference/functions/is_admin/)
>>>>>> 
>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>> 
>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>> 
>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>> 
>>>>> [`shutdown_action_hook()`](https://developer.wordpress.org/reference/functions/shutdown_action_hook/)
>>>>> 
>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`shutdown`](https://developer.wordpress.org/reference/hooks/shutdown/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`wp_ob_end_flush_all()`](https://developer.wordpress.org/reference/functions/wp_ob_end_flush_all/)
>>>>>> 
>>>>>> [`wp_cache_close()`](https://developer.wordpress.org/reference/functions/wp_cache_close/)
>>>>> 
>>>>> **wp-includes/l10n.php**
>>>>> 
>>>>> [`wp_not_installed()`](https://developer.wordpress.org/reference/functions/wp_not_installed/)
>>>>> 
>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>> 
>>>>>> [`is_blog_installed()`](https://developer.wordpress.org/reference/functions/is_blog_installed/)
>>>>>> 
>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>> 
>>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>>> 
>>>>>>> [`wp_load_alloptions()`](https://developer.wordpress.org/reference/functions/wp_load_alloptions/)
>>>>>>> 
>>>>>>>> [`wpdb::get_results()`](https://developer.wordpress.org/reference/classes/wpdb/get_results/)
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
>>>>>>> [`wpdb::get_var()`](https://developer.wordpress.org/reference/classes/wpdb/get_var/)
>>>>>>> 
>>>>>>> [`wp_cache_set()`](https://developer.wordpress.org/reference/functions/wp_cache_set/)
>>>>>>> 
>>>>>>> [`wpdb::tables()`](https://developer.wordpress.org/reference/classes/wpdb/tables/)
>>>>>>> 
>>>>>>> [`wpdb::get_results()`](https://developer.wordpress.org/reference/classes/wpdb/get_results/)
>>>>>>> 
>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>> 
>>>>>>>> **wp-includes/version.php**
>>>>>>>> 
>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>> 
>>>>>>>> **wp-includes/l10n.php**
>>>>>>>> 
>>>>>>>> **wp-includes/locale.php**
>>>>>>>> 
>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>> 
>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>> 
>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>> 
>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>> 
>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>> 
>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>> 
>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>> 
>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>> 
>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>> 
>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>> 
>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>> **wp-includes/class.wp-dependencies.php**
>>>>> 
>>>>> **wp-includes/class.wp-scripts.php**
>>>>> 
>>>>> **wp-includes/functions.wp-scripts.php**
>>>>> 
>>>>> **wp-includes/class.wp-styles.php**
>>>>> 
>>>>> **wp-includes/functions.wp-styles.php**
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
>>>>> `new WP_Embed()`
>>>>> 
>>>>>> `WP_Embed::__construct()`
>>>>>> 
>>>>>>> `add_shortcode()`
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
>>>> 
>>>> `wp_plugin_directory_constants()`
>>>> 
>>>>> `get_option()`
>>>>> 
>>>>>> `wpdb::get_row()`
> 
> **wp-admin/includes/upgrade.php**
> 
> **wp-admin/includes/translation-install.php**
> 
> **wp-includes/wp-db.php**
> 
