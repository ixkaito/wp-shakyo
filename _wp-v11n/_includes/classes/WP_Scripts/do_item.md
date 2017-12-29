{%- assign parent = "WP_Dependencies" -%}
{%- assign class = "WP_Scripts" -%}
{%- assign method = "do_item" -%}
{%- assign self = class -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ class | downcase }}/{{ method | downcase }}/">{{ class }}::{{ method }}()</a></code></p>

<blockquote>

{% include classes/{{ parent }}/{{ method }}.md self="{{ self }}" %}

{% include functions/apply_filters.md hook="script_loader_src" %}

{% include classes/{{ self }}/in_default_dir.md self="WP_Scripts" %}

{% include classes/{{ self }}/print_extra_script.md self="WP_Scripts" %}

{% include functions/add_query_arg.md %}

</blockquote>
