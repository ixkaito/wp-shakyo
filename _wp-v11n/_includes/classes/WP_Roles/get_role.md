{%- assign class = "WP_Roles" -%}
{%- assign method = "get_role" -%}
{%- assign self = class -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ class | downcase }}/{{ method | downcase }}/">{{ class }}::{{ method }}()</a></code></p>
