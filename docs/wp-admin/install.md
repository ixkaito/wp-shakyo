---
layout: default
filename: wp-admin/install.php
---

<blockquote>

{% include files/wp-load.php.md %}

{% include files/wp-admin/includes/upgrade.php.md %}

{% include files/wp-admin/includes/translation-install.php.md %}

{% include files/wp-includes/wp-db.php.md %}

{% include functions/nocache_headers.md %}

{% include functions/is_blog_installed.md %}

{% include functions/display_header.md %}

{% include classes/wpdb/db_version.md %}

{% include functions/__.md %}

{% include functions/wp_can_install_language_pack.md %}

{% include functions/wp_get_available_translations.md %}



{% include functions/load_default_textdomain.md %}

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
