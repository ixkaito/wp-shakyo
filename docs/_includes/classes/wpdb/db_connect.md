<p><code><a href="https://developer.wordpress.org/reference/classes/wpdb/db_connect/">wpdb::db_connect()</a></code></p>

<blockquote>

<p><code><a href="https://developer.wordpress.org/reference/classes/wpdb/db_connect/">wpdb::db_connect()</a></code></p>

{% include functions/wp_load_translations_early.md %}

{% include classes/wpdb/bail.md %}

{% include functions/__.md %}

{% include classes/wpdb/set_charset.md %}
 
 [`wpdb::set_sql_mode()`](https://developer.wordpress.org/reference/classes/wpdb/set_sql_mode/)
 
> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`incompatible_sql_modes`](https://developer.wordpress.org/reference/hooks/incompatible_sql_modes/)
> 
>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
 
 [`wpdb::select()`](https://developer.wordpress.org/reference/classes/wpdb/select/)
 
> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
> 
> [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
> 
>> **wp-includes/version.php**
>> 
>> **wp-includes/pomo/mo.php**
>> 
>> **wp-includes/l10n.php**
>> 
>> **wp-includes/locale.php**
>> 
>> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
>> 
>> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
>> 
>> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
>> 
>>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>>> 
>>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
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
>>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>>> 
>>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>>> 
>>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>>> 
>>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
> 
> [`wpdb::bail()`](https://developer.wordpress.org/reference/classes/wpdb/bail/)
> 
>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>> 
>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
>> 
>> [`wp_die()`](https://developer.wordpress.org/reference/functions/wp_die/)
>> 
>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_ajax_handler`](https://developer.wordpress.org/reference/hooks/wp_die_ajax_handler/)
>>> 
>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>> 
>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_xmlrpc_handler`](https://developer.wordpress.org/reference/hooks/wp_die_xmlrpc_handler/)
>>> 
>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>> 
>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`wp_die_handler`](https://developer.wordpress.org/reference/hooks/wp_die_handler/)
>>> 
>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
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

</blockquote>