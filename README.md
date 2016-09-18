# wp.shakyo

> **index.php**
> 
>> **wp-blog-header.php**
>> 
>>> **wp-load.php**
>>> 
>>>> `error_reporting()`
>>>> 
>>>> **wp-config.php**
>>>> 
>>>>> **wp-setting.php**
>>>>> 
>>>>>> **wp-includes/load.php**
>>>>>> 
>>>>>> **wp-includes/default-constants.php**
>>>>>> 
>>>>>> `wp_initial_constants()`
>>>>>> 
>>>>>>> `is_multisite()`
>>>>>> 
>>>>>> `wp_check_php_mysql_versions()`
>>>>>> 
>>>>>> `date_default_timezone_set()`
>>>>>> 
>>>>>> `wp_unregister_GLOBALS()`
>>>>>> 
>>>>>> `wp_fix_server_vars()`
>>>>>> 
>>>>>> `wp_favicon_request()`
>>>>>> 
>>>>>> `wp_maintenance()`
>>>>>> 
>>>>>> `timer_start()`
>>>>>> 
>>>>>> `wp_debug_mode()`
>>>>>> 
>>>>>> `wp_set_lang_dir()`
>>>>>> 
>>>>>> **wp-includes/compat.php**
>>>>>> 
>>>>>> **wp-includes/functions.php**
>>>>>> 
>>>>>>> **wp-includes/option.php**
>>>>>> 
>>>>>> **wp-includes/class-wp.php**
>>>>>> 
>>>>>> **wp-includes/class-wp-error.php**
>>>>>> 
>>>>>> **wp-includes/plugin.php**
>>>>>> 
>>>>>> **wp-includes/pomo/mo.php**
>>>>>> 
>>>>>>> **wp-includes/pomo/translations.php**
>>>>>>> 
>>>>>>>> **wp-includes/pomo/entry.php**
>>>>>>> 
>>>>>>> **wp-includes/pomo/streams.php**
>>>>>> 
>>>>>> `require_wp_db()`
>>>>>> 
>>>>>>> **wp-includes/wp-db.php**
>>>>>>> 
>>>>>>> `new wpdb()`
>>>>>>> 
>>>>>>>> `wpdb::__construc()`
>>>>>>>> 
>>>>>>>>> `wpdb::__destruct()`
>>>>>>>>> 
>>>>>>>>> `wpdb::init_charset()`
>>>>>>>>> 
>>>>>>>>> `wpdb::db_connect()`
>>>>>>>>> 
>>>>>>>>> `wpdb::set_charset()`
