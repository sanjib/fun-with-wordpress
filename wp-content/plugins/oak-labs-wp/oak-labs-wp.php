<?php

/*
 * Plugin Name: Oak Labs WordPress
 * Plugin URI: https://lab.oak.dev/wp/wordpress
 * Version: 1.0.0
 * Author: Sanjib Ahmad
 * Author URI: https://sanjib.org
 * Description: Dummy plugin hitchhiking to core menus.
 * Text Domain: oak-labs-wp
 * License: GPL v2
 *
 */

require_once dirname(__FILE__).'/src/WpOptions.php';
require_once dirname(__FILE__).'/src/Plugin.php';
require_once dirname(__FILE__).'/src/lib/FormControls.php';
require_once dirname(__FILE__).'/src/lib/WpApi.php';
require_once dirname(__FILE__).'/src/lib/AdminPageController.php';

// Running the hooks file here because it needs to be run "early"
require_once dirname(__FILE__).'/src/admin/hooks/Controller.php';
add_action('plugin_loaded', ['oak\labs\wp\admin\hooks\Controller', 'hooksPluginsLoaded']);
add_action('init', ['oak\labs\wp\admin\hooks\Controller', 'hooksInit']);

require_once dirname(__FILE__).'/src/admin/books/Controller.php';
add_action('init', ['oak\labs\wp\admin\books\Controller', 'registerPostTypeBook']);
add_action('init', ['oak\labs\wp\admin\books\Controller', 'registerPostMetaBook']);
add_action('add_meta_boxes_book', ['oak\labs\wp\admin\books\Controller', 'addMetaBoxBook']);
add_action('save_post_book', ['oak\labs\wp\admin\books\Controller', 'savePostBook']);
add_action('init', ['oak\labs\wp\admin\books\Controller', 'registerTaxonomyBook']);


if (is_admin()) {
    require_once dirname(__FILE__).'/src/admin/Bar.php';
    require_once dirname(__FILE__).'/src/admin/Menu.php';
    require_once dirname(__FILE__).'/src/admin/dashboard/Controller.php';
    require_once dirname(__FILE__).'/src/admin/posts/Controller.php';
    require_once dirname(__FILE__).'/src/admin/pages/Controller.php';
    require_once dirname(__FILE__).'/src/admin/options/Controller.php';
    require_once dirname(__FILE__).'/src/admin/home/Controller.php';
    require_once dirname(__FILE__).'/src/admin/scratch/Controller.php';
    require_once dirname(__FILE__).'/src/admin/styling/Controller.php';
    require_once dirname(__FILE__).'/src/admin/users/Controller.php';
    require_once dirname(__FILE__).'/src/admin/nonce/Controller.php';
    require_once dirname(__FILE__).'/src/admin/validate-sanitize/Controller.php';
    require_once dirname(__FILE__).'/src/admin/db/Controller.php';
    require_once dirname(__FILE__).'/src/admin/cache/Controller.php';
    require_once dirname(__FILE__).'/src/admin/js/Controller.php';
    require_once dirname(__FILE__).'/src/admin/content/Controller.php';
    require_once dirname(__FILE__).'/src/admin/roles/Controller.php';

    register_activation_hook(__FILE__, ['oak\labs\wp\Plugin', 'activate']);
    register_deactivation_hook(__FILE__, ['oak\labs\wp\Plugin', 'deactivate']);

    add_action('admin_menu', ['oak\labs\wp\admin\Menu', 'main']);

    add_action('admin_init', ['oak\labs\wp\admin\options\Controller', 'register']);
    add_action('admin_init', ['oak\labs\wp\admin\cache\Controller', 'setCache']);
    add_action('admin_init', ['oak\labs\wp\admin\cache\Controller', 'setTransient']);
    add_action('admin_init', ['oak\labs\wp\admin\hooks\Controller', 'hooksAdminInit']);
    add_action('admin_init', ['oak\labs\wp\admin\js\Controller', 'regEnqScript']);

    add_action('plugin_loaded', ['oak\labs\wp\admin\js\Controller', 'loadPluginTextDomain']);

    add_action('wp_before_admin_bar_render', ['oak\labs\wp\admin\Bar', 'addMenu']);
    add_action('wp_before_admin_bar_render', ['oak\labs\wp\admin\hooks\Controller', 'hooksWpBeforeAdminBarRender']);
}

