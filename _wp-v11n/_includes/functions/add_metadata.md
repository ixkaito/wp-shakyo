<p><code><a href="https://developer.wordpress.org/reference/functions/add_metadata/">add_metadata()</a></code></p>

<blockquote>

{% include functions/absint.md %}

{% include functions/_get_meta_table.md %}

{% include functions/sanitize_key.md %}

{% include functions/wp_unslash.md %}

{% include functions/sanitize_meta.md %}

{% include functions/apply_filters.md hook="add_{$meta_type}_metadata" %}

{% include classes/wpdb/get_var.md %}

{% include functions/maybe_serialize.md %}

{% include functions/do_action.md hook="add_{$meta_type}_meta" %}

{% include classes/wpdb/insert.md %}

{% include functions/wp_cache_delete.md %}

{% include functions/do_action.md hook="added_{$meta_type}_meta" %}

</blockquote>
