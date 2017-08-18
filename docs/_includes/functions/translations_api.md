<p><code><a href="https://developer.wordpress.org/reference/functions/translations_api/">translations_api()</a></code></p>

<blockquote>

{% include files/wp-includes/version.php.md %}

{% include classes/WP_Error.md %}

{% include functions/apply_filters.md hook="translations_api" filters=site.data.filters.translations_api %}

{% include functions/wp_http_supports.md %}

{% include functions/set_url_scheme.md %}

{% include functions/get_locale.md %}

{% include functions/wp_remote_post.md %}

 [`is_wp_error()`](https://developer.wordpress.org/reference/functions/is_wp_error/)
 
 [`__()`](https://developer.wordpress.org/reference/functions/__/)
 
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
 
 [`WP_Error::get_error_message()`](https://developer.wordpress.org/reference/classes/wp_error/get_error_message/)
 
> [`WP_Error::get_error_code()`](https://developer.wordpress.org/reference/classes/wp_error/get_error_code/)
> 
>> [`WP_Error::get_error_codes()`](https://developer.wordpress.org/reference/classes/wp_error/get_error_codes/)
> 
> [`WP_Error::get_error_messages()`](https://developer.wordpress.org/reference/classes/wp_error/get_error_messages/)
 
 [`wp_remote_retrieve_body()`](https://developer.wordpress.org/reference/functions/wp_remote_retrieve_body/)
 
> [`is_wp_error()`](https://developer.wordpress.org/reference/functions/is_wp_error/)
 
 [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`translations_api_result`](https://developer.wordpress.org/reference/hooks/translations_api_result/)
 
> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)

</blockquote>