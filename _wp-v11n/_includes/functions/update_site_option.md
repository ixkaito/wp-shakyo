<p><code><a href="https://developer.wordpress.org/reference/functions/update_site_option/">update_site_option()</a></code></p>

<blockquote>

{% include functions/wp_protect_special_option.md %}

{% include functions/get_site_option.md %}

{% include functions/apply_filters.md hook="pre_update_site_option_" %}

{% include functions/add_site_option.md %}

{% include functions/wp_cache_get.md %}

{% include functions/wp_cache_set.md %}

{% include functions/is_multisite.md %}

{% include functions/update_option.md %}

{% include functions/sanitize_option.md %}

{% include functions/maybe_serialize.md %}

{% include classes/wpdb/update.md %}

{% include functions/do_action.md hook="update_site_option_{$option}" %}

{% include functions/do_action.md hook="update_site_option" %}

</blockquote>
