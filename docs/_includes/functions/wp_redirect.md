<p><code><a href="https://developer.wordpress.org/reference/functions/wp_redirect/">wp_redirect()</a></code></p>

<blockquote>

{% include functions/apply_filters.md hook="wp_redirect" filters=site.data.filters.wp_redirect %}

{% include functions/apply_filters.md hook="wp_redirect_status" filters=site.data.filters.wp_redirect_status %}

{% include functions/wp_sanitize_redirect.md %}

{% include functions/status_header.md %}

{% include functions/apply_filters.md hook="status_header" filters=site.data.filters.status_header %}

<em>Redirect to <strong><a href="{{ site.baseurl }}/wp-admin/install.html">wp-admin/install.php</a></strong></em>

</blockquote>