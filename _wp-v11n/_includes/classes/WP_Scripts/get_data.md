{%- assign self = "WP_Scripts" -%}
{%- assign method = "get_data" -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

{% include classes/WP_Dependencies/{{ method }}.md self="{{ self }}" %}
