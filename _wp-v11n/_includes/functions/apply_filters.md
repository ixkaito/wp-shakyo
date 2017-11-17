{%- assign brace = '}' -%}
{%- assign hook = include.hook | remove : '{$' | remove : brace -%}

<p><code><a href="https://developer.wordpress.org/reference/functions/apply_filters/">apply_filters</a>( '<a href="https://developer.wordpress.org/reference/hooks/{{ hook }}/">{{ include.hook }}</a>' )</code></p>

<blockquote>

{% include functions/_wp_call_all_hook.md %}

{% for filter in site.data.filters[hook] %}
  {%- capture function %}functions/{{ filter }}.md{% endcapture -%}
  {%- include {{ function }} -%}
{% endfor %}

</blockquote>
