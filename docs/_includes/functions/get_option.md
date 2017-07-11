<p><code><a href="https://developer.wordpress.org/reference/functions/get_option/">get_option()</a></code></p>

<blockquote>

{% include functions/apply_filters.md hook="pre_option_{$option}" filters=site.data.filters.pre_option_option %}

{% include functions/wp_cache_get.md %}

{% include functions/apply_filters.md hook="default_option_{$option}" filters=site.data.filters.default_option_option %}

{% include functions/wp_load_alloptions.md %}

{% include functions/wp_cache_get.md %}

{% include classes/wpdb/get_row.md %}

{% include classes/wpdb/prepare.md %}

{% include functions/wp_cache_add.md %}

{% include functions/wp_cache_set.md %}

{% include classes/wpdb/suppress_errors.md %}

<p><code><a href="https://developer.wordpress.org/reference/functions/get_option/">get_option()</a></code></p>

{% include functions/untrailingslashit.md %}

{% include functions/apply_filters.md hook="option_{$option}" filters=site.data.filters.option_option %}

 [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
 
> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)

</blockquote>