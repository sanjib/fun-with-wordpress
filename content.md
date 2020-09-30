# Content

Post types should always be registered on the 'init' hook.

```php
register_post_type(string $post_type, array|string $args=[]);
register_post_meta($post_type, $meta_key, array $args);
add_meta_box(
       string $id,
       string $title,
       callable $callback,
       string|array|WP_Screen $screen = null,
       string $context = 'advanced',
       string $priority = 'default',
       array $callback_args = null
);
get_post_meta($post_id, $key = '', $single = false);
delete_post_meta($post_id, $meta_key, $meta_value = '');
update_post_meta($post_id, $meta_key, $meta_value, $prev_value = '');

```

A minimal example - post type "book". This will load up a top-level admin menu item Book - for add/edit/delete books.

```php
self::$rptBook = register_post_type('book', [
    'public'           => true,
    'menu_icon'        => 'dashicons-book',
    'labels' => [
        'name'         => 'Books',
        'add_new_item' => 'Add New Book',
        'edit_item'    => 'Edit Book',
        'search_items' => 'Search Books',
    ],
]);
```

Post Type Example Implementations:

- Book collection
- Testimonials
- eCommerce products
- Famous quotes
- Event calendar
- Music database
- Image slideshows
- Forums

Taxonomy

```php
get_taxonomy($taxonomy);
the_terms($post_id, $taxonomy, $before = '', $sep = ', ', $after = '');
taxonomy_exists($taxonomy);
is_taxonomy_hierarchical($taxonomy);
is_tax($taxonomy = '', $term = '');
```

Links:

- https://developer.wordpress.org/reference/functions/register_post_type/
- https://developer.wordpress.org/reference/functions/get_post_type_labels/
- https://developer.wordpress.org/reference/functions/get_post_type_capabilities/

