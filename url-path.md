# URLand Path Functions

```php
// WordPress installation location
site_url();

// site homepage (this is usually what you want)
home_url();

// WordPress admin
admin_url();
admin_url('options-general.php');

// REST API endpoint
rest_url();

// URL to WordPress includes dir
includes_url();

// URL to WordPress content dir
content_url();

// URL to WordPress plugins dir
plugins_url($path, $plugin);
```

URL and Path to "this" Plugin Directory
```php
plugin_dir_path(__FILE__);
plugin_dir_url(__FILE__);
```
