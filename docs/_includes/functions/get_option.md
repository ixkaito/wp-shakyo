<p><code><a href="https://developer.wordpress.org/reference/functions/get_option/">get_option()</a></code></p>

<blockquote>

{% include functions/apply_filters.md hook="pre_option_{$option}" filters=site.data.filters.pre_option_option %}

{% include functions/wp_cache_get.md %}

{% include functions/apply_filters.md hook="default_option_{$option}" filters=site.data.filters.default_option_option %}

{% include functions/wp_load_alloptions.md %}

{% include functions/wp_cache_get.md %}

{% include classes/wpdb/get_row.md %}

{% include classes/wpdb/prepare.md %}

 [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
 
> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
> 
>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>> 
>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>> 
>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)
 
 [`wp_cache_set()`](https://developer.wordpress.org/reference/functions/wp_cache_set/)
 
 [`wpdb::suppress_errors()`](https://developer.wordpress.org/reference/classes/wpdb/suppress_errors/)
 
 [`get_option()`](https://developer.wordpress.org/reference/functions/get_option/)
 
 [`untrailingslashit()`](https://developer.wordpress.org/reference/functions/untrailingslashit/)
 
 [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`option_{$option}`](https://developer.wordpress.org/reference/hooks/option_option/)
 
> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
 
 [`maybe_unserialize()`](https://developer.wordpress.org/reference/functions/maybe_unserialize/)
 
> [`is_serialized()`](https://developer.wordpress.org/reference/functions/is_serialized/)

</blockquote>