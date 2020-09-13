# Settings API

```php
register_setting($option_group, $option_name, $register_setting_args);
add_settings_section($id, $title, $callback, $page);
add_settings_field($id, $title, $callback, $page, $section, $args);
```

#### $register_setting_args

- type
- description
- sanitize_callback
- show_in_rest
- default

```php
add_settings_error($setting, $code, $message, $type);
```