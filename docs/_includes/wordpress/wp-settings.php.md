<p><b>wp-settings.php</b></p>

<blockquote>

{% include wordpress/wp-includes/load.php.md %}

{% include wordpress/wp-includes/default-constants.php.md %}

{% include functions/wp_initial_constants.md %}

{% include functions/wp_check_php_mysql_versions.md %}

{% include functions/wp_unregister_GLOBALS.md %}

{% include functions/wp_fix_server_vars.md %}

{% include functions/wp_favicon_request.md %}

{% include functions/wp_maintenance.md %}

{% include functions/timer_start.md %}

{% include functions/wp_debug_mode.md %}

{% include functions/wp_set_lang_dir.md %}

{% include wordpress/wp-includes/compat.php.md %}

{% include wordpress/wp-includes/functions.php.md %}

{% include wordpress/wp-includes/class-wp.php.md %}

{% include wordpress/wp-includes/class-wp-error.php.md %}

{% include wordpress/wp-includes/plugin.php.md %}

{% include wordpress/wp-includes/pomo/mo.php.md %}

{% include functions/require_wp_db.md %}

{% include functions/wp_set_wpdb_vars.md %}
 
 [`wp_start_object_cache()`](https://developer.wordpress.org/reference/functions/wp_start_object_cache/)
 
> [`wp_using_ext_object_cache()`](https://developer.wordpress.org/reference/functions/wp_using_ext_object_cache/)
> 
> **wp-includes/cache.php**
> 
> [`wp_cache_switch_to_blog()`](https://developer.wordpress.org/reference/functions/wp_cache_switch_to_blog/)
> 
>> [`WP_Object_Cache::switch_to_blog()`](https://developer.wordpress.org/reference/classes/wp_object_cache/switch_to_blog/)
> 
> [`wp_cache_init()`](https://developer.wordpress.org/reference/functions/wp_cache_init/)
> 
>> [`new WP_Object_Cache()`](https://developer.wordpress.org/reference/classes/wp_object_cache/)
>> 
>>> [`WP_Object_Cache::__construct()`](https://developer.wordpress.org/reference/classes/wp_object_cache/__construct/)
>>> 
>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>> 
>>>> [`WP_Object_Cache::__destruct()`](https://developer.wordpress.org/reference/classes/wp_object_cache/__destruct/)
> 
> [`wp_cache_add_global_groups()`](https://developer.wordpress.org/reference/functions/wp_cache_add_global_groups/)
> 
>> [`WP_Object_Cache::add_global_groups()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add_global_groups/)
> 
> [`wp_cache_add_non_persistent_groups()`](https://developer.wordpress.org/reference/functions/wp_cache_add_non_persistent_groups/)
 
 **wp-includes/default-filters.php**
 
> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
> 
>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
> 
> [`is_admin()`](https://developer.wordpress.org/reference/functions/is_admin/)
> 
> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
> 
>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>> 
>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
 
 [`shutdown_action_hook()`](https://developer.wordpress.org/reference/functions/shutdown_action_hook/)
 
> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`shutdown`](https://developer.wordpress.org/reference/hooks/shutdown/)
> 
>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>> 
>> [`wp_ob_end_flush_all()`](https://developer.wordpress.org/reference/functions/wp_ob_end_flush_all/)
> 
> [`wp_cache_close()`](https://developer.wordpress.org/reference/functions/wp_cache_close/)
 
 **wp-includes/l10n.php**
 
 [`wp_not_installed()`](https://developer.wordpress.org/reference/functions/wp_not_installed/)
 
> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
> 
> [`is_blog_installed()`](https://developer.wordpress.org/reference/functions/is_blog_installed/)
> 
>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>> 
>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>> 
>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>> 
>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>> 
>> [`wp_load_alloptions()`](https://developer.wordpress.org/reference/functions/wp_load_alloptions/)
>> 
>>> [`wpdb::get_results()`](https://developer.wordpress.org/reference/classes/wpdb/get_results/)
>>> 
>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>> 
>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>> 
>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>> 
>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>> 
>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>> 
>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>> 
>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
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
>>>>>>>>>>> 
>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>> 
>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>> 
>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>> 
>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>> 
>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>> 
>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>> 
>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>> 
>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>> 
>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>> 
>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>> 
>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>> 
>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>> 
>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>> 
>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>> 
>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>> 
>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>> 
>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>> 
>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>> 
>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>> 
>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>> 
>>>>>>>>> **wp-includes/version.php**
>>>>>>>>> 
>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>> 
>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>> 
>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>> 
>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>> 
>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>> 
>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>> 
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
>>>>>>>>>>>> 
>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>> 
>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>> 
>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>> 
>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>> 
>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>> 
>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>> 
>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>> 
>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>> 
>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>> 
>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>> 
>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>> 
>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>> 
>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>> 
>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>> 
>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>> 
>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>> 
>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>> 
>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
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
>>>>>> 
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
>>>>>>>>>>> 
>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
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
>>>>> 
>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>> 
>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>> 
>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>> 
>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>> 
>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>> 
>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
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
>>>>>>>>>> 
>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>> 
>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>> 
>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>> 
>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>> 
>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>> 
>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>> 
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
>>>>>> 
>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>> 
>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>> 
>>> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
>>> 
>>>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>>>> 
>>>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>>>> 
>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>> 
>>>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
>> 
>> [`wpdb::get_var()`](https://developer.wordpress.org/reference/classes/wpdb/get_var/)
>> 
>> [`wp_cache_set()`](https://developer.wordpress.org/reference/functions/wp_cache_set/)
>> 
>> [`wpdb::tables()`](https://developer.wordpress.org/reference/classes/wpdb/tables/)
>> 
>> [`wpdb::get_results()`](https://developer.wordpress.org/reference/classes/wpdb/get_results/)
>> 
>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>> 
>>> **wp-includes/version.php**
>>> 
>>> **wp-includes/pomo/mo.php**
>>> 
>>> **wp-includes/l10n.php**
>>> 
>>> **wp-includes/locale.php**
>>> 
>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>> 
>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>> 
>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>> 
>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>> 
>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
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
>>>>>> 
>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>> 
>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>> 
>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>> 
>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>> 
>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>> 
>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>> 
>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>> 
>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>> 
>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>> 
>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>> 
>>>> **wp-includes/version.php**
>>>> 
>>>> **wp-includes/pomo/mo.php**
>>>> 
>>>> **wp-includes/l10n.php**
>>>> 
>>>> **wp-includes/locale.php**
>>>> 
>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>> 
>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>> 
>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>> 
>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>> 
>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>> 
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
>>>>>>> 
>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>> 
>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>> 
>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>> 
>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>> 
>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>> 
>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>> 
>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>> 
>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>> 
>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>> 
>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>> 
>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>> 
>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>> 
>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>> 
>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>> 
>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>> 
>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>> 
>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>> 
>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>> 
>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>> 
>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>> 
>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>> 
>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>> 
>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>> 
>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>> 
>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>> 
>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>> 
>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
>>> 
>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>> 
>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>> 
>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>> 
>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>> 
>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>> 
>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>> 
>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>> 
>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>> 
>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>> 
>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>> 
>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>> 
>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>> 
>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
> 
> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
> 
>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>> 
>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>> 
>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
> 
> **wp-includes/kses.php**
> 
>> [`_wp_add_global_attributes()`](https://developer.wordpress.org/reference/functions/_wp_add_global_attributes/)
> 
> **wp-includes/pluggable.php**
> 
> **wp-includes/formatting.php**
> 
> [`wp_guess_url()`](https://developer.wordpress.org/reference/functions/wp_guess_url/)
> 
>> [`is_ssl()`](https://developer.wordpress.org/reference/functions/is_ssl/)
> 
> [`wp_redirect()`](https://developer.wordpress.org/reference/functions/wp_redirect/)
> 
>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_redirect`](https://developer.wordpress.org/reference/hooks/wp_redirect/)
>> 
>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>> 
>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_redirect_status`](https://developer.wordpress.org/reference/hooks/wp_redirect_status/)
>> 
>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>> 
>> [`wp_sanitize_redirect()`](https://developer.wordpress.org/reference/functions/wp_sanitize_redirect/)
>> 
>>> [`wp_kses_no_null()`](https://developer.wordpress.org/reference/functions/wp_kses_no_null/)
>>> 
>>> [`_deep_replace()`](https://developer.wordpress.org/reference/functions/_deep_replace/)
>> 
>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>> 
>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>> 
>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>> 
>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>> 
>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>> 
>> _Redirect to **[wp-admin/install.php]({{ site.baseurl }}/wp-admin/install.html)**_

</blockquote>
