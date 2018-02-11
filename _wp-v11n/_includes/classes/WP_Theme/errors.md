{%- assign class = "WP_Theme" -%}
{%- assign method = "errors" -%}
{%- assign self = class -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ class | downcase }}/{{ method | downcase }}/">{{ class }}::{{ method }}()</a></code></p>

<blockquote>

{% include functions/is_wp_error.md %}

</blockquote>
