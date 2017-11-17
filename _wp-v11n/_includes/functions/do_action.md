{%- assign brace = '}' -%}
{%- assign hook = include.hook | remove : '{$' | remove : brace -%}

<p><code><a href="https://developer.wordpress.org/reference/functions/do_action/">do_action</a>( '<a href="https://developer.wordpress.org/reference/hooks/{{ hook }}/">{{ include.hook }}</a>' )</code></p>

<blockquote>

{% include functions/_wp_call_all_hook.md %}

{% for action in site.data.actions[hook] %}
  {%- capture function %}functions/{{ action }}.md{% endcapture -%}
  {%- include {{ function }} -%}
{% endfor %}

</blockquote>
