<p><code><a href="https://developer.wordpress.org/reference/functions/make_db_current_silent/">make_db_current_silent()</a></code></p>

<blockquote>

{% include functions/dbDelta.md %}

{% include functions/populate_options.md %}

{% include functions/wp_guess_url.md %}

{% include functions/do_action.md hook="populate_options" actions=site.data.actions.populate_options %}

{% include functions/wp_get_theme.md %}

{% include functions/_x.md %}

{% include functions/__.md %}

{% include functions/is_multisite.md %}

{% include functions/get_current_site.md %}

{% include classes/wpdb/get_col.md %}

{% include classes/wpdb/prepare.md %}

{% include classes/wpdb/query.md %}

{% include functions/__get_option.md %}

{% include functions/update_option.md %}

{% include functions/delete_option.md %}

{% include classes/wpdb/esc_like.md %}

 [`is_main_site()`](https://developer.wordpress.org/reference/functions/is_main_site/)
 
 [`is_main_network()`](https://developer.wordpress.org/reference/functions/is_main_network/)
 
> [`is_multisite()`](https://developer.wordpress.org/reference/functions/is_multisite/)
> 
> `get_current_site()`
> 
> [`wp_cache_get()`](https://developer.wordpress.org/reference/functions/wp_cache_get/)
> 
>> [`WP_Object_Cache::get()`](https://developer.wordpress.org/reference/classes/wp_object_cache/get/)
>> 
>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
> 
> [`wpdb::get_var()`](https://developer.wordpress.org/reference/classes/wpdb/get_var/)
> 
> [`wp_cache_add()`](https://developer.wordpress.org/reference/functions/wp_cache_add/)
> 
>> [`WP_Object_Cache::add()`](https://developer.wordpress.org/reference/classes/wp_object_cache/add/)
>> 
>>> [`wp_suspend_cache_addition()`](https://developer.wordpress.org/reference/functions/wp_suspend_cache_addition/)
>>> 
>>> [`WP_Object_Cache::_exists()`](https://developer.wordpress.org/reference/classes/wp_object_cache/_exists/)
>>> 
>>> [`WP_Object_Cache::set()`](https://developer.wordpress.org/reference/classes/wp_object_cache/set/)

</blockquote>
