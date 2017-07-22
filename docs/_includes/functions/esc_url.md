<p><code><a href="https://developer.wordpress.org/reference/functions/esc_url/">esc_url()</a></code></p>

<blockquote>

{% include functions/_deep_replace.md %}

{% include functions/wp_kses_normalize_entities.md %}

{% include functions/wp_allowed_protocols.md %}

{% include functions/wp_kses_bad_protocol.md %}

{% include functions/apply_filters.md hook="clean_url" filters=site.data.filters.clean_url %}

</blockquote>