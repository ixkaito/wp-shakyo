{%- assign self = "WP_Scripts" -%}
{%- assign method = "set_group" -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ self | downcase }}/{{ method | downcase }}/">{{ self }}::{{ method }}()</a></code></p>


<blockquote>

{% include classes/{{ self }}/get_data.md %}

{% include classes/WP_Dependencies/set_group.md self="WP_Scripts" %}

</blockquote>
