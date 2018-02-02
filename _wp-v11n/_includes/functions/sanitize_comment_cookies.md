<p><code><a href="https://developer.wordpress.org/reference/functions/sanitize_comment_cookies/">sanitize_comment_cookies()</a></code></p>

<blockquote>

{% include functions/apply_filters.md hook="pre_comment_author_name" %}

{% include functions/wp_unslash.md %}

{% include functions/esc_attr.md %}

{% include functions/apply_filters.md hook="pre_comment_author_email" %}

{% include functions/apply_filters.md hook="pre_comment_author_url" %}

</blockquote>
