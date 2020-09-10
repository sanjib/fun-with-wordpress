# Options API

```php
add_option($option_name, $option_value); // autoload = yes
add_option($option_name, $option_value, '', 'no'); // autoload = no
update_option($option_name, $option_value); // also can be used instead of add_option but without being able to set autoload
delete_option($option_name);

```