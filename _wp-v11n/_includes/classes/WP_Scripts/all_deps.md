{%- assign parent = "WP_Dependencies" -%}
{%- assign class = "WP_Scripts" -%}
{%- assign method = "all_deps.md" -%}
{%- assign self = class -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ class | downcase }}/{{ method | downcase }}/">{{ class }}::{{ method }}()</a></code></p>

<blockquote>

{% include classes/{{ parent }}/{{ method }}.md self="WP_Scripts" %}

{% include functions/apply_filters.md hook="print_scripts_array" %}

</blockquote>
