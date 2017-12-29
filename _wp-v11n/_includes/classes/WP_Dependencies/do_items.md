{%- assign class = "WP_Dependencies" -%}
{%- assign method = "do_items" -%}
{%- assign self = class -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ class | downcase }}/{{ method | downcase }}/">{{ class }}::{{ method }}()</a></code></p>

<blockquote>

{% include classes/{{ self }}/all_deps.md %}

{% include classes/{{ self }}/do_item.md %}

</blockquote>
