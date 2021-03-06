<?php

namespace oak\labs\wp\admin;

class Menu
{
    public static $menuSlugSettingsPage = 'oak-labs-wp-settings';
    public static $menuSlugUsersSettingsPage = 'oak-labs-wp-users-settings';

    public static $menuSlugHomePage = 'oak-labs-wp';
    public static $menuSlugStylingPage = 'oak-labs-wp-styling';
    public static $menuSlugScratchPage = 'oak-labs-wp-scratch';
    public static $menuSlugNoncePage = 'oak-labs-wp-nonce';
    public static $menuSlugUsersPage = 'oak-labs-wp-users';
    public static $menuSlugValidateSanitizePage = 'oak-labs-wp-validate-sanitize';
    public static $menuSlugDbPage = 'oak-labs-wp-db';
    public static $menuSlugCachePage = 'oak-labs-wp-cache';
    public static $menuSlugHooksPage = 'oak-labs-wp-hooks';
    public static $menuSlugJsPage = 'oak-labs-wp-js';
    public static $menuSlugContentPage = 'oak-labs-wp-content';
    public static $menuSlugBooksPage = 'oak-labs-wp-books';
    public static $menuSlugRolesPage = 'oak-labs-wp-roles';

    public static function main() {
        add_menu_page('Oak Labs WP - by oak.dev', 'Oak Labs WP', 'manage_options',
            self::$menuSlugHomePage, [new home\Controller(), 'main'], 'dashicons-tickets', 1);

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

        add_submenu_page(self::$menuSlugHomePage,
            'Oak Labs Validate & Sanitize - by oak.dev', 'Validate & Sanitize',
            'manage_options', self::$menuSlugValidateSanitizePage,
            [new validate_sanitize\Controller(self::$menuSlugValidateSanitizePage), 'main']);

        add_submenu_page(self::$menuSlugHomePage,
            'Oak Labs DB - by oak.dev', 'DB',
            'manage_options', self::$menuSlugDbPage,
            [new db\Controller(self::$menuSlugDbPage), 'main']);

        add_submenu_page(self::$menuSlugHomePage,
            'Oak Labs Cache - by oak.dev', 'Cache',
            'manage_options', self::$menuSlugCachePage,
            [new cache\Controller(self::$menuSlugCachePage), 'main']);

        add_submenu_page(self::$menuSlugHomePage,
            'Oak Labs Hooks - by oak.dev', 'Hooks',
            'manage_options', self::$menuSlugHooksPage,
            [new hooks\Controller(self::$menuSlugHooksPage), 'main']);

        add_submenu_page(self::$menuSlugHomePage,
            'Oak Labs JavaScript - by oak.dev', 'JavaScript',
            'manage_options', self::$menuSlugJsPage,
            [new js\Controller(self::$menuSlugJsPage), 'main']);

        add_submenu_page(self::$menuSlugHomePage,
            'Oak Labs Content - by oak.dev', 'Content',
            'manage_options', self::$menuSlugContentPage,
            [new content\Controller(self::$menuSlugContentPage), 'main']);

        add_submenu_page(self::$menuSlugHomePage,
            'Oak Labs Books - by oak.dev', 'Books',
            'manage_options', self::$menuSlugBooksPage,
            [new books\Controller(self::$menuSlugBooksPage), 'main']);

        add_submenu_page(self::$menuSlugHomePage,
            'Oak Labs Roles - by oak.dev', 'Roles',
            'manage_options', self::$menuSlugRolesPage,
            [new roles\Controller(self::$menuSlugRolesPage), 'main']);

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