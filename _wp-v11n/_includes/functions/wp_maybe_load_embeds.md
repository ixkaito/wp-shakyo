<p><code><a href="https://developer.wordpress.org/reference/functions/wp_maybe_load_embeds/">wp_maybe_load_embeds()</a></code></p>

<blockquote>

{% include functions/apply_filters.md hook="load_default_embeds" %}

{% include functions/wp_embed_register_handler.md %}

{% include functions/wp_get_audio_extensions.md %}

{% include functions/apply_filters.md hook="wp_audio_embed_handler" %}

{% include functions/wp_embed_handler_audio.md %}

{% include functions/wp_get_video_extensions.md %}

{% include functions/apply_filters.md hook="wp_video_embed_handler" %}

{% include functions/wp_embed_handler_video.md %}

</blockquote>
