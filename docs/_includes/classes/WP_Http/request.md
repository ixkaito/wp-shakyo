<p><code><a href="https://developer.wordpress.org/reference/classes/wp_http/request/">WP_Http::request()</a></code></p>

<blockquote>

{% include functions/apply_filters.md hook="http_request_timeout" filters=site.data.filters.http_request_timeout %}

{% include functions/apply_filters.md hook="http_request_redirection_count" filters=site.data.filters.http_request_redirection_count %}

{% include functions/apply_filters.md hook="http_request_version" filters=site.data.filters.http_request_version %}

{% include functions/apply_filters.md hook="http_headers_useragent" filters=site.data.filters.http_headers_useragent %}

{% include functions/apply_filters.md hook="http_request_reject_unsafe_urls" filters=site.data.filters.http_request_reject_unsafe_urls %}

{% include functions/wp_parse_args.md %}

{% include functions/apply_filters.md hook="http_request_args" filters=site.data.filters.http_request_args %}

{% include functions/apply_filters.md hook="pre_http_request" filters=site.data.filters.pre_http_request %}

{% include functions/wp_http_validate_url.md %}

{% include functions/wp_kses_bad_protocol.md %}

{% include classes/WP_Error.md %}

{% include functions/__.md %}

{% include classes/WP_Http/block_request.md %}

{% include functions/get_bloginfo.md %}

{% include functions/get_template_dir.md %}

{% include functions/wp_is_writable.md %}

{% include classes/WP_Http/processheaders.md %}

{% include classes/WP_Http/buildCookieHeader.md %}

{% include functions/mbstring_binary_safe_encoding.md %}

{% include classes/WP_Http_Encoding/accept_encoding.md %}

{% include functions/get_option.md %}

{% include classes/WP_Http/_dispatch_request.md %}

{% include functions/reset_mbstring_encoding.md %}

 [`is_wp_error()`](https://developer.wordpress.org/reference/functions/is_wp_error/)
 
 `wp_list_pluck()`

</blockquote>
