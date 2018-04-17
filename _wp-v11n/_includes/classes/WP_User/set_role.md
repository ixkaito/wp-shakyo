{%- assign class = "WP_User" -%}
{%- assign method = "set_role" -%}
{%- assign self = class -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ class | downcase }}/{{ method | downcase }}/">{{ class }}::{{ method }}()</a></code></p>

<blockquote>

{% include functions/update_user_meta.md %}

{% include classes/{{ self }}/get_role_caps.md %}

{% include classes/{{ self }}/update_user_level_from_caps.md %}

{% include functions/do_action.md hook="set_user_role" %}

</blockquote>
