<p><code><a href="https://developer.wordpress.org/reference/functions/dbDelta/">dbDelta()</a></code></p>

<blockquote>

{% include functions/wp_get_db_schema.md %}

{% include functions/apply_filters.md hook="dbdelta_queries" %}

{% include functions/apply_filters.md hook="dbdelta_create_queries" %}

{% include functions/apply_filters.md hook="dbdelta_insert_queries" %}

{% include classes/wpdb/tables.md %}

{% include functions/is_main_site.md %}

{% include classes/wpdb/suppress_errors.md %}

{% include classes/wpdb/get_results.md %}

{% include classes/wpdb/query.md %}

</blockquote>
