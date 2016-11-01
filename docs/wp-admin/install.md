---
layout: default
filename: wp-admin/install.php
---

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
>>>> [`wp_initial_constants()`](https://developer.wordpress.org/reference/functions/wp_initial_constants/)
>>>> 
>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>> 
>>>>[`wp_check_php_mysql_versions()`](https://developer.wordpress.org/reference/functions/wp_check_php_mysql_versions/)
>>>> 
>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>> 
>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>> 
>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>> 
>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>> 
>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>> 
>>>> [`wp_unregister_GLOBALS()`](https://developer.wordpress.org/reference/functions/wp_unregister_globals/)
>>>> 
>>>> [`wp_fix_server_vars()`](https://developer.wordpress.org/reference/functions/wp_fix_server_vars/)
>>>> 
>>>> [`wp_favicon_request()`](https://developer.wordpress.org/reference/functions/wp_favicon_request/)
>>>> 
>>>> [`wp_maintenance()`](https://developer.wordpress.org/reference/functions/wp_maintenance/)
>>>> 
>>>>> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
>>>>> 
>>>>>> **wp-includes/version.php**
>>>>>> 
>>>>>> **wp-includes/pomo/mo.php**
>>>>>> 
>>>>>> **wp-includes/l10n.php**
>>>>>> 
>>>>>> **wp-includes/locale.php**
>>>>>> 
>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>> 
>>>>>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>>>>>> 
>>>>>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>>>>>> 
>>>>>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>>>>>> 
>>>>>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>>>>>>> 
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
>>>>>>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>>>>>>> 
>>>>>>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>>>>>>> 
>>>>>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>>>>>> 
>>>>>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>>>>>> 
>>>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>>>>>>> 
>>>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>>> 
>>>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>>>> 
>>>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>>>> 
>>>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>>> 
>>>>>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
>>>>> 
>>>>> [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
>>>>> 
>>>>>> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
>>>>> 
>>>>> [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
>>>>> 
>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>> 
>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>> 
>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>> 
>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>> 
>>>> [`timer_start()`](https://developer.wordpress.org/reference/functions/timer_start/)
>>>> 
>>>> [`wp_debug_mode()`](https://developer.wordpress.org/reference/functions/wp_debug_mode/)
>>>> 
>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`enable_wp_debug_mode_checks`](https://developer.wordpress.org/reference/hooks/enable_wp_debug_mode_checks/)
>>>>> 
>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>> 
>>>> [`wp_set_lang_dir()`](https://developer.wordpress.org/reference/functions/wp_set_lang_dir/)
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
>>>> [`require_wp_db()`](https://developer.wordpress.org/reference/functions/require_wp_db/)
>>>> 
>>>>> **wp-includes/wp-db.php**
>>>>> 
>>>>> [`new wpdb()`](https://developer.wordpress.org/reference/classes/wpdb/)
>>>>> 
>>>>>> [`wpdb::__construct()`](https://developer.wordpress.org/reference/classes/wpdb/__construct/)
>>>>>> 
>>>>>>> [`wpdb::__destruct()`](https://developer.wordpress.org/reference/classes/wpdb/__destruct/)
>>>>>>> 
>>>>>>> [`wpdb::show_errors()`](https://developer.wordpress.org/reference/classes/wpdb/show_errors/)
>>>>>>> 
>>>>>>> [`wpdb::init_charset()`](https://developer.wordpress.org/reference/classes/wpdb/init_charset/)
>>>>>>> 
>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
>>>>>>> 
>>>>>>>> [`wpdb::db_connect()`](https://developer.wordpress.org/reference/classes/wpdb/db_connect/)
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
>>>>>>>> 
>>>>>>>> [`wpdb::set_charset()`](https://developer.wordpress.org/reference/classes/wpdb/set_charset/)
>>>>>>>> 
>>>>>>>>> [`wpdb::has_cap()`](https://developer.wordpress.org/reference/classes/wpdb/has_cap/)
>>>>>>>>> 
>>>>>>>>>> [`wpdb::db_version()`](https://developer.wordpress.org/reference/classes/wpdb/db_version/)
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
>>>>>>>>>> 
>>>>>>>>>> [`wpdb::escape_by_ref()`](https://developer.wordpress.org/reference/classes/wpdb/escape_by_ref/)
>>>>>>>>>> 
>>>>>>>>>>> [`wpdb::_real_escape()`](https://developer.wordpress.org/reference/classes/wpdb/_real_escape/)
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
>>>>>>>> 
>>>>>>>> [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
>>>>>>>> 
>>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
>>>>>>>>> 
>>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
>>>>>>>> 
>>>>>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>>>>>> 
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
>>>> 
>>>> [`wp_set_wpdb_vars()`](https://developer.wordpress.org/reference/functions/wp_set_wpdb_vars/)
>>>> 
>>>>> [`dead_db()`](https://developer.wordpress.org/reference/functions/dead_db/)
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
>>>>>> 
>>>>>> [`status_header()`](https://developer.wordpress.org/reference/functions/status_header/)
>>>>>> 
>>>>>>> [`get_status_header_desc()`](https://developer.wordpress.org/reference/functions/get_status_header_desc/)
>>>>>>> 
>>>>>>>> [`absint()`](https://developer.wordpress.org/reference/functions/absint/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`status_header`](https://developer.wordpress.org/reference/hooks/status_header/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`nocache_headers()`](https://developer.wordpress.org/reference/functions/nocache_headers/)
>>>>>> 
>>>>>>> [`wp_get_nocache_headers()`](https://developer.wordpress.org/reference/functions/wp_get_nocache_headers/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`nocache_headers`](https://developer.wordpress.org/reference/hooks/nocache_headers/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>> [`wpdb::set_prefix()`](https://developer.wordpress.org/reference/classes/wpdb/set_prefix/)
>>>>> 
>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>> 
>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>> 
>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>> 
>>>>>> [`wpdb::tables()`](https://developer.wordpress.org/reference/classes/wpdb/tables/)
>>>>>> 
>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>> 
>>>>>>> [`wpdb::get_blog_prefix()`](https://developer.wordpress.org/reference/classes/wpdb/get_blog_prefix/)
>>>>>>> 
>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>> 
>>>>>> [`wpdb::get_blog_prefix()`](https://developer.wordpress.org/reference/classes/wpdb/get_blog_prefix/)
>>>>>> 
>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>> 
>>>>> [`is_wp_error()`](https://developer.wordpress.org/reference/functions/is_wp_error/)
>>>> 
>>>> [`wp_start_object_cache()`](https://developer.wordpress.org/reference/functions/wp_start_object_cache/)
>>>> 
>>>>> [`wp_using_ext_object_cache()`](https://developer.wordpress.org/reference/functions/wp_using_ext_object_cache/)
>>>>> 
>>>>> **wp-includes/cache.php**
>>>>> 
>>>>> [`wp_cache_switch_to_blog()`](https://developer.wordpress.org/reference/functions/wp_cache_switch_to_blog/)
>>>>> 
>>>>>> [`WP_Object_Cache::switch_to_blog()`](https://developer.wordpress.org/reference/classes/wp_object_cache/switch_to_blog/)
>>>>> 
>>>>> [`wp_cache_init()`](https://developer.wordpress.org/reference/functions/wp_cache_init/)
>>>>> 
>>>>>> [`new WP_Object_Cache()`](https://developer.wordpress.org/reference/classes/wp_object_cache/)
>>>>>> 
>>>>>>> [`WP_Object_Cache::__construct()`](https://developer.wordpress.org/reference/classes/wp_object_cache/__construct/)
>>>>>>> 
>>>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>>>> 
>>>>>>>> [`WP_Object_Cache::__destruct()`](https://developer.wordpress.org/reference/classes/wp_object_cache/__destruct/)
>>>>> 
>>>>> [`wp_cache_add_global_groups()`](https://developer.wordpress.org/reference/functions/wp_cache_add_global_groups/)
>>>>> 
>>>>>> [`WP_Object_Cache::add_global_groups()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add_global_groups/)
>>>>> 
>>>>> [`wp_cache_add_non_persistent_groups()`](https://developer.wordpress.org/reference/functions/wp_cache_add_non_persistent_groups/)
>>>> 
>>>> **wp-includes/default-filters.php**
>>>> 
>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>> 
>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>> 
>>>>> [`is_admin()`](https://developer.wordpress.org/reference/functions/is_admin/)
>>>>> 
>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>> 
>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>> 
>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>> 
>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>> 
>>>> **wp-includes/ms-blogs.php**
>>>> 
>>>> **wp-includes/ms-settings.php**
>>>> 
>>>> [`shutdown_action_hook()`](https://developer.wordpress.org/reference/functions/shutdown_action_hook/)
>>>> 
>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`shutdown`](https://developer.wordpress.org/reference/hooks/shutdown/)
>>>>> 
>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`wp_ob_end_flush_all()`](https://developer.wordpress.org/reference/functions/wp_ob_end_flush_all/)
>>>>> 
>>>>> [`wp_cache_close()`](https://developer.wordpress.org/reference/functions/wp_cache_close/)
>>>> 
>>>> **wp-includes/l10n.php**
>>>> 
>>>> [`wp_not_installed()`](https://developer.wordpress.org/reference/functions/wp_not_installed/)
>>>> 
>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>> 
>>>>> [`is_blog_installed()`](https://developer.wordpress.org/reference/functions/is_blog_installed/)
>>>>> 
>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>> 
>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>> 
>>>>>> [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
>>>>>> 
>>>>>> [`wp_load_alloptions()`](https://developer.wordpress.org/reference/functions/wp_load_alloptions/)
>>>>>> 
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
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::escape_by_ref()`](https://developer.wordpress.org/reference/classes/wpdb/escape_by_ref/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::_real_escape()`](https://developer.wordpress.org/reference/classes/wpdb/_real_escape/)
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
>>>>>> [`wpdb::get_var()`](https://developer.wordpress.org/reference/classes/wpdb/get_var/)
>>>>>> 
>>>>>> [`wp_cache_set()`](https://developer.wordpress.org/reference/functions/wp_cache_set/)
>>>>>> 
>>>>>> [`wpdb::tables()`](https://developer.wordpress.org/reference/classes/wpdb/tables/)
>>>>>> 
>>>>>> [`wpdb::get_results()`](https://developer.wordpress.org/reference/classes/wpdb/get_results/)
>>>>>> 
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
>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>> 
>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>> 
>>>> **wp-includes/class-wp-embed.php**
>>>> 
>>>>> [`new WP_Embed()`](https://developer.wordpress.org/reference/classes/wp_embed/)
>>>>> 
>>>>>> [`WP_Embed::__construct()`](https://developer.wordpress.org/reference/classes/wp_embed/__construct/)
>>>>>> 
>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>> 
>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>>> 
>>>>>>> [`add_shortcode()`](https://developer.wordpress.org/reference/functions/add_shortcode/)
>>>>>>> 
>>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>>> 
>>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>>> 
>>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
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
>>>> **wp-includes/ms-functions.php**
>>>> 
>>>> **wp-includes/ms-default-filters.php**
>>>> 
>>>> **wp-includes/ms-deprecated.php**
>>>> 
>>>> [`wp_plugin_directory_constants()`](https://developer.wordpress.org/reference/functions/wp_plugin_directory_constants/)
>>>> 
>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_option_{$option}`](https://developer.wordpress.org/reference/hooks/pre_option_option/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>> 
>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_option_{$option}`](https://developer.wordpress.org/reference/hooks/default_option_option/)
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
>>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::escape_by_ref()`](https://developer.wordpress.org/reference/classes/wpdb/escape_by_ref/)
>>>>>>>>>>>>> 
>>>>>>>>>>>>>> [`wpdb::_real_escape()`](https://developer.wordpress.org/reference/classes/wpdb/_real_escape/)
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
>>>>>>>>>>>> 
>>>>>>>>>>>> [`wpdb::escape_by_ref()`](https://developer.wordpress.org/reference/classes/wpdb/escape_by_ref/)
>>>>>>>>>>>> 
>>>>>>>>>>>>> [`wpdb::_real_escape()`](https://developer.wordpress.org/reference/classes/wpdb/_real_escape/)
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
>>>>>>> 
>>>>>>> [`wpdb::escape_by_ref()`](https://developer.wordpress.org/reference/classes/wpdb/escape_by_ref/)
>>>>>>> 
>>>>>>>> [`wpdb::_real_escape()`](https://developer.wordpress.org/reference/classes/wpdb/_real_escape/)
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
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`option_{$option}`](https://developer.wordpress.org/reference/hooks/option_option/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>> 
>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
>>>> 
>>>> [`wp_get_mu_plugins()`](https://developer.wordpress.org/reference/functions/wp_get_mu_plugins/)
>>>> 
>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>> 
>>>> `wp_get_active_network_plugins()`
>>>> 
>>>> `wp_register_plugin_realpath()`
>>>> 
>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`muplugins_loaded`](https://developer.wordpress.org/reference/hooks/muplugins_loaded/)
>>>> 
>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>> 
>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>> 
>>>> `ms_cookie_constants()`
>>>> 
>>>> [`wp_cookie_constants()`](https://developer.wordpress.org/reference/functions/wp_cookie_constants/)
>>>> 
>>>>> [`get_site_option()`](https://developer.wordpress.org/reference/functions/get_site_option/)
>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_site_option_{$option}`](https://developer.wordpress.org/reference/hooks/pre_site_option_option-5/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>> 
>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>> 
>>>>>> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
>>>>>> 
>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_option_{$option}`](https://developer.wordpress.org/reference/hooks/pre_option_option/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_option_{$option}`](https://developer.wordpress.org/reference/hooks/default_option_option/)
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
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`option_{$option}`](https://developer.wordpress.org/reference/hooks/option_option/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>>> 
>>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
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
>>>>>>> 
>>>>>>> [`wpdb::escape_by_ref()`](https://developer.wordpress.org/reference/classes/wpdb/escape_by_ref/)
>>>>>>> 
>>>>>>>> [`wpdb::_real_escape()`](https://developer.wordpress.org/reference/classes/wpdb/_real_escape/)
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
>>>>>> 
>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>> 
>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
>>>>>> 
>>>>>> [`wp_cache_set()`](https://developer.wordpress.org/reference/functions/wp_cache_set/)
>>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_site_option_{$option}`](https://developer.wordpress.org/reference/hooks/default_site_option_option-5/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`site_option_{$option}`](https://developer.wordpress.org/reference/hooks/site_option_option-5/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>> 
>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_option_{$option}`](https://developer.wordpress.org/reference/hooks/pre_option_option/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>> 
>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_option_{$option}`](https://developer.wordpress.org/reference/hooks/default_option_option/)
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
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`option_{$option}`](https://developer.wordpress.org/reference/hooks/option_option/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>> 
>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
>>>> 
>>>> [`wp_ssl_constants()`](https://developer.wordpress.org/reference/functions/wp_ssl_constants/)
>>>> 
>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_option_{$option}`](https://developer.wordpress.org/reference/hooks/pre_option_option/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>> 
>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_option_{$option}`](https://developer.wordpress.org/reference/hooks/default_option_option/)
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
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`option_{$option}`](https://developer.wordpress.org/reference/hooks/option_option/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>> 
>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
>>>>> 
>>>>> [`force_ssl_admin()`](https://developer.wordpress.org/reference/functions/force_ssl_admin/)
>>>> 
>>>> **wp-includes/vars.php**
>>>> 
>>>>> [`is_admin()`](https://developer.wordpress.org/reference/functions/is_admin/)
>>>>> 
>>>>> [`is_network_admin()`](https://developer.wordpress.org/reference/functions/is_network_admin/)
>>>>> 
>>>>> [`is_user_admin()`](https://developer.wordpress.org/reference/functions/is_user_admin/)
>>>> 
>>>> [`create_initial_taxonomies()`](https://developer.wordpress.org/reference/functions/create_initial_taxonomies/)
>>>> 
>>>>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>>>>> 
>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`post_format_rewrite_base`](https://developer.wordpress.org/reference/hooks/post_format_rewrite_base/)
>>>>> 
>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>> 
>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_option_{$option}`](https://developer.wordpress.org/reference/hooks/pre_option_option/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>> 
>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_option_{$option}`](https://developer.wordpress.org/reference/hooks/default_option_option/)
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
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`option_{$option}`](https://developer.wordpress.org/reference/hooks/option_option/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>> 
>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
>>>>> 
>>>>> [`WP_Rewrite::using_index_permalinks()`](https://developer.wordpress.org/reference/classes/wp_rewrite/using_index_permalinks/)
>>>>> 
>>>>> [`register_taxonomy()`](https://developer.wordpress.org/reference/functions/register_taxonomy/)
>>>>> 
>>>>>> [`wp_parse_args()`](https://developer.wordpress.org/reference/functions/wp_parse_args/)
>>>>>> 
>>>>>>> [`wp_parse_str()`](https://developer.wordpress.org/reference/functions/wp_parse_str/)
>>>>>> 
>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>> 
>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>> 
>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>> 
>>>>>> [`sanitize_title_with_dashes()`](https://developer.wordpress.org/reference/functions/sanitize_title_with_dashes/)
>>>>>> 
>>>>>>> [`utf8_uri_encode()`](https://developer.wordpress.org/reference/functions/utf8_uri_encode/)
>>>>>>> 
>>>>>>>> [`mbstring_binary_safe_encoding()`](https://developer.wordpress.org/reference/functions/mbstring_binary_safe_encoding/)
>>>>>>>> 
>>>>>>>> [`reset_mbstring_encoding()`](https://developer.wordpress.org/reference/functions/reset_mbstring_encoding/)
>>>>>>>> 
>>>>>>>>> [`mbstring_binary_safe_encoding()`](https://developer.wordpress.org/reference/functions/mbstring_binary_safe_encoding/)
>>>>>> 
>>>>>> [`WP::add_query_var()`](https://developer.wordpress.org/reference/classes/wp/add_query_var/)
>>>>>> 
>>>>>> [`is_admin()`](https://developer.wordpress.org/reference/functions/is_admin/)
>>>>>> 
>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_option_{$option}`](https://developer.wordpress.org/reference/hooks/pre_option_option/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_option_{$option}`](https://developer.wordpress.org/reference/hooks/default_option_option/)
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
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`option_{$option}`](https://developer.wordpress.org/reference/hooks/option_option/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>>> 
>>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
>>>>>> 
>>>>>> [`add_rewrite_tag()`](https://developer.wordpress.org/reference/functions/add_rewrite_tag/)
>>>>>> 
>>>>>>> [`WP::add_query_var()`](https://developer.wordpress.org/reference/classes/wp/add_query_var/)
>>>>>>> 
>>>>>>> [`WP_Rewrite::add_rewrite_tag()`](https://developer.wordpress.org/reference/classes/wp_rewrite/add_rewrite_tag/)
>>>>>> 
>>>>>> [`add_permastruct()`](https://developer.wordpress.org/reference/functions/add_permastruct/)
>>>>>> 
>>>>>>> [`WP_Rewrite::add_permastruct()`](https://developer.wordpress.org/reference/classes/wp_rewrite/add_permastruct/)
>>>>>>> 
>>>>>>>> [`wp_parse_args()`](https://developer.wordpress.org/reference/functions/wp_parse_args/)
>>>>>>>> 
>>>>>>>>> [`wp_parse_str()`](https://developer.wordpress.org/reference/functions/wp_parse_str/)
>>>>>> 
>>>>>> [`get_taxonomy_labels()`](https://developer.wordpress.org/reference/functions/get_taxonomy_labels/)
>>>>>> 
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
>>>>>>> [`_get_custom_object_labels()`](https://developer.wordpress.org/reference/functions/_get_custom_object_labels/)
>>>>>> 
>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>> 
>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>> 
>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`registered_taxonomy`](https://developer.wordpress.org/reference/hooks/registered_taxonomy/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>> 
>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>> 
>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>> 
>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>> 
>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>> 
>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>> [`current_theme_supports()`](https://developer.wordpress.org/reference/functions/current_theme_supports/)
>>>>> 
>>>>>> [`current_theme_supports()`](https://developer.wordpress.org/reference/functions/current_theme_supports/)
>>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`current_theme_supports-{$feature}`](https://developer.wordpress.org/reference/hooks/current_theme_supports-feature/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>> 
>>>> [`create_initial_post_types()`](https://developer.wordpress.org/reference/functions/create_initial_post_types/)
>>>> 
>>>>> [`register_post_type()`](https://developer.wordpress.org/reference/functions/register_post_type/)
>>>>> 
>>>>>> [`wp_parse_args()`](https://developer.wordpress.org/reference/functions/wp_parse_args/)
>>>>>> 
>>>>>>> [`wp_parse_str()`](https://developer.wordpress.org/reference/functions/wp_parse_str/)
>>>>>> 
>>>>>> [`sanitize_key()`](https://developer.wordpress.org/reference/functions/sanitize_key/)
>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`sanitize_key`](https://developer.wordpress.org/reference/hooks/sanitize_key/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`_doing_it_wrong()`](https://developer.wordpress.org/reference/functions/_doing_it_wrong/)
>>>>>> 
>>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`doing_it_wrong_run`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_run/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`doing_it_wrong_trigger_error`](https://developer.wordpress.org/reference/hooks/doing_it_wrong_trigger_error/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>>>>>> 
>>>>>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>>>>>> 
>>>>>> [`get_post_type_capabilities()`](https://developer.wordpress.org/reference/functions/get_post_type_capabilities/)
>>>>>> 
>>>>>>> [`_post_type_meta_capabilities()`](https://developer.wordpress.org/reference/functions/_post_type_meta_capabilities/)
>>>>>> 
>>>>>> [`add_post_type_support()`](https://developer.wordpress.org/reference/functions/add_post_type_support/)
>>>>>> 
>>>>>> [`sanitize_title_with_dashes()`](https://developer.wordpress.org/reference/functions/sanitize_title_with_dashes/)
>>>>>> 
>>>>>>> [`utf8_uri_encode()`](https://developer.wordpress.org/reference/functions/utf8_uri_encode/)
>>>>>>> 
>>>>>>>> [`mbstring_binary_safe_encoding()`](https://developer.wordpress.org/reference/functions/mbstring_binary_safe_encoding/)
>>>>>>>> 
>>>>>>>> [`reset_mbstring_encoding()`](https://developer.wordpress.org/reference/functions/reset_mbstring_encoding/)
>>>>>>>> 
>>>>>>>>> [`mbstring_binary_safe_encoding()`](https://developer.wordpress.org/reference/functions/mbstring_binary_safe_encoding/)
>>>>>> 
>>>>>> [`WP::add_query_var()`](https://developer.wordpress.org/reference/classes/wp/add_query_var/)
>>>>>> 
>>>>>> [`is_admin()`](https://developer.wordpress.org/reference/functions/is_admin/)
>>>>>> 
>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_option_{$option}`](https://developer.wordpress.org/reference/hooks/pre_option_option/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_option_{$option}`](https://developer.wordpress.org/reference/hooks/default_option_option/)
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
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`option_{$option}`](https://developer.wordpress.org/reference/hooks/option_option/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>>> 
>>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
>>>>>> 
>>>>>> [`add_rewrite_tag()`](https://developer.wordpress.org/reference/functions/add_rewrite_tag/)
>>>>>> 
>>>>>>> [`WP::add_query_var()`](https://developer.wordpress.org/reference/classes/wp/add_query_var/)
>>>>>>> 
>>>>>>> [`WP_Rewrite::add_rewrite_tag()`](https://developer.wordpress.org/reference/classes/wp_rewrite/add_rewrite_tag/)
>>>>>> 
>>>>>> [`add_rewrite_rule()`](https://developer.wordpress.org/reference/functions/add_rewrite_rule/)
>>>>>> 
>>>>>>> [`WP_Rewrite::add_rule()`](https://developer.wordpress.org/reference/classes/wp_rewrite/add_rule/)
>>>>>>> 
>>>>>>>> [`WP_Rewrite::add_external_rule()`](https://developer.wordpress.org/reference/classes/wp_rewrite/add_external_rule/)
>>>>>> 
>>>>>> [`add_permastruct()`](https://developer.wordpress.org/reference/functions/add_permastruct/)
>>>>>> 
>>>>>>> [`WP_Rewrite::add_permastruct()`](https://developer.wordpress.org/reference/classes/wp_rewrite/add_permastruct/)
>>>>>>> 
>>>>>>>> [`wp_parse_args()`](https://developer.wordpress.org/reference/functions/wp_parse_args/)
>>>>>>>> 
>>>>>>>>> [`wp_parse_str()`](https://developer.wordpress.org/reference/functions/wp_parse_str/)
>>>>>> 
>>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>>> 
>>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>>> 
>>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>>>> 
>>>>>> [`get_post_type_labels()`](https://developer.wordpress.org/reference/functions/get_post_type_labels/)
>>>>>> 
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
>>>>>>> [`_get_custom_object_labels`](https://developer.wordpress.org/reference/functions/_get_custom_object_labels/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`post_type_labels_{$post_type}`](https://developer.wordpress.org/reference/hooks/post_type_labels_post_type/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>> 
>>>>>> [`register_taxonomy_for_object_type()`](https://developer.wordpress.org/reference/functions/register_taxonomy_for_object_type/)
>>>>>> 
>>>>>>> [`get_post_type_object()`](https://developer.wordpress.org/reference/functions/get_post_type_object/)
>>>>>> 
>>>>>> [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`registered_post_type`](https://developer.wordpress.org/reference/hooks/registered_post_type/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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
>>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>>> 
>>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>>> 
>>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>>> 
>>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>>> 
>>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>> 
>>>>> [`add_post_type_support()`](https://developer.wordpress.org/reference/functions/add_post_type_support/)
>>>>> 
>>>>> [`register_post_status()`](https://developer.wordpress.org/reference/functions/register_post_status/)
>>>>> 
>>>>>> [`wp_parse_args()`](https://developer.wordpress.org/reference/functions/wp_parse_args/)
>>>>>> 
>>>>>>> [`wp_parse_str()`](https://developer.wordpress.org/reference/functions/wp_parse_str/)
>>>>>> 
>>>>>> [`sanitize_key()`](https://developer.wordpress.org/reference/functions/sanitize_key/)
>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`sanitize_key`](https://developer.wordpress.org/reference/hooks/sanitize_key/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>> 
>>>>> [`_n_noop()`](https://developer.wordpress.org/reference/functions/_n_noop/)
>>>> 
>>>> [`register_theme_directory()`](https://developer.wordpress.org/reference/functions/register_theme_directory/)
>>>> 
>>>>> [`untrailingslashit()`](https://developer.wordpress.org/reference/functions/untrailingslashit/)
>>>> 
>>>> [`get_theme_root()`](https://developer.wordpress.org/reference/functions/get_theme_root/)
>>>> 
>>>>> [`get_raw_theme_root()`](https://developer.wordpress.org/reference/functions/get_raw_theme_root/)
>>>>> 
>>>>>> [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_option_{$option}`](https://developer.wordpress.org/reference/hooks/pre_option_option/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>> 
>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>> 
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_option_{$option}`](https://developer.wordpress.org/reference/hooks/default_option_option/)
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
>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`option_{$option}`](https://developer.wordpress.org/reference/hooks/option_option/)
>>>>>>> 
>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
>>>>>>> 
>>>>>>>> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)
>>>>>> 
>>>>>> [`get_theme_roots()`](https://developer.wordpress.org/reference/functions/get_theme_roots/)
>>>>>> 
>>>>>>> [`get_site_transient()`](https://developer.wordpress.org/reference/functions/get_site_transient/)
>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`pre_site_transient_{$transient}`](https://developer.wordpress.org/reference/hooks/pre_site_transient_transient/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>>> 
>>>>>>>> [`wp_using_ext_object_cache()`](https://developer.wordpress.org/reference/functions/wp_using_ext_object_cache/)
>>>>>>>> 
>>>>>>>> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
>>>>>>>> 
>>>>>>>>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>>>>>>>>> 
>>>>>>>>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>>>>>>> 
>>>>>>>> `delete_site_option()`
>>>>>>>> 
>>>>>>>> `get_site_option()`
>>>>>>>> 
>>>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`site_transient_{$transient}`](https://developer.wordpress.org/reference/hooks/site_transient_transient/)
>>>>>>>> 
>>>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>>>>> 
>>>>>>> `search_theme_directories()`
>>>>> 
>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`theme_root`](https://developer.wordpress.org/reference/hooks/theme_root/)
>>>>> 
>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>> 
>>>> `wp_get_active_and_valid_plugins()`
>>>> 
>>>> `wp_register_plugin_realpath()`
> 
> **wp-admin/includes/upgrade.php**
> 
> **wp-admin/includes/translation-install.php**
> 
> **wp-includes/wp-db.php**
> 
