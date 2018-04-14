{%- assign class = "WP_User" -%}
{%- assign method = "get_role_caps" -%}
{%- assign self = class -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ class | downcase }}/{{ method | downcase }}/">{{ class }}::{{ method }}()</a></code></p>

<blockquote>

{% include classes/WP_Roles.md %}

{% include classes/WP_Roles/get_role.md %}

</blockquote>
