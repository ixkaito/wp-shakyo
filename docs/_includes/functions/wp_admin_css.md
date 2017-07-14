<p><code><a href="https://developer.wordpress.org/reference/functions/wp_admin_css/">wp_admin_css()</a></code></p>

<blockquote>

{% include classes/WP_Styles.md %}

 [`WP_Dependencies::query()`](https://developer.wordpress.org/reference/classes/wp_dependencies/query/)
 
 [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
 
 [`wp_print_styles()`](https://developer.wordpress.org/reference/functions/wp_print_styles/)
 
> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`wp_print_styles`](https://developer.wordpress.org/reference/hooks/wp_print_styles/)
> 
>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
> 
> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
> 
> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
> 
>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>> 
>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>> 
>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>> 
>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
> [`__()`](https://developer.wordpress.org/reference/functions/__/)
> 
>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>> 
>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>> 
>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>> 
>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>> 
>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>> 
>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
> 
> [`new WP_Styles()`](https://developer.wordpress.org/reference/classes/wp_styles/)
> 
>> [`WP_Styles::__construct()`](https://developer.wordpress.org/reference/classes/wp_styles/__construct/)
>> 
>>> [`do_action_ref_array()`](https://developer.wordpress.org/reference/functions/do_action_ref_array/) - [`wp_default_styles`](https://developer.wordpress.org/reference/hooks/wp_default_styles/)
>>> 
>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>> 
>>>> [`wp_default_styles()`](https://developer.wordpress.org/reference/functions/wp_default_styles/)
>>>> 
>>>>> **wp-includes/version.php**
>>>>> 
>>>>> [`site_url()`](https://developer.wordpress.org/reference/functions/site_url/)
>>>>> 
>>>>>> [`get_site_url()`](https://developer.wordpress.org/reference/functions/get_site_url/)
>>>>>> 
>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>> 
>>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_option_{}`](https://developer.wordpress.org/reference/hooks/pre_option_option/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_option_{}`](https://developer.wordpress.org/reference/hooks/default_option_option/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`wp_load_alloptions()`](https://developer.wordpress.org/reference/functions/wp_load_alloptions/)
>>>>>>>> 
>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>> 
>>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::get_results()`](https://developer.wordpress.org/reference/classes/wpdb/get_results/)
>>>>>>>>> 
>>>>>>>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>>>> 
>>>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
>>>>>>>> 
>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>> 
>>>>>>>> [`wpdb::get_row()`](https://developer.wordpress.org/reference/classes/wpdb/get_row/)
>>>>>>>> 
>>>>>>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>>>>>>> 
>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>>>>>>> 
>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
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
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>>> 
>>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
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
>>>>>>>>> 
>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>> 
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
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>> 
>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>>> 
>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>> 
>>>>>>>> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>>>>>>>>> 
>>>>>>>>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
>>>>>>>> 
>>>>>>>> [`wp_cache_set()`](https://developer.wordpress.org/reference/functions/wp_cache_set/)
>>>>>>>> 
>>>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>>>> 
>>>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>>>> 
>>>>>>>> [`untrailingslashit()`](https://developer.wordpress.org/reference/functions/untrailingslashit/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`option_{}`](https://developer.wordpress.org/reference/hooks/option_option/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>>>> 
>>>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
>>>>>>> 
>>>>>>> `switch_to_blog()`
>>>>>>> 
>>>>>>> `restore_current_blog()`
>>>>>>> 
>>>>>>> [`set_url_scheme()`](https://developer.wordpress.org/reference/functions/set_url_scheme/)
>>>>>>> 
>>>>>>>> [`is_ssl()`](https://developer.wordpress.org/reference/functions/is_ssl/)
>>>>>>>> 
>>>>>>>> [`force_ssl_admin()`](https://developer.wordpress.org/reference/functions/force_ssl_admin/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`set_url_scheme`](https://developer.wordpress.org/reference/hooks/set_url_scheme/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`site_url`](https://developer.wordpress.org/reference/hooks/site_url/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>> 
>>>>> [`wp_guess_url()`](https://developer.wordpress.org/reference/functions/wp_guess_url/)
>>>>> 
>>>>>> [`is_ssl()`](https://developer.wordpress.org/reference/functions/is_ssl/)
>>>>> 
>>>>> [`get_bloginfo()`](https://developer.wordpress.org/reference/functions/get_bloginfo/)
>>>>> 
>>>>>> `_deprecated_argument()`
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
>>>>>> [`home_url()`](https://developer.wordpress.org/reference/functions/home_url/)
>>>>>> 
>>>>>>> [`get_home_url()`](https://developer.wordpress.org/reference/functions/get_home_url/)
>>>>>>> 
>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>> 
>>>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_option_{}`](https://developer.wordpress.org/reference/hooks/pre_option_option/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_option_{}`](https://developer.wordpress.org/reference/hooks/default_option_option/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`wp_load_alloptions()`](https://developer.wordpress.org/reference/functions/wp_load_alloptions/)
>>>>>>>>> 
>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>>> 
>>>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::get_results()`](https://developer.wordpress.org/reference/classes/wpdb/get_results/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
>>>>>>>>> 
>>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::get_row()`](https://developer.wordpress.org/reference/classes/wpdb/get_row/)
>>>>>>>>> 
>>>>>>>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>>>> 
>>>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>>> 
>>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
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
>>>>>>>>> 
>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>> 
>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>> 
>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
>>>>>>>>> 
>>>>>>>>> [`wp_cache_set()`](https://developer.wordpress.org/reference/functions/wp_cache_set/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>>>>> 
>>>>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>>>>> 
>>>>>>>>> [`untrailingslashit()`](https://developer.wordpress.org/reference/functions/untrailingslashit/)
>>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`option_{}`](https://developer.wordpress.org/reference/hooks/option_option/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>>>>> 
>>>>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
>>>>>>>> 
>>>>>>>> `switch_to_blog()`
>>>>>>>> 
>>>>>>>> `restore_current_blog()`
>>>>>>>> 
>>>>>>>> [`is_ssl()`](https://developer.wordpress.org/reference/functions/is_ssl/)
>>>>>>>> 
>>>>>>>> [`is_admin()`](https://developer.wordpress.org/reference/functions/is_admin/)
>>>>>>>> 
>>>>>>>> [`set_url_scheme()`](https://developer.wordpress.org/reference/functions/set_url_scheme/)
>>>>>>>> 
>>>>>>>>> [`is_ssl()`](https://developer.wordpress.org/reference/functions/is_ssl/)
>>>>>>>>> 
>>>>>>>>> [`force_ssl_admin()`](https://developer.wordpress.org/reference/functions/force_ssl_admin/)
>>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`set_url_scheme`](https://developer.wordpress.org/reference/hooks/set_url_scheme/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`home_url`](https://developer.wordpress.org/reference/hooks/home_url/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`site_url()`](https://developer.wordpress.org/reference/functions/site_url/)
>>>>>> 
>>>>>>> [`get_site_url()`](https://developer.wordpress.org/reference/functions/get_site_url/)
>>>>>>> 
>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>> 
>>>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_option_{}`](https://developer.wordpress.org/reference/hooks/pre_option_option/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_option_{}`](https://developer.wordpress.org/reference/hooks/default_option_option/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`wp_load_alloptions()`](https://developer.wordpress.org/reference/functions/wp_load_alloptions/)
>>>>>>>>> 
>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>>> 
>>>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::get_results()`](https://developer.wordpress.org/reference/classes/wpdb/get_results/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
>>>>>>>>> 
>>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::get_row()`](https://developer.wordpress.org/reference/classes/wpdb/get_row/)
>>>>>>>>> 
>>>>>>>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>>>> 
>>>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>>> 
>>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
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
>>>>>>>>> 
>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>> 
>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>> 
>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
>>>>>>>>> 
>>>>>>>>> [`wp_cache_set()`](https://developer.wordpress.org/reference/functions/wp_cache_set/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>>>>> 
>>>>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>>>>> 
>>>>>>>>> [`untrailingslashit()`](https://developer.wordpress.org/reference/functions/untrailingslashit/)
>>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`option_{}`](https://developer.wordpress.org/reference/hooks/option_option/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>>>>> 
>>>>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
>>>>>>>> 
>>>>>>>> `switch_to_blog()`
>>>>>>>> 
>>>>>>>> `restore_current_blog()`
>>>>>>>> 
>>>>>>>> [`set_url_scheme()`](https://developer.wordpress.org/reference/functions/set_url_scheme/)
>>>>>>>> 
>>>>>>>>> [`is_ssl()`](https://developer.wordpress.org/reference/functions/is_ssl/)
>>>>>>>>> 
>>>>>>>>> [`force_ssl_admin()`](https://developer.wordpress.org/reference/functions/force_ssl_admin/)
>>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`set_url_scheme`](https://developer.wordpress.org/reference/hooks/set_url_scheme/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`site_url`](https://developer.wordpress.org/reference/hooks/site_url/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_option_{}`](https://developer.wordpress.org/reference/hooks/pre_option_option/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_option_{}`](https://developer.wordpress.org/reference/hooks/default_option_option/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`wp_load_alloptions()`](https://developer.wordpress.org/reference/functions/wp_load_alloptions/)
>>>>>>> 
>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>> 
>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>> 
>>>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>>>> 
>>>>>>>> [`wpdb::get_results()`](https://developer.wordpress.org/reference/classes/wpdb/get_results/)
>>>>>>>> 
>>>>>>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>>>>>>> 
>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>>>>>>> 
>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
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
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>>> 
>>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
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
>>>>>>>> 
>>>>>>>> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>>>>>>>>> 
>>>>>>>>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
>>>>>>> 
>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>> 
>>>>>>> [`wpdb::get_row()`](https://developer.wordpress.org/reference/classes/wpdb/get_row/)
>>>>>>> 
>>>>>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>>>>>> 
>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>>> 
>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
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
>>>>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
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
>>>>>>>>>>> 
>>>>>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>>>>>> 
>>>>>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
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
>>>>>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>>>>>> 
>>>>>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>> 
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
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>> 
>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>>> 
>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>> 
>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>> 
>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>> 
>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>> 
>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>> 
>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>> 
>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>> 
>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>> 
>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>> 
>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>> 
>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
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
>>>>>>> 
>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>> 
>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>> 
>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>> 
>>>>>>> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>>>>>>>> 
>>>>>>>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
>>>>>>> 
>>>>>>> [`wp_cache_set()`](https://developer.wordpress.org/reference/functions/wp_cache_set/)
>>>>>>> 
>>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>>> 
>>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>>> 
>>>>>>> [`untrailingslashit()`](https://developer.wordpress.org/reference/functions/untrailingslashit/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`option_{}`](https://developer.wordpress.org/reference/hooks/option_option/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>>> 
>>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
>>>>>> 
>>>>>> `get_feed_link()`
>>>>>> 
>>>>>> `get_stylesheet_uri()`
>>>>>> 
>>>>>> `get_stylesheet_directory_uri()`
>>>>>> 
>>>>>> [`get_locale()`](https://developer.wordpress.org/reference/functions/get_locale/)
>>>>>> 
>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>> 
>>>>>>> [`get_site_option()`](https://developer.wordpress.org/reference/functions/get_site_option/)
>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_site_option_{}`](https://developer.wordpress.org/reference/hooks/pre_site_option_option-5/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>> 
>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>> 
>>>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_option_{}`](https://developer.wordpress.org/reference/hooks/pre_option_option/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_option_{}`](https://developer.wordpress.org/reference/hooks/default_option_option/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`wp_load_alloptions()`](https://developer.wordpress.org/reference/functions/wp_load_alloptions/)
>>>>>>>>> 
>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>>> 
>>>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::get_results()`](https://developer.wordpress.org/reference/classes/wpdb/get_results/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
>>>>>>>>> 
>>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::get_row()`](https://developer.wordpress.org/reference/classes/wpdb/get_row/)
>>>>>>>>> 
>>>>>>>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>>>> 
>>>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>>> 
>>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
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
>>>>>>>>> 
>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>> 
>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>> 
>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
>>>>>>>>> 
>>>>>>>>> [`wp_cache_set()`](https://developer.wordpress.org/reference/functions/wp_cache_set/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>>>>> 
>>>>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>>>>> 
>>>>>>>>> [`untrailingslashit()`](https://developer.wordpress.org/reference/functions/untrailingslashit/)
>>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`option_{}`](https://developer.wordpress.org/reference/hooks/option_option/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>>>>> 
>>>>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
>>>>>>>> 
>>>>>>>> [`wpdb::get_row()`](https://developer.wordpress.org/reference/classes/wpdb/get_row/)
>>>>>>>> 
>>>>>>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>>>>>>> 
>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>>>>>>> 
>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
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
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>>> 
>>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
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
>>>>>>>>> 
>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>> 
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
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>> 
>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>>> 
>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>> 
>>>>>>>>> [`wpdb::escape_by_ref()`](https://developer.wordpress.org/reference/classes/wpdb/escape_by_ref/)
>>>>>>>>> 
>>>>>>>>>> [`wpdb::_real_escape()`](https://developer.wordpress.org/reference/classes/wpdb/_real_escape/)
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
>>>>>>>> 
>>>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>>>> 
>>>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
>>>>>>>> 
>>>>>>>> [`wp_cache_set()`](https://developer.wordpress.org/reference/functions/wp_cache_set/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_site_option_{}`](https://developer.wordpress.org/reference/hooks/default_site_option_option-5/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`site_option_{}`](https://developer.wordpress.org/reference/hooks/site_option_option-5/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_option_{}`](https://developer.wordpress.org/reference/hooks/pre_option_option/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_option_{}`](https://developer.wordpress.org/reference/hooks/default_option_option/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`wp_load_alloptions()`](https://developer.wordpress.org/reference/functions/wp_load_alloptions/)
>>>>>>>> 
>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>> 
>>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::get_results()`](https://developer.wordpress.org/reference/classes/wpdb/get_results/)
>>>>>>>>> 
>>>>>>>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>>>> 
>>>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>>>> 
>>>>>>>>>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
>>>>>>>> 
>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>> 
>>>>>>>> [`wpdb::get_row()`](https://developer.wordpress.org/reference/classes/wpdb/get_row/)
>>>>>>>> 
>>>>>>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>>>>>>> 
>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>>>>>>> 
>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
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
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>>> 
>>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
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
>>>>>>>>> 
>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>> 
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
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>> 
>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>>> 
>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>> 
>>>>>>>> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>>>>>>>>> 
>>>>>>>>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
>>>>>>>> 
>>>>>>>> [`wp_cache_set()`](https://developer.wordpress.org/reference/functions/wp_cache_set/)
>>>>>>>> 
>>>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>>>> 
>>>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>>>> 
>>>>>>>> [`untrailingslashit()`](https://developer.wordpress.org/reference/functions/untrailingslashit/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`option_{}`](https://developer.wordpress.org/reference/hooks/option_option/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>>>> 
>>>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`locale`](https://developer.wordpress.org/reference/hooks/locale/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>> 
>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`bloginfo_url`](https://developer.wordpress.org/reference/hooks/bloginfo_url/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`bloginfo`](https://developer.wordpress.org/reference/hooks/bloginfo/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>> 
>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>> 
>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>> 
>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>> 
>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>> 
>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>> 
>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>> 
>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>> 
>>>>> [`WP_Dependencies::add()`](https://developer.wordpress.org/reference/classes/wp_dependencies/add/)
>>>>> 
>>>>>> [`new _WP_Dependency()`](https://developer.wordpress.org/reference/classes/_wp_dependency/)
>>>>>> 
>>>>>>> [`_WP_Dependency::__construct()`](https://developer.wordpress.org/reference/classes/_wp_dependency/__construct/)
>>>>> 
>>>>> [`WP_Dependencies::add_data()`](https://developer.wordpress.org/reference/classes/wp_dependencies/add_data/)
>>>>> 
>>>>>> [`_WP_Dependency::add_data()`](https://developer.wordpress.org/reference/classes/_wp_dependency/add_data/)
> 
> [`WP_Dependencies::do_items()`](https://developer.wordpress.org/reference/classes/wp_dependencies/do_items/)
> 
>> [`WP_Styles::all_deps()`](https://developer.wordpress.org/reference/classes/wp_styles/all_deps/)
>> 
>>> [`WP_Dependencies::all_deps()`](https://developer.wordpress.org/reference/classes/wp_dependencies/all_deps/)
>>> 
>>>> [`WP_Dependencies::set_group()`](https://developer.wordpress.org/reference/classes/wp_dependencies/set_group/)
>>> 
>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`print_styles_array`](https://developer.wordpress.org/reference/hooks/print_styles_array/)
>>> 
>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>> 
>> [`WP_Styles::do_item()`](https://developer.wordpress.org/reference/classes/wp_styles/do_item/)
>> 
>>> [`WP_Dependencies::do_item()`](https://developer.wordpress.org/reference/classes/wp_dependencies/do_item/)
>>> 
>>> `WP_Styles::in_default_dir()`
>>> 
>>> [`WP_Styles::print_inline_style()`](https://developer.wordpress.org/reference/classes/wp_styles/print_inline_style/)
>>> 
>>>> [`WP_Dependencies::get_data()`](https://developer.wordpress.org/reference/classes/wp_dependencies/get_data/)
>>> 
>>> [`esc_attr()`](https://developer.wordpress.org/reference/functions/esc_attr/)
>>> 
>>>> [`wp_check_invalid_utf8()`](https://developer.wordpress.org/reference/functions/wp_check_invalid_utf8/)
>>>> 
>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_option_{}`](https://developer.wordpress.org/reference/hooks/pre_option_option/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>> 
>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_option_{}`](https://developer.wordpress.org/reference/hooks/default_option_option/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`wp_load_alloptions()`](https://developer.wordpress.org/reference/functions/wp_load_alloptions/)
>>>>>> 
>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>> 
>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>> 
>>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>>> 
>>>>>>> [`wpdb::get_results()`](https://developer.wordpress.org/reference/classes/wpdb/get_results/)
>>>>>>> 
>>>>>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>>>>>> 
>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>>> 
>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
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
>>>>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
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
>>>>>>>>>>> 
>>>>>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>>>>>> 
>>>>>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
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
>>>>>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>>>>>> 
>>>>>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>>> 
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
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>>> 
>>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>>>> 
>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>>>>>>>> 
>>>>>>>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
>>>>>> 
>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>> 
>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>> 
>>>>>> [`wpdb::get_row()`](https://developer.wordpress.org/reference/classes/wpdb/get_row/)
>>>>>> 
>>>>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>>>>> 
>>>>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>>>>> 
>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>> 
>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
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
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
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
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>>> 
>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>> 
>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>> 
>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>>>> 
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
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>> 
>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>>>>> 
>>>>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>>>>> 
>>>>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
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
>>>>>>>> 
>>>>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>>>>> 
>>>>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>> 
>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>> 
>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>> 
>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>> 
>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>> 
>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>> 
>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>> 
>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>> 
>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>> 
>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>> 
>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>> 
>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>> 
>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
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
>>>>>>> 
>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>> 
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
>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>> 
>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>> 
>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
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
>>>>>> 
>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>> 
>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>> 
>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
>>>>>> 
>>>>>>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>>>>>>> 
>>>>>>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>>>>>>> 
>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>> 
>>>>>>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
>>>>>> 
>>>>>> [`wp_cache_set()`](https://developer.wordpress.org/reference/functions/wp_cache_set/)
>>>>>> 
>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>> 
>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>> 
>>>>>> [`untrailingslashit()`](https://developer.wordpress.org/reference/functions/untrailingslashit/)
>>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`option_{}`](https://developer.wordpress.org/reference/hooks/option_option/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>> 
>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
>>>> 
>>>> [`_wp_specialchars()`](https://developer.wordpress.org/reference/functions/_wp_specialchars/)
>>>> 
>>>>> [`wp_load_alloptions()`](https://developer.wordpress.org/reference/functions/wp_load_alloptions/)
>>>>> 
>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>> 
>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>> 
>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>> 
>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>> 
>>>>>> [`wpdb::get_results()`](https://developer.wordpress.org/reference/classes/wpdb/get_results/)
>>>>>> 
>>>>>>> [`wpdb::query()`](https://developer.wordpress.org/reference/classes/wpdb/query/)
>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`query`](https://developer.wordpress.org/reference/hooks/query/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`wpdb::flush()`](https://developer.wordpress.org/reference/classes/wpdb/flush/)
>>>>>>>> 
>>>>>>>> [`wpdb::check_connection()`](https://developer.wordpress.org/reference/classes/wpdb/check_connection/)
>>>>>>>> 
>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>>>> 
>>>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
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
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
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
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::prepare()`](https://developer.wordpress.org/reference/classes/wpdb/prepare/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>>>> 
>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>>>> 
>>>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
>>>>>>>>> 
>>>>>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>>>>>> 
>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
>>>>>>>>> 
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
>>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>>> 
>>>>>>>>>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>>>>>> 
>>>>>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>>>>>> 
>>>>>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>> 
>>>>>>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>>>>>>> 
>>>>>>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
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
>>>>>>>> 
>>>>>>>> [`wpdb::_do_query()`](https://developer.wordpress.org/reference/classes/wpdb/_do_query/)
>>>>>>>> 
>>>>>>>>> [`wpdb::timer_start()`](https://developer.wordpress.org/reference/classes/wpdb/timer_start/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::timer_stop()`](https://developer.wordpress.org/reference/classes/wpdb/timer_stop/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>> 
>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
>>>>>>>> 
>>>>>>>> [`wpdb::print_error()`](https://developer.wordpress.org/reference/classes/wpdb/print_error/)
>>>>>>>> 
>>>>>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>>>>>> 
>>>>>>>>>> **wp-includes/version.php**
>>>>>>>>>> 
>>>>>>>>>> **wp-includes/pomo/mo.php**
>>>>>>>>>> 
>>>>>>>>>> **wp-includes/l10n.php**
>>>>>>>>>> 
>>>>>>>>>> **wp-includes/locale.php**
>>>>>>>>>> 
>>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>>> 
>>>>>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>>>>>> 
>>>>>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>>>>>> 
>>>>>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>>>>>> 
>>>>>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>>>>>> 
>>>>>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>>>>>> 
>>>>>>>>> [`wpdb::get_caller()`](https://developer.wordpress.org/reference/classes/wpdb/get_caller/)
>>>>>>>>> 
>>>>>>>>>> [`wp_debug_backtrace_summary()`](https://developer.wordpress.org/reference/functions/wp_debug_backtrace_summary/)
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
>>>>>>>>> 
>>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
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
>>>>>> 
>>>>>> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
>>>>>> 
>>>>>>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>>>>>>> 
>>>>>>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>>>>>>> 
>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>> 
>>>>>>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
>>>>> 
>>>>> [`wp_specialchars_decode()`](https://developer.wordpress.org/reference/functions/wp_specialchars_decode/)
>>>>> 
>>>>> [`wp_kses_normalize_entities()`](https://developer.wordpress.org/reference/functions/wp_kses_normalize_entities/)
>>>>> 
>>>>>> [`wp_kses_named_entities()`](https://developer.wordpress.org/reference/functions/wp_kses_named_entities/)
>>>>>> 
>>>>>> [`wp_kses_normalize_entities2()`](https://developer.wordpress.org/reference/functions/wp_kses_normalize_entities2/)
>>>>>> 
>>>>>>> [`valid_unicode()`](https://developer.wordpress.org/reference/functions/valid_unicode/)
>>>>>> 
>>>>>> [`wp_kses_normalize_entities3()`](https://developer.wordpress.org/reference/functions/wp_kses_normalize_entities3/)
>>>>>> 
>>>>>>> [`valid_unicode()`](https://developer.wordpress.org/reference/functions/valid_unicode/)
>>>> 
>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`attribute_escape`](https://developer.wordpress.org/reference/hooks/attribute_escape/)
>>>> 
>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>> 
>>> [`WP_Styles::_css_href()`](https://developer.wordpress.org/reference/classes/wp_styles/_css_href/)
>>> 
>>>> [`add_query_arg()`](https://developer.wordpress.org/reference/functions/add_query_arg/)
>>>> 
>>>>> [`wp_parse_str()`](https://developer.wordpress.org/reference/functions/wp_parse_str/)
>>>>> 
>>>>> [`urlencode_deep()`](https://developer.wordpress.org/reference/functions/urlencode_deep/)
>>>>> 
>>>>> [`build_query()`](https://developer.wordpress.org/reference/functions/build_query/)
>>>>> 
>>>>>> [`_http_build_query()`](https://developer.wordpress.org/reference/functions/_http_build_query/)
>>>>>> 
>>>>>>> [`_http_build_query()`](https://developer.wordpress.org/reference/functions/_http_build_query/)
>>>> 
>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`style_loader_src`](https://developer.wordpress.org/reference/hooks/style_loader_src/)
>>>> 
>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>> 
>>>>> [`wp_styles_loader_src()`](https://developer.wordpress.org/reference/functions/wp_styles_loader_src/)
>>>>> 
>>>>>> `get_user_option()`
>>>>>> 
>>>>>> `wp_parse_str()`
>>>>>> 
>>>>>> [`add_query_arg()`](https://developer.wordpress.org/reference/functions/add_query_arg/)
>>>>>> 
>>>>>>> [`wp_parse_str()`](https://developer.wordpress.org/reference/functions/wp_parse_str/)
>>>>>>> 
>>>>>>> [`urlencode_deep()`](https://developer.wordpress.org/reference/functions/urlencode_deep/)
>>>>>>> 
>>>>>>> [`build_query()`](https://developer.wordpress.org/reference/functions/build_query/)
>>>>>>> 
>>>>>>>> [`_http_build_query()`](https://developer.wordpress.org/reference/functions/_http_build_query/)
>>>>>>>> 
>>>>>>>>> [`_http_build_query()`](https://developer.wordpress.org/reference/functions/_http_build_query/)
>>>> 
>>>> [`esc_url()`](https://developer.wordpress.org/reference/functions/esc_url/)
>>>> 
>>>>> [`_deep_replace()`](https://developer.wordpress.org/reference/functions/_deep_replace/)
>>>>> 
>>>>> [`wp_kses_normalize_entities()`](https://developer.wordpress.org/reference/functions/wp_kses_normalize_entities/)
>>>>> 
>>>>>> [`wp_kses_named_entities()`](https://developer.wordpress.org/reference/functions/wp_kses_named_entities/)
>>>>>> 
>>>>>> [`wp_kses_normalize_entities2()`](https://developer.wordpress.org/reference/functions/wp_kses_normalize_entities2/)
>>>>>> 
>>>>>>> [`valid_unicode()`](https://developer.wordpress.org/reference/functions/valid_unicode/)
>>>>>> 
>>>>>> [`wp_kses_normalize_entities3()`](https://developer.wordpress.org/reference/functions/wp_kses_normalize_entities3/)
>>>>>> 
>>>>>>> [`valid_unicode()`](https://developer.wordpress.org/reference/functions/valid_unicode/)
>>>>> 
>>>>> [`wp_allowed_protocols()`](https://developer.wordpress.org/reference/functions/wp_allowed_protocols/)
>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`kses_allowed_protocols`](https://developer.wordpress.org/reference/hooks/kses_allowed_protocols/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>> 
>>>>> [`wp_kses_bad_protocol()`](https://developer.wordpress.org/reference/functions/wp_kses_bad_protocol/)
>>>>> 
>>>>>> [`wp_kses_no_null()`](https://developer.wordpress.org/reference/functions/wp_kses_no_null/)
>>>>>> 
>>>>>> [`wp_kses_bad_protocol_once()`](https://developer.wordpress.org/reference/functions/wp_kses_bad_protocol_once/)
>>>>>> 
>>>>>>> [`wp_kses_bad_protocol_once2()`](https://developer.wordpress.org/reference/functions/wp_kses_bad_protocol_once2/)
>>>>>>> 
>>>>>>>> [`wp_kses_decode_entities()`](https://developer.wordpress.org/reference/functions/wp_kses_decode_entities/)
>>>>>>>> 
>>>>>>>>> [`_wp_kses_decode_entities_chr()`](https://developer.wordpress.org/reference/functions/_wp_kses_decode_entities_chr/)
>>>>>>>>> 
>>>>>>>>> [`_wp_kses_decode_entities_chr_hexdec()`](https://developer.wordpress.org/reference/functions/_wp_kses_decode_entities_chr_hexdec/)
>>>>>>>> 
>>>>>>>> [`wp_kses_no_null()`](https://developer.wordpress.org/reference/functions/wp_kses_no_null/)
>>>>>>> 
>>>>>>> [`wp_kses_bad_protocol_once()`](https://developer.wordpress.org/reference/functions/wp_kses_bad_protocol_once/)
>>>>> 
>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`clean_url`](https://developer.wordpress.org/reference/hooks/clean_url/)
>>>>> 
>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>> 
>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`style_loader_tag`](https://developer.wordpress.org/reference/hooks/style_loader_tag/)
>>> 
>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
 
 `wp_enqueue_style()`
 
 [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_admin_css`](https://developer.wordpress.org/reference/hooks/wp_admin_css/)
 
> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
 
 [`esc_url()`](https://developer.wordpress.org/reference/functions/esc_url/)
 
> [`_deep_replace()`](https://developer.wordpress.org/reference/functions/_deep_replace/)
> 
> [`wp_kses_normalize_entities()`](https://developer.wordpress.org/reference/functions/wp_kses_normalize_entities/)
> 
>> [`wp_kses_named_entities()`](https://developer.wordpress.org/reference/functions/wp_kses_named_entities/)
>> 
>> [`wp_kses_normalize_entities2()`](https://developer.wordpress.org/reference/functions/wp_kses_normalize_entities2/)
>> 
>>> [`valid_unicode()`](https://developer.wordpress.org/reference/functions/valid_unicode/)
>> 
>> [`wp_kses_normalize_entities3()`](https://developer.wordpress.org/reference/functions/wp_kses_normalize_entities3/)
>> 
>>> [`valid_unicode()`](https://developer.wordpress.org/reference/functions/valid_unicode/)
> 
> [`wp_allowed_protocols()`](https://developer.wordpress.org/reference/functions/wp_allowed_protocols/)
> 
>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`kses_allowed_protocols`](https://developer.wordpress.org/reference/hooks/kses_allowed_protocols/)
>> 
>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
> 
> [`wp_kses_bad_protocol()`](https://developer.wordpress.org/reference/functions/wp_kses_bad_protocol/)
> 
>> [`wp_kses_no_null()`](https://developer.wordpress.org/reference/functions/wp_kses_no_null/)
>> 
>> [`wp_kses_bad_protocol_once()`](https://developer.wordpress.org/reference/functions/wp_kses_bad_protocol_once/)
>> 
>>> [`wp_kses_bad_protocol_once2()`](https://developer.wordpress.org/reference/functions/wp_kses_bad_protocol_once2/)
>>> 
>>>> [`wp_kses_decode_entities()`](https://developer.wordpress.org/reference/functions/wp_kses_decode_entities/)
>>>> 
>>>>> [`_wp_kses_decode_entities_chr()`](https://developer.wordpress.org/reference/functions/_wp_kses_decode_entities_chr/)
>>>>> 
>>>>> [`_wp_kses_decode_entities_chr_hexdec()`](https://developer.wordpress.org/reference/functions/_wp_kses_decode_entities_chr_hexdec/)
>>>> 
>>>> [`wp_kses_no_null()`](https://developer.wordpress.org/reference/functions/wp_kses_no_null/)
>>> 
>>> [`wp_kses_bad_protocol_once()`](https://developer.wordpress.org/reference/functions/wp_kses_bad_protocol_once/)
> 
> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`clean_url`](https://developer.wordpress.org/reference/hooks/clean_url/)
> 
>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
 
 `wp_admin_css_uri()`

</blockquote>