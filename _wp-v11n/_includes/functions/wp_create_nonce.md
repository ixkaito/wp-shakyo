<p><code><a href="https://developer.wordpress.org/reference/functions/wp_create_nonce/">wp_create_nonce()</a></code></p>

<blockquote>

{% include functions/wp_get_current_user.md %}

{% include functions/apply_filters.md hook="nonce_user_logged_out" filters=site.data.filters.nonce_user_logged_out %}

{% include functions/wp_get_session_token.md %}

{% include functions/wp_nonce_tick.md %}

{% include functions/wp_hash.md %}

</blockquote>
