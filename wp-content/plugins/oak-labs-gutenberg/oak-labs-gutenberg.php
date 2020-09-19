<?php

/*
 * Plugin Name: Oak Labs Gutenberg
 * Plugin URI: https://oak.dev
 * Author: Sanjib Ahmad
 * Author URI: https://sanjib.org
 * Description: Gutenberg demo code
 * Text Domain: oak-labs-gutenberg
 *
 */

define('OAK_LABS_GUTENBERG', 'oak-labs-gutenberg');
define('OAK_LABS_GUTENBERG_JS_HELLO_WORLD', 'oak-labs-gutenberg/hello-world');

add_action('enqueue_block_editor_assets', function () {
    wp_register_script(OAK_LABS_GUTENBERG_JS_HELLO_WORLD,
        plugin_dir_url(__FILE__).'public/js/hello-world.js',
        ['wp-blocks', 'wp-element'],
        '1.0.1');
    wp_enqueue_script(OAK_LABS_GUTENBERG_JS_HELLO_WORLD);
});