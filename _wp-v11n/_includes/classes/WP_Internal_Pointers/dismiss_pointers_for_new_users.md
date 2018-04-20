{%- assign class = "WP_Internal_Pointers" -%}
{%- assign method = "dismiss_pointers_for_new_users" -%}
{%- assign self = class -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ class | downcase }}/{{ method | downcase }}/">{{ class }}::{{ method }}()</a></code></p>

<blockquote>

{% include functions/add_user_meta.md %}

</blockquote>
