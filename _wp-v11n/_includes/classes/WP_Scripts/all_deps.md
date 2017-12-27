{%- assign self = "WP_Scripts" -%}
{%- assign method = "all_deps" -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ self | downcase }}/{{ method | downcase }}/">{{ self }}::{{ method }}()</a></code></p>


<blockquote>

{% include classes/WP_Dependencies/all_deps.md self="WP_Scripts" %}

{% include functions/apply_filters.md hook="print_scripts_array" %}

</blockquote>
