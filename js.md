# JavaScript

- Register scripts first
- Then enqueue


```php
wp_register_script($handle, $src, $deps=[], $ver=false, $in_footer=false);
wp_deregister_script($handle);

wp_enqueue_script($handle); // register first, then enqueue with only handle
wp_dequeue_script($handle);

wp_localize_script($handle, $object_name, $l10n);
```

Inline Script

```php
// wp_add_inline_script($handle, $data, $position='after');

$data = <<<EOT
console.log('--> Hello');
EOT;
wp_register_script($handle, '');
wp_enqueue_script($handle);
wp_add_inline_script($handle, $data);
```

Bundled Scripts

```php
//-- JQUERY-UI - INTERACTIONS
wp_enqueue_script('jquery-ui-draggable');
wp_enqueue_script('jquery-ui-droppable');
wp_enqueue_script('jquery-ui-resizable');
wp_enqueue_script('jquery-ui-selectable');
wp_enqueue_script('jquery-ui-sortable');

//-- JQUERY-UI - WIDGETS
wp_enqueue_script('jquery-ui-accordion');
wp_enqueue_script('jquery-ui-autocomplete');
wp_enqueue_script('jquery-ui-button');
wp_enqueue_script('jquery-ui-datepicker');
wp_enqueue_script('jquery-ui-dialog');
wp_enqueue_script('jquery-ui-progressbar');
wp_enqueue_script('jquery-ui-selectmenu');
wp_enqueue_script('jquery-ui-slider');
wp_enqueue_script('jquery-ui-spinner');
wp_enqueue_script('jquery-ui-tabs');
wp_enqueue_script('jquery-ui-tooltip');

//-- JQUERY-UI - EFFECTS
wp_enqueue_script('jquery-effects-blind');
wp_enqueue_script('jquery-effects-bounce');
wp_enqueue_script('jquery-effects-clip');
wp_enqueue_script('jquery-effects-drop');
wp_enqueue_script('jquery-effects-explode');
wp_enqueue_script('jquery-effects-fade');
wp_enqueue_script('jquery-effects-fold');
wp_enqueue_script('jquery-effects-highlight');
wp_enqueue_script('jquery-effects-puff');
wp_enqueue_script('jquery-effects-pulsate');
wp_enqueue_script('jquery-effects-scale');
wp_enqueue_script('jquery-effects-shake');
wp_enqueue_script('jquery-effects-slide');
wp_enqueue_script('jquery-effects-transfer');
```

WP global

- wp.a11y.speak()
- wp.escapeHtml
- wp.i18n
- wp.heartbeat

Links

https://trends.builtwith.com/javascript