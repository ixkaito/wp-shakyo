<p><code><a href="https://developer.wordpress.org/reference/functions/get_site_option/">get_site_option()</a></code></p>

<blockquote>

{% include functions/apply_filters.md hook="pre_site_option_{$option}" filters=site.data.filters.pre_site_option_option %}

{% include functions/wp_cache_get.md %}

{% include functions/is_multisite.md %}

{% include functions/get_option.md %}

{% include classes/wpdb/get_row.md %}

{% include classes/wpdb/prepare.md %}

{% include functions/maybe_unserialize.md %}
 
 [`wp_cache_set()`](https://developer.wordpress.org/reference/functions/wp_cache_set/)
 
 [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`default_site_option_{}`](https://developer.wordpress.org/reference/hooks/default_site_option_option-5/)
 
> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
 
 [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`site_option_{}`](https://developer.wordpress.org/reference/hooks/site_option_option-5/)
 
> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)

</blockquote>