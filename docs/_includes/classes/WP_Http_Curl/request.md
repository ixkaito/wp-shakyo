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



{% include classes/WP_Http_Encoding/should_decode.md %}

{% include classes/WP_Http_Encoding/decompress.md %}

</blockquote>
