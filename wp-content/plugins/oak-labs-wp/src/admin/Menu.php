<?php

namespace oak\labs\wp\admin;

class Menu
{
    public static $menuSlugSettingsPage = 'oak-labs-wp-settings';
    public static $menuSlugHomePage = 'oak-labs-wp';
    public static $menuSlugStylingPage = 'oak-labs-wp-styling';
    public static $menuSlugScratchPage = 'oak-labs-wp-scratch';
    public static $menuSlugNoncePage = 'oak-labs-wp-nonce';
    public static $menuSlugUsersPage = 'oak-labs-wp-users';
    public static $menuSlugUsersSettingsPage = 'oak-labs-wp-users-settings';

    public static function main() {
        add_menu_page('Oak Labs WP - by oak.dev', 'Oak Labs WP', 'manage_options',
            self::$menuSlugHomePage, [new home\Controller(), 'main'], 'dashicons-tickets', 100);

        add_submenu_page(self::$menuSlugHomePage,
            'Oak Labs Scratch - by oak.dev', 'Scratch',
            'manage_options', self::$menuSlugScratchPage,
            [new scratch\Controller(self::$menuSlugScratchPage), 'main']);

        add_submenu_page(self::$menuSlugHomePage, 'Oak Labs WP Styling Demo - by oak.dev', 'Styling',
            'manage_options', self::$menuSlugStylingPage, [new styling\Controller(), 'main']);

        add_submenu_page(self::$menuSlugHomePage, 'Oak Labs WP Users - by oak.dev', 'Users',
            'manage_options', self::$menuSlugUsersPage, [new users\Controller(), 'main']);

        add_submenu_page(self::$menuSlugHomePage,
            'Oak Labs Nonce - by oak.dev', 'Nonce',
            'manage_options', self::$menuSlugNoncePage,
            [new nonce\Controller(self::$menuSlugNoncePage), 'main']);

        //----  ----//

        add_dashboard_page(
            'Extra Dashboard - by Oak Labs',
            'Extra Dashboard',
            'manage_options',
            'oak-labs-wp-dashboard',
            [new dashboard\Controller(), 'main']);
        add_posts_page(
            'Extra Posts - by Oak Labs',
            'Extra Posts',
            'manage_options',
            'oak-labs-wp-posts',
            [new posts\Controller(), 'main']);
        add_media_page(
            'Extra Media - by Oak Labs',
            'Extra Media',
            'manage_options',
            'oak-labs-wp-media',
            function () {
                echo "<div class='wrap'><h1>Extra Media</h1></div>";
            });
        add_links_page(
            'Extra Links - by Oak Labs',
            'Extra Links',
            'manage_options',
            'oak-labs-wp-links',
            function () {
                echo "<div class='wrap'><h1>Extra Links</h1></div>";
            });
        add_pages_page(
            'Extra Pages - by Oak Labs',
            'Extra Pages',
            'manage_options',
            'oak-labs-wp-pages',
            [new pages\Controller(), 'main']);
        add_comments_page(
            'Extra Comments - by Oak Labs',
            'Extra Comments',
            'manage_options',
            'oak-labs-wp-comments',
            function () {
                echo "<div class='wrap'><h1>Extra Comments</h1></div>";
            });
        add_theme_page(
            'Extra Theme - by Oak Labs',
            'Extra Theme',
            'manage_options',
            'oak-labs-wp-theme',
            function () {
                echo "<div class='wrap'><h1>Extra Theme</h1></div>";
            });
        add_plugins_page(
            'Extra Plugins - by Oak Labs',
            'Extra Plugins',
            'manage_options',
            'oak-labs-wp-plugins',
            function () {
                echo "<div class='wrap'><h1>Extra Plugins</h1></div>";
            });
        add_users_page(
            'Extra Users - by Oak Labs',
            'Extra Users',
            'manage_options',
            self::$menuSlugUsersSettingsPage,
            function () {
                echo "<div class='wrap'><h1>Extra Users</h1></div>";
            });
        add_management_page(
            'Extra Tools - by Oak Labs',
            'Extra Tools',
            'manage_options',
            'oak-labs-wp-tools',
            function () {
                echo "<div class='wrap'><h1>Extra Tools</h1></div>";
            });
        add_options_page(
            'Extra Settings for WP - by Oak Labs',
            'Extra Settings for WP',
            'manage_options',
            self::$menuSlugSettingsPage,
            [new options\Controller(), 'main']);
    }
}