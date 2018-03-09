<p><code><a href="https://developer.wordpress.org/reference/functions/wp_insert_user/">wp_insert_user()</a></code></p>

<blockquote>

{% include classes/WP_User/to_array.md %}

{% include classes/WP_User/get_data_by.md %}

{% include functions/wp_hash_password.md %}

{% include functions/sanitize_user.md %}

{% include functions/apply_filters.md hook="pre_user_login" %}

{% include classes/WP_Error.md %}

{% include functions/__.md %}

{% include functions/sanitize_title.md %}

{% include functions/apply_filters.md hook="pre_user_nicename" %}

{% include functions/apply_filters.md hook="pre_user_url" %}

{% include functions/apply_filters.md hook="pre_user_email" %}

{% include functions/apply_filters.md hook="pre_user_nickname" %}

{% include functions/apply_filters.md hook="pre_user_first_name" %}

{% include functions/apply_filters.md hook="pre_user_last_name" %}

{% include functions/_x.md %}

{% include functions/apply_filters.md hook="pre_user_display_name" %}

{% include functions/apply_filters.md hook="pre_user_description" %}

{% include classes/wpdb/get_var.md %}

{% include classes/wpdb/prepare.md %}

{% include functions/wp_unslash.md %}

{% include classes/WP_User.md %}

{% include functions/update_user_meta.md %}

{% include functions/wp_get_user_contact_methods.md %}

{% include classes/WP_User/set_role.md %}

{% include functions/get_option.md %}

{% include functions/wp_cache_delete.md %}

{% include functions/do_action.md hook="profile_update" %}

{% include functions/do_action.md hook="user_register" %}

</blockquote>
