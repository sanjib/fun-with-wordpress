# Hooks

Technically it's just callbacks, so both actions and filters could be considered the same, with the exception that filters have an extra capability - the ability to modify content.

## Actions

```php
// For creating custom action hooks:
do_action($tag, $arg = '');
do_action_ref_array(string $tag, array $args);


add_action(string $tag, callable $function, int $priority=10, int $argQuantity=1);
remove_action(string $tag, callable $function, int $priority=10);
remove_all_actions(string $tag, int|bool $priority=false);


has_action(string $tag, callable|bool $function=false); // returns priority, can be 0 so use === instead of ==
did_action(string $tag);
current_action();
```

#### Common Action Hooks

- plugins_loaded
- init
- admin_menu
- save_post
- wp_head


## Filters

```php
// For creating custom filter hooks:
apply_filters(string $tag, mixed $value);
apply_filters_ref_array(string $tag, array $args);


add_filter(string $tag, callable $function, int $priority=10, int $argQuantity=1);
remove_filter(string $tag, callable $function, int $priority=10 );
remove_all_filters(string $tag, int|bool $priority=false );


has_filter(string $tag, callable|bool $function=false);
current_filter();
```

#### Common Filter Hooks

- the_content
- template_include
