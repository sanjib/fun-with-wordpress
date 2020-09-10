<?php

namespace dev\oak\labs\wp\store\admin;

use dev\oak\labs\wp\store\utils\Settings;

class Menu {
    public static function add() {
        require_once dirname(__FILE__) . '/home/Controller.php';
        require_once dirname(__FILE__) . '/customers/Controller.php';
        require_once dirname(__FILE__) . '/categories/Controller.php';
        require_once dirname(__FILE__) . '/employees/Controller.php';
        require_once dirname(__FILE__) . '/orders/Controller.php';
        require_once dirname(__FILE__) . '/products/Controller.php';
        require_once dirname(__FILE__) . '/shippers/Controller.php';
        require_once dirname(__FILE__) . '/suppliers/Controller.php';

        add_menu_page('Oak Labs Store from oak.dev',
            'Oak Labs Store',
            'manage_options',
            Settings::$slugAdminMenuHome,
            [new home\Controller(), 'main'],
            'dashicons-store',
            99);

        add_submenu_page(Settings::$slugAdminMenuHome,
            'Customers - Oak Labs Store from oak.dev',
            'Customers',
            'manage_options',
            Settings::$slugAdminMenuCustomers,
            [new customers\Controller(), 'main']);

        add_submenu_page(Settings::$slugAdminMenuHome,
            'Categories - Oak Labs Store from oak.dev',
            'Categories',
            'manage_options',
            Settings::$slugAdminMenuCategories,
            [new categories\Controller(), 'main']);

        add_submenu_page(Settings::$slugAdminMenuHome,
            'Employees - Oak Labs Store from oak.dev',
            'Employees',
            'manage_options',
            Settings::$slugAdminMenuEmployees,
            [new employees\Controller(), 'main']);

        add_submenu_page(Settings::$slugAdminMenuHome,
            'Orders - Oak Labs Store from oak.dev',
            'Orders',
            'manage_options',
            Settings::$slugAdminMenuOrders,
            [new orders\Controller(), 'main']);

        add_submenu_page(Settings::$slugAdminMenuHome,
            'Products - Oak Labs Store from oak.dev',
            'Products',
            'manage_options',
            Settings::$slugAdminMenuProducts,
            [new products\Controller(), 'main']);

        add_submenu_page(Settings::$slugAdminMenuHome,
            'Shippers - Oak Labs Store from oak.dev',
            'Shippers',
            'manage_options',
            Settings::$slugAdminMenuShippers,
            [new shippers\Controller(), 'main']);

        add_submenu_page(Settings::$slugAdminMenuHome,
            'Suppliers - Oak Labs Store from oak.dev',
            'Suppliers',
            'manage_options',
            Settings::$slugAdminMenuSuppliers,
            [new suppliers\Controller(), 'main']);

    }
}