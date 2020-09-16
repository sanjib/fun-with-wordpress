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
        $exeTime = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
        $exeTime = number_format($exeTime, '2');
        $wp_admin_bar->add_menu([
            'id' => 'oak-labs-wp-exe-time',
            'title' => "Executed in: $exeTime secs",
        ]);
    }
}