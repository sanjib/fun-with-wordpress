<?php

namespace oak\labs\wp\admin;

class Bar
{
    public static function addMenu() {
        global $wp_admin_bar;
        if (current_user_can('edit_users')) {
            $wp_admin_bar->add_menu([
                'id' => 'oak-labs-wp-users',
                'title' => 'Oak Labs WP Users',
                'href'  => admin_url('users.php'),
            ]);
        }
    }
}