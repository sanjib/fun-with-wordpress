<?php

/*
 * Plugin Name: Oak Labs WordPress
 * Plugin URI: https://lab.oak.dev/wp/wordpress
 * Version: 1.0.0
 * Author: Sanjib Ahmad
 * Author URI: https://sanjib.org
 * Description: Dummy plugin hitchhiking to core menus.
 * License: GPL v2
 * Text Domain: oak-labs-wp
 *
 */

require_once dirname(__FILE__).'/src/WpOptions.php';
require_once dirname(__FILE__).'/src/Plugin.php';
require_once dirname(__FILE__).'/src/lib/FormControls.php';
require_once dirname(__FILE__).'/src/lib/WpApi.php';
require_once dirname(__FILE__).'/src/admin/Menu.php';
require_once dirname(__FILE__).'/src/admin/dashboard/Controller.php';
require_once dirname(__FILE__).'/src/admin/posts/Controller.php';
require_once dirname(__FILE__).'/src/admin/pages/Controller.php';
require_once dirname(__FILE__).'/src/admin/options/Controller.php';

if (is_admin()) {
    register_activation_hook(__FILE__, ['oak\labs\wp\Plugin', 'activate']);
    register_deactivation_hook(__FILE__, ['oak\labs\wp\Plugin', 'deactivate']);
    add_action('admin_menu', ['oak\labs\wp\admin\Menu', 'main']);
    add_action('admin_init', ['oak\labs\wp\admin\options\Controller', 'register']);
}