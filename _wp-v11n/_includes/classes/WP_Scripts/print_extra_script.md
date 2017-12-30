{%- assign parent = "WP_Dependencies" -%}
{%- assign class = "WP_Scripts" -%}
{%- assign method = "print_extra_script" -%}
{%- assign self = class -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ class | downcase }}/{{ method | downcase }}/">{{ class }}::{{ method }}()</a></code></p>

<blockquote>

{% include classes/{{ self }}/get_data.md %}

</blockquote>
