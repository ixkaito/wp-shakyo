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

{% include functions/do_action.md hook="delete_site_option" actions=site.data.actions.delete_site_option %}

</blockquote>