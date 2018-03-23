<p><code><a href="https://developer.wordpress.org/reference/functions/update_metadata/">update_metadata()</a></code></p>

<blockquote>

{% include functions/absint.md %}

{% include functions/_get_meta_table.md %}

{% include functions/sanitize_key.md %}

{% include functions/wp_unslash.md %}

{% include functions/sanitize_meta.md %}

{% include functions/apply_filters.md hook="update_{$meta_type}_metadata" %}

{% include functions/get_metadata.md %}

{% include classes/wpdb/get_var.md %}

{% include classes/wpdb/prepare.md %}

{% include functions/add_metadata.md %}

{% include functions/maybe_serialize.md %}

{% include functions/do_action.md hook="update_{$meta_type}_meta" %}

{% include functions/do_action.md hook="update_postmeta" %}

{% include classes/wpdb/update.md %}

{% include functions/wp_cache_delete.md %}

{% include functions/do_action.md hook="updated_{$meta_type}_meta" %}

{% include functions/do_action.md hook="updated_postmeta" %}

</blockquote>
