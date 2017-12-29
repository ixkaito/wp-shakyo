{%- assign parent = "WP_Dependencies" -%}
{%- assign class = "WP_Scripts" -%}
{%- assign method = "get_data" -%}
{%- assign self = class -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

{% include classes/{{ parent }}/{{ method }}.md self="{{ self }}" %}

