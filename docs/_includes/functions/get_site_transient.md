<p><code><a href="https://developer.wordpress.org/reference/functions/get_site_transient/">get_site_transient()</a></code></p>

<blockquote>

{% include functions/apply_filters.md hook="pre_site_transient_{$transient}" filters=site.data.filters.pre_site_transient_transient %}

{% include functions/wp_using_ext_object_cache.md %}

{% include functions/wp_cache_get.md %}

{% include functions/delete_site_option.md %}

{% include functions/get_site_option.md %}

 [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`site_transient_{}`](https://developer.wordpress.org/reference/hooks/site_transient_transient/)
 
> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)

</blockquote>