<p><code><a href="https://developer.wordpress.org/reference/functions/get_site_transient/">get_site_transient()</a></code></p>

<blockquote>

{% include functions/do_action.md hook="pre_delete_site_option_{$option}" actions=site.data.actions.pre_delete_site_option_option %}

{% include functions/is_multisite.md %}

{% include functions/delete_option.md %}

{% include classes/wpdb/get_row.md %}

{% include classes/wpdb/prepare.md %}

{% include functions/wp_cache_delete.md %}

{% include classes/wpdb/delete.md %}

{% include functions/do_action.md hook="delete_site_option_{$option}" actions=site.data.actions.delete_site_option_option %}

 [`do_action()`](https://developer.wordpress.org/reference/functions/do_action/) - [`delete_site_option`](https://developer.wordpress.org/reference/hooks/delete_site_option-5/)
 
> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)

</blockquote>