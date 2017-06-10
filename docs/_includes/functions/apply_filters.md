<p><code><a href="https://developer.wordpress.org/reference/functions/apply_filters/">apply_filters</a>( '<a href="https://developer.wordpress.org/reference/hooks/{{ include.hook }}/">{{ include.hook }}</a>' )</code></p>

<blockquote>

{% include functions/_wp_call_all_hook.md %}

{% for filter in include.filters %}
  {% capture function %}functions/{{ filter }}.md{% endcapture %}
  {% include {{ function }} %}
{% endfor %}

</blockquote>
