<?php

namespace oak\labs\store\admin;

class Menu {
    // SLUG ADMIN MENU
    public static $slugAdminMenuHome = 'oak-labs-store';
    public static $slugAdminMenuCustomers = 'oak-labs-store-customers';
    public static $slugAdminMenuCategories = 'oak-labs-store-categories';
    public static $slugAdminMenuEmployees = 'oak-labs-store-employees';
    public static $slugAdminMenuOrders = 'oak-labs-store-orders';
    public static $slugAdminMenuProducts = 'oak-labs-store-products';
    public static $slugAdminMenuShippers = 'oak-labs-store-shippers';
    public static $slugAdminMenuSuppliers = 'oak-labs-store-suppliers';
    public static $slugAdminMenuSettings = 'oak-labs-store-settings';

    public function add() {
        require_once dirname(__FILE__).'/home/Controller.php';
        require_once dirname(__FILE__).'/customers/Controller.php';
        require_once dirname(__FILE__).'/categories/Controller.php';
        require_once dirname(__FILE__).'/employees/Controller.php';
        require_once dirname(__FILE__).'/orders/Controller.php';
        require_once dirname(__FILE__).'/products/Controller.php';
        require_once dirname(__FILE__).'/shippers/Controller.php';
        require_once dirname(__FILE__).'/suppliers/Controller.php';
        require_once dirname(__FILE__).'/settings/Controller.php';

        add_menu_page('Oak Labs Store from oak.dev',
            'Oak Labs Store',
            'manage_options',
            self::$slugAdminMenuHome,
            [new home\Controller(), 'main'],
            'dashicons-store',
            0);

        add_submenu_page(self::$slugAdminMenuHome,
            'Customers - Oak Labs Store from oak.dev',
            'Customers',
            'manage_options',
            self::$slugAdminMenuCustomers,
            [new customers\Controller(), 'main']);

        add_submenu_page(self::$slugAdminMenuHome,
            'Categories - Oak Labs Store from oak.dev',
            'Categories',
            'manage_options',
            self::$slugAdminMenuCategories,
            [new categories\Controller(), 'main']);

        add_submenu_page(self::$slugAdminMenuHome,
            'Employees - Oak Labs Store from oak.dev',
            'Employees',
            'manage_options',
            self::$slugAdminMenuEmployees,
            [new employees\Controller(), 'main']);

        add_submenu_page(self::$slugAdminMenuHome,
            'Orders - Oak Labs Store from oak.dev',
            'Orders',
            'manage_options',
            self::$slugAdminMenuOrders,
            [new orders\Controller(), 'main']);

        add_submenu_page(self::$slugAdminMenuHome,
            'Products - Oak Labs Store from oak.dev',
            'Products',
            'manage_options',
            self::$slugAdminMenuProducts,
            [new products\Controller(), 'main']);

        add_submenu_page(self::$slugAdminMenuHome,
            'Shippers - Oak Labs Store from oak.dev',
            'Shippers',
            'manage_options',
            self::$slugAdminMenuShippers,
            [new shippers\Controller(), 'main']);

        add_submenu_page(self::$slugAdminMenuHome,
            'Suppliers - Oak Labs Store from oak.dev',
            'Suppliers',
            'manage_options',
            self::$slugAdminMenuSuppliers,
            [new suppliers\Controller(), 'main']);

        add_submenu_page(self::$slugAdminMenuHome,
            'Settings - Oak Labs Store from oak.dev',
            'Settings',
            'manage_options',
            self::$slugAdminMenuSettings,
            [new settings\Controller(), 'main']);

    }
}