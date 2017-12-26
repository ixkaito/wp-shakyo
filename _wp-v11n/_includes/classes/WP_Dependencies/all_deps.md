{%- assign self = "WP_Dependencies" -%}
{%- assign method = "all_deps" -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ self | downcase }}/{{ method | downcase }}/">{{ self }}::{{ method }}()</a></code></p>

<blockquote>

{% include classes/{{ self }}/set_group.md %}

</blockquote>
