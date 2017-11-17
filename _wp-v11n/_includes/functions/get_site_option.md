<p><code><a href="https://developer.wordpress.org/reference/functions/get_site_option/">get_site_option()</a></code></p>

<blockquote>

{% include functions/apply_filters.md hook="pre_site_option_{$option}" %}

{% include functions/wp_cache_get.md %}

{% include functions/is_multisite.md %}

{% include functions/get_option.md %}

{% include classes/wpdb/get_row.md %}

{% include classes/wpdb/prepare.md %}

{% include functions/maybe_unserialize.md %}

{% include functions/wp_cache_set.md %}

{% include functions/apply_filters.md hook="default_site_option_{$option}" %}

{% include functions/apply_filters.md hook="site_option_{$option}" %}

</blockquote>
