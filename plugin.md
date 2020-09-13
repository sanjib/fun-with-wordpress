# Plugin API

### Plugin Activation, Deactivation, Uninstall

```php
register_activation_hook(string $file, callable $function);
register_deactivation_hook(string $file, callable $function);
register_uninstall_hook(string $file, callable $callback);
```

### Admin Menu

```php
add_action('admin_menu', callable $callback);
add_menu_page(page_title, menu_title, capability, menu_slug, function, $icon_url, position);
add_submenu_page(parent_slug, page_title, menu_title, capability, menu_slug, function);
```

Examples:

- $icon_url: ''

### Admin Menu Under a WP Menu

```php
add_dashboard_page(page_title, menu_title, capability, menu_slug, function);
add_posts_page(page_title, menu_title, capability, menu_slug, function);
add_media_page(page_title, menu_title, capability, menu_slug, function);
add_links_page(page_title, menu_title, capability, menu_slug, function);
add_pages_page(page_title, menu_title, capability, menu_slug, function);
add_comments_page(page_title, menu_title, capability, menu_slug, function);
add_theme_page(page_title, menu_title, capability, menu_slug, function);
add_plugins_page(page_title, menu_title, capability, menu_slug, function);
add_users_page(page_title, menu_title, capability, menu_slug, function);
add_management_page(page_title, menu_title, capability, menu_slug, function);
add_options_page(page_title, menu_title, capability, menu_slug, function);
```

