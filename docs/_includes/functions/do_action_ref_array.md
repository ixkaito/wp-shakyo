{% assign brace = '}' %}
<p><code><a href="https://developer.wordpress.org/reference/functions/do_action_ref_array/">do_action_ref_array</a>( '<a href="https://developer.wordpress.org/reference/hooks/{{ include.hook }}/">{{ include.hook | remove : '{$' | remove : brace }}</a>' )</code></p>

<blockquote>

{% include functions/_wp_call_all_hook.md %}

{% for action in include.actions %}
  {% capture function %}functions/{{ action }}.md{% endcapture %}
  {% include {{ function }} %}
{% endfor %}

</blockquote>