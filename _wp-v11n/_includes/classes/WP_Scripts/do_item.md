{%- assign self = "WP_Scripts" -%}
{%- assign method = "do_item" -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ self | downcase }}/{{ method | downcase }}/">{{ self }}::{{ method }}()</a></code></p>

<blockquote>

{% include classes/WP_Dependencies/do_item.md %}

{% include functions/apply_filters.md hook="script_loader_src" %}

</blockquote>
