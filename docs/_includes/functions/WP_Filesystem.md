<p><code><a href="https://developer.wordpress.org/reference/functions/wp_filesystem/">WP_Filesystem()</a></code></p>

<blockquote>

 **wp-admin/includes/class-wp-filesystem-base.php**
 
 [`get_filesystem_method()`](https://developer.wordpress.org/reference/functions/get_filesystem_method/)
 
> [`trailingslashit()`](https://developer.wordpress.org/reference/functions/trailingslashit/)
> 
>> [`untrailingslashit()`](https://developer.wordpress.org/reference/functions/untrailingslashit/)
> 
> [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`filesystem_method`](https://developer.wordpress.org/reference/hooks/filesystem_method)
> 
>> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
 
 [`apply_filters()`](https://developer.wordpress.org/reference/functions/apply_filters/) - [`filesystem_method_file`](https://developer.wordpress.org/reference/hooks/filesystem_method_file/)
 
> [`_wp_call_all_hook()`](https://developer.wordpress.org/reference/functions/_wp_call_all_hook/)
 
 **wp-admin/includes/class-wp-filesystem-direct.php**
 
 [`new WP_Filesystem_Direct()`](https://developer.wordpress.org/reference/classes/wp_filesystem_direct/) <- [`WP_Filesystem_Base`](https://developer.wordpress.org/reference/classes/wp_filesystem_base/)
 
> [`WP_Filesystem_Direct::__construct()`](https://developer.wordpress.org/reference/classes/wp_filesystem_direct/__construct/)
> 
>> [`new WP_Error()`](https://developer.wordpress.org/reference/classes/wp_error/)
>> 
>>> [`WP_Error::__construct()`](https://developer.wordpress.org/reference/classes/wp_error/__construct/)
 
 [`is_wp_error()`](https://developer.wordpress.org/reference/functions/is_wp_error/)
 
 [`WP_Error::get_error_code()`](https://developer.wordpress.org/reference/classes/wp_error/get_error_code/)
 
> [`WP_Error::get_error_codes()`](https://developer.wordpress.org/reference/classes/wp_error/get_error_codes/)
 
 [`WP_Fielsystem_Base::connect()`](https://developer.wordpress.org/reference/classes/wp_fielsystem_base/connect/)

</blockquote>