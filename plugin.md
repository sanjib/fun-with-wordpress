# Plugin API

### Plugin Activation, Deactivation, Uninstall

```php
register_activation_hook(string $file, callable $function);
register_activation_hook(string $file, callable $function);
register_uninstall_hook(string $file, callable $callback);
```

### Admin Menu

```php
add_action('admin_menu', callable $callback);
add_menu_page(page_title, menu_title, capability, menu_slug, function, icon_url, position);
add_submenu_page(parent_slug, page_title, menu_title, capability, menu_slug, function);
```

