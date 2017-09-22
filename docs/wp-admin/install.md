---
layout: default
filename: wp-admin/install.php
---

<blockquote>



{% include functions/_ex.md %}

{% include functions/_e.md %}

{% include functions/display_setup_form.md %}

{% include classes/WP_Locale.md %}

{% include functions/wp_die.md %}

{% include classes/WP_Error/get_error_message.md %}

{% include functions/wp_unslash.md %}

{% include functions/is_email.md %}

{% include classes/wpdb/show_errors.md %}

{% include functions/wp_install.md %}

{% include functions/wp_slash.md %}

{% include functions/esc_html.md %}

{% include functions/sanitize_user.md %}

{% include functions/wp_is_mobile.md %}

{% include functions/wp_print_scripts.md %}

</blockquote>
