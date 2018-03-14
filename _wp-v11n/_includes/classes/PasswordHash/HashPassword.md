{%- assign class = "PasswordHash" -%}
{%- assign method = "HashPassword" -%}
{%- assign self = class -%}

{%- if include.self -%}
  {%- capture self -%}{{ include.self }}{%- endcapture -%}
{%- endif -%}

<p><code><a href="https://developer.wordpress.org/reference/classes/{{ class | downcase }}/{{ method | downcase }}/">{{ class }}::{{ method }}()</a></code></p>

<blockquote>

{% include classes/{{ self }}/get_random_bytes.md %}

{% include classes/{{ self }}/gensalt_blowfish.md %}

{% include classes/{{ self }}/gensalt_extended.md %}

{% include classes/{{ self }}/crypt_private.md %}

{% include classes/{{ self }}/gensalt_private.md %}

</blockquote>
