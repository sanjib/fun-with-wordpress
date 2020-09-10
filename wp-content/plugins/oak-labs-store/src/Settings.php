<?php

namespace oak\labs\store;

class Settings {

    // SLUG ADMIN MENU
    public static $slugAdminMenuHome = 'oak-labs-store';
    public static $slugAdminMenuCustomers = 'oak-labs-store-customers';
    public static $slugAdminMenuCategories = 'oak-labs-store-categories';
    public static $slugAdminMenuEmployees = 'oak-labs-store-employees';
    public static $slugAdminMenuOrders = 'oak-labs-store-orders';
    public static $slugAdminMenuProducts = 'oak-labs-store-products';
    public static $slugAdminMenuShippers = 'oak-labs-store-shippers';
    public static $slugAdminMenuSuppliers = 'oak-labs-store-suppliers';

    // DIR / URL
    public static function dirPlugin() {
        return plugin_dir_path(__FILE__);
    }

    public static function urlPlugin() {
        return plugin_dir_url(__FILE__);
    }

}