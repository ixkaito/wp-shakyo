<p><a href="https://developer.wordpress.org/reference/functions/wp_maintenance/"><code>wp_maintenance()</code></a></p>

<blockquote>

{% include functions/wp_load_translations_early.md %}

 [`wp_load_translations_early()`](https://developer.wordpress.org/reference/functions/wp_load_translations_early/)
 
> **wp-includes/version.php**
> 
> **wp-includes/pomo/mo.php**
> 
> **wp-includes/l10n.php**
> 
> **wp-includes/locale.php**
> 
> [`did_action()`](https://developer.wordpress.org/reference/functions/did_action/)
> 
> [`load_textdomain()`](https://developer.wordpress.org/reference/functions/load_textdomain/)
> 
> [`new WP_Locale()`](https://developer.wordpress.org/reference/classes/wp_locale/)
> 
>> [`WP_Locale::__construct()`](https://developer.wordpress.org/reference/classes/wp_locale/__construct/)
>> 
>>> [`WP_Locale::init()`](https://developer.wordpress.org/reference/classes/wp_locale/init/)
>>> 
>>>> [`__()`](https://developer.wordpress.org/reference/functions/__/)
>>>> 
>>>>> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
>>>>> 
>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>> 
>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>> 
>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>> 
>>>> [`_x()`](https://developer.wordpress.org/reference/functions/_x/)
>>>> 
>>>>> [`translate_with_gettext_context()`](https://developer.wordpress.org/reference/functions/translate_with_gettext_context/)
>>>>> 
>>>>>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>>>>>> 
>>>>>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>>>>>> 
>>>>>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>>>>>> 
>>>>>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext_with_context`](https://developer.wordpress.org/reference/hooks/gettext_with_context/)
>>>>>> 
>>>>>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
>>>> 
>>>> [`add_action()`](https://developer.wordpress.org/reference/functions/add_action/)
>>>> 
>>>>> [`add_filter()`](https://developer.wordpress.org/reference/functions/add_filter/)
>>>>> 
>>>>>> [`_wp_filter_build_unique_id()`](https://developer.wordpress.org/reference/functions/_wp_filter_build_unique_id/)
>>> 
>>> [`WP_Locale::register_globals()`](https://developer.wordpress.org/reference/classes/wp_locale/register_globals/)
 
 [`is_rtl()`](https://developer.wordpress.org/reference/functions/is_rtl/)
 
> [`WP_Locale::is_rtl()`](https://developer.wordpress.org/reference/classes/wp_locale/is_rtl/)
 
 [`_e()`](https://developer.wordpress.org/reference/functions/_e/)
 
> [`translate()`](https://developer.wordpress.org/reference/functions/translate/)
> 
>> [`get_translations_for_domain()`](https://developer.wordpress.org/reference/functions/get_translations_for_domain/)
>> 
>>> [`new NOOP_Translations()`](https://developer.wordpress.org/reference/classes/noop_translations/)
>> 
>> [`NOOP_Translations::translate()`](https://developer.wordpress.org/reference/classes/noop_translations/translate/)
>> 
>> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`gettext`](https://developer.wordpress.org/reference/hooks/gettext/)
>> 
>>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)

</blockquote>