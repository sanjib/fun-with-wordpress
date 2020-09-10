<?php

namespace oak\labs\wp\admin;

class Menu
{
    public function main() {
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
            'oak-labs-wp-users',
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
            'Extra Settings - by Oak Labs',
            'Extra Settings',
            'manage_options',
            'oak-labs-wp-settings',
            function () {
                echo "<div class='wrap'><h1>Extra Settings</h1></div>";
            });
    }
}