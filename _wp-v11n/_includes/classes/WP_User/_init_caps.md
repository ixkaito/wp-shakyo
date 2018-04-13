{%- assign class = "WP_User" -%}
{%- assign method = "_init_caps" -%}
{%- assign self = class -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ class | downcase }}/{{ method | downcase }}/">{{ class }}::{{ method }}()</a></code></p>

<blockquote>

{% include classes/wpdb/get_blog_prefix.md %}

{% include functions/get_user_meta.md %}

{% include classes/{{ self }}/get_role_caps.md %}

</blockquote>
