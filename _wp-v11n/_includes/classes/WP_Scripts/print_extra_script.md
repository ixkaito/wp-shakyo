{%- assign self = "WP_Scripts" -%}
{%- assign method = "print_extra_script" -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ self | downcase }}/{{ method | downcase }}/">{{ self }}::{{ method }}()</a></code></p>


<blockquote>

{% include classes/{{ self }}/get_data.md %}

</blockquote>
