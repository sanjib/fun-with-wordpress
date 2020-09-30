<?php

namespace oak\labs\wp\admin\books;

use oak\labs\wp\lib\AdminPageController;

class Controller extends AdminPageController {
    private static $postTypeBook;
    private static $postMetaBook;

    public static function registerPostTypeBook() {
        self::$postTypeBook = register_post_type('book', [
            // General
            'public'              => true,
            'publicly_queryable'  => true,
            'show_in_rest'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'exclude_from_search' => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_icon'           => 'dashicons-book',
            'hierarchical'        => false,
            'has_archive'         => 'books',
            'query_var'           => 'book',
            //'capability_type'     => 'book', // custom capability
            'map_meta_cap'        => true, // enable mapping
            // Rewrites
            'rewrite' => [
                'slug'       => 'books',
                'with_front' => false,
                'pages'      => true,
                'feeds'      => true,
                'ep_mask'    => EP_PERMALINK,
            ],
            // Features
            'supports' => [
                'title', 'editor', 'excerpt', 'thumbnail'
            ],
            'taxonomies' => [
                'post_tag'
            ],
            // Labels
            'labels' => [
                'name'                     => 'Books',
                'singular_name'            => 'Book',
                'add_new'                  => 'Add New',
                'add_new_item'             => 'Add New Book',
                'edit_item'                => 'Edit Book',
                'new_item'                 => 'New Book',
                'view_item'                => 'View Book',
                'view_items'               => 'View Books',
                'search_items'             => 'Search Books',
                'not_found'                => 'No books found.',
                'not_found_in_trash'       => 'No books found in Trash.',
                'all_items'                => 'All Books',
                'archives'                 => 'Book Archives',
                'attributes'               => 'Book Attributes',
                'insert_into_item'         => 'Insert into book',
                'uploaded_to_this_item'    => 'Uploaded to this book',
                'featured_image'           => 'Book Image',
                'set_featured_image'       => 'Set book image',
                'remove_featured_image'    => 'Remove book image',
                'use_featured_image'       => 'Use as book image',
                'filter_items_list'        => 'Filter books list',
                'items_list_navigation'    => 'Books list navigation',
                'items_list'               => 'Books list',
                'item_published'           => 'Book published.',
                'item_published_privately' => 'Book published privately.',
                'item_reverted_to_draft'   => 'Book reverted to draft.',
                'item_scheduled'           => 'Book scheduled.',
                'item_updated'             => 'Book updated.',
            ],
        ]);
    }

    public static function registerPostMetaBook() {
        self::$postMetaBook = register_post_meta('book', 'book_author', [
            'single'            => true,
            'show_in_rest'      => true,
            'sanitize_callback' => function( $value ) {
                return wp_strip_all_tags( $value );
            }
        ]);
    }

    public static function addMetaBoxBook() {
        add_meta_box(
            'oak-labs-wp-book-details',
            'Book Details',
            function ($post) {
                $author = get_post_meta($post->ID, 'book_author', true);
                wp_nonce_field(basename(__FILE__), 'oak-labs-wp-book-details');
                ?>
                <p>
                    <label for="oak-labs-wp-book-author">Book Author:</label>
                    <input id="oak-labs-wp-book-author"
                           name="oak-labs-wp-book-author"
                           value="<?= esc_attr($author) ?>"
                           style="width: 100%;"
                           type="text" />
                </p>
                <?php
            },
            'book',
            'advanced',
            'high'
        );
    }

    public static function savePostBook($post_id, $post) {
        // Verify nonce
        if (!isset( $_POST['oak-labs-wp-book-details'] ) ||
            !wp_verify_nonce( $_POST['oak-labs-wp-book-details'], basename(__FILE__ ))) {
            return;
        }

        // Does user have permission?
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }

        // Guard against Ajax request, autosave, or revision.
        if (wp_doing_ajax() ||
            wp_is_post_autosave($post_id) ||
            wp_is_post_revision($post_id)) {
            return;
        }

        // Get the existing book author if the value exists.
        // If no existing book author, value is empty string.
        $oldAuthor = get_post_meta($post_id, 'book_author', true);

        // Strip all tags from posted book author.
        // If no value is passed from the form, set to empty string.
        $newAuthor = isset($_POST['oak-labs-wp-book-author'])
            ? wp_strip_all_tags($_POST['oak-labs-wp-book-author'])
            : '';

        // If: there's an old author but not a new author, delete old author.
        // Else if: new author doesn't match old author, add/update.
        if (!$newAuthor && $oldAuthor) {
            delete_post_meta($post_id, 'book_author');

        } elseif ($oldAuthor !== $newAuthor) {
            update_post_meta($post_id, 'book_author', $newAuthor);
        }
    }

    public static function registerTaxonomyBook() {
        register_taxonomy( 'genre', 'book', [
            // Taxonomy args
            'public'            => true,
            'show_in_rest'      => true,
            'show_ui'           => true,
            'show_in_nav_menus' => true,
            'show_tagcloud'     => true,
            'show_admin_column' => true,
            'hierarchical'      => true,
            'query_var'         => 'genre',
            // Rewrite handles
            'rewrite' => [
                'slug'         => 'genre',
                'with_front'   => false,
                'hierarchical' => false,
                'ep_mask'      => EP_NONE
            ],
            // Labels
            'labels' => [
                'name'                       => 'Genres',
                'singular_name'              => 'Genre',
                'menu_name'                  => 'Genres',
                'name_admin_bar'             => 'Genre',
                'search_items'               => 'Search Genres',
                'popular_items'              => 'Popular Genres',
                'all_items'                  => 'All Genres',
                'edit_item'                  => 'Edit Genre',
                'view_item'                  => 'View Genre',
                'update_item'                => 'Update Genre',
                'add_new_item'               => 'Add New Genre',
                'new_item_name'              => 'New Genre Name',
                'not_found'                  => 'No genres found.',
                'no_terms'                   => 'No genres',
                'items_list_navigation'      => 'Genres list navigation',
                'items_list'                 => 'Genres list',
                // Hierarchical only
                'select_name'                => 'Select Genre',
                'parent_item'                => 'Parent Genre',
                'parent_item_colon'          => 'Parent Genre:'
            ]
        ]);
    }

    public function main() {
        d(self::$postTypeBook);
        d(self::$postMetaBook);
        include dirname(__FILE__).'/main.php';
    }
}
