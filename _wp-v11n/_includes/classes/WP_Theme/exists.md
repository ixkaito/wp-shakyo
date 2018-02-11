{%- assign class = "WP_Theme" -%}
{%- assign method = "exists" -%}
{%- assign self = class -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ class | downcase }}/{{ method | downcase }}/">{{ class }}::{{ method }}()</a></code></p>


<blockquote>

{% include classes/{{ self }}/errors.md %}

</blockquote>
