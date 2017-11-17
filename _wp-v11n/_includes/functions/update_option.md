<p><code><a href="https://developer.wordpress.org/reference/functions/update_option/">update_option()</a></code></p>

<blockquote>
{% comment %}
{% include functions/wp_protect_special_option.md %}

{% include functions/sanitize_option.md %}

{% include functions/get_option.md %}

{% include functions/apply_filters.md hook="pre_update_option_{$option}" %}

{% include functions/apply_filters.md hook="pre_update_option" %}

{% include functions/add_option.md %}

{% include functions/maybe_serialize.md %}

{% include functions/do_action.md hook="update_option" %}

{% include classes/wpdb/update.md %}

{% include functions/wp_cache_get.md %}

{% include functions/wp_load_alloptions.md %}

{% include functions/wp_cache_set.md %}

{% include functions/do_action.md hook="update_option_{$option}" %}

{% include functions/do_action.md hook="updated_option" %}
{% endcomment %}
</blockquote>
