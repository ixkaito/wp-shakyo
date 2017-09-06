<p><code><a href="https://developer.wordpress.org/reference/classes/wp_http_curl/request/">WP_Http_Curl::request()</a></code></p>

<blockquote>

{% include functions/wp_parse_args.md %}

{% include classes/WP_Http/buildCookieHeader.md %}

{% include classes/WP_HTTP_Proxy.md %}

{% include classes/WP_HTTP_Proxy/is_enabled.md %}

{% include classes/WP_HTTP_Proxy/send_through_proxy.md %}

{% include classes/WP_HTTP_Proxy/host.md %}

{% include classes/WP_HTTP_Proxy/port.md %}

{% include classes/WP_HTTP_Proxy/use_authentication.md %}

{% include functions/apply_filters.md hook="https_local_ssl_verify" filters=site.data.filters.https_local_ssl_verify %}

{% include functions/apply_filters.md hook="https_ssl_verify" filters=site.data.filters.https_ssl_verify %}

{% include classes/WP_Error.md %}

{% include functions/__.md %}

{% include functions/do_action_ref_array.md hook="http_api_curl" actions=site.data.actions.http_api_curl %}

{% include classes/WP_Http_Curl/stream_headers.md %}

{% include classes/WP_Http_Curl/stream_body.md %}

{% include classes/WP_Http/processHeaders.md %}

{% include functions/get_status_header_desc.md %}

 [`WP_HTTP::handle_redirects()`](https://developer.wordpress.org/reference/classes/wp_http/handle_redirects/)
 
> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
> 
>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
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
> `WP_Http::make_absolute_url()`
> 
> `wp_remote_request()`
 
 [`WP_Http_Encoding::should_decode()`](https://developer.wordpress.org/reference/classes/wp_http_encoding/should_decode/)
 
 `WP_Http_Encoding::decompress()`

</blockquote>
