{%- assign class = "WP_User" -%}
{%- assign method = "update_user_level_from_caps" -%}
{%- assign self = class -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ class | downcase }}/{{ method | downcase }}/">{{ class }}::{{ method }}()</a></code></p>

<blockquote>

{% include functions/update_user_meta.md %}

{% include classes/WP_User/level_reduction.md %}

{% include classes/wpdb/get_blog_prefix.md %}

</blockquote>
