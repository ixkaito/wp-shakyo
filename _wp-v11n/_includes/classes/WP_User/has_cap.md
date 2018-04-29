{%- assign class = "WP_User" -%}
{%- assign method = "has_cap" -%}
{%- assign self = class -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ class | downcase }}/{{ method | downcase }}/">{{ class }}::{{ method }}()</a></code></p>

<blockquote>

{% include functions/_deprecated_argument.md %}

{% include functions/__.md %}

{% include classes/{{ self }}/translate_level_to_cap.md %}

{% include functions/is_multisite.md %}

{% include functions/is_super_admin.md %}

{% include functions/apply_filters.md hook="user_has_cap" %}

</blockquote>
