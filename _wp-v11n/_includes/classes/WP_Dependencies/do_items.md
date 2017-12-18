{%- assign self = "WP_Dependencies" -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ self | downcase }}/do_items/">{{ self }}::do_items()</a></code></p>

<blockquote>

{% include classes/{{ self }}/all_deps.md %}

{% include classes/{{ self }}/do_item.md %}

</blockquote>
