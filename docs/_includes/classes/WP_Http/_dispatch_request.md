<p><code><a href="https://developer.wordpress.org/reference/classes/wp_http/_dispatch_request/">WP_Http::_dispatch_request()</a></code></p>

<blockquote>

{% include classes/WP_Http/_get_first_available_transport.md %}

{% include classes/WP_Error.md %}

{% include functions/__.md %}

{% include classes/WP_Http_Curl.md %}

{% include classes/WP_Http_Curl/request.md %}

{% include functions/do_action.md hook="http_api_debug" actions=site.data.actions.http_api_debug %}

{% include functions/is_wp_error.md %}

{% include functions/apply_filters.md hook="http_response" filters=site.data.filters.http_response %}

</blockquote>
