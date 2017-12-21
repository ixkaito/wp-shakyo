{%- assign self = "WP_Dependencies" -%}
{%- assign method = "do_items" -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ self | downcase }}/{{ method | downcase }}/">{{ self }}::{{ method }}()</a></code></p>

<blockquote>

{% include classes/{{ self }}/all_deps.md %}

{% include classes/{{ self }}/do_item.md %}

</blockquote>
