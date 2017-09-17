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

{% include functions/wp_install_language_form.md %}

{% include functions/wp_download_language_pack.md %}



</blockquote>
