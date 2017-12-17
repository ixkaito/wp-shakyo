{%- assign class = include.class %-}
{%- if ! class -%}
  {%- class = 'WP_Dependencies' -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ class | downcase }}/do_items/">{{ class }}::do_items()</a></code></p>

<blockquote>

{% include classes/{{ class }}/all_deps.md %}

{% include classes/{{ class }}/do_item.md %}

</blockquote>
