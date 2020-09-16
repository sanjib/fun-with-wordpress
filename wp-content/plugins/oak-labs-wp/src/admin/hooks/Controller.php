<?php

namespace oak\labs\wp\admin\hooks;

use oak\labs\wp\lib\AdminPageController;

class Controller extends AdminPageController {
    public static $debugBucket = [];

    public static function hooksInit() {
        //remove_all_actions('wp_head');
        //remove_all_actions('wp_footer');

        add_action('wp_footer', function () {
            echo <<<EOT
<script>
console.log("--> Added by oak-labs-wp via action hook: wp_footer");
</script>
EOT;
        }, PHP_INT_MAX);

        $hasActionWpHead = has_action('wp_head');
        self::$debugBucket['init__has_action__wp_head'] = $hasActionWpHead;

        $didActionWpHead = did_action('wp_head');
        self::$debugBucket['init__did_action__wp_head'] = $didActionWpHead;
    }

    public static function hooksAdminInit() {
        $hasActionWpHead = has_action('wp_head');
        self::$debugBucket['admin_init__has_action__wp_head'] = $hasActionWpHead;

        $didActionWpHead = did_action('wp_head');
        self::$debugBucket['admin_init__did_action__wp_head'] = $didActionWpHead;
    }

    public static function hooksPluginsLoaded() {
        $hasActionWpHead = has_action('wp_head');
        self::$debugBucket['plugins_loaded__has_action__wp_head'] = $hasActionWpHead;

        $didActionWpHead = did_action('wp_head');
        self::$debugBucket['plugins_loaded__did_action__wp_head'] = $didActionWpHead;
    }

    public static function hooksWpBeforeAdminBarRender() {
        $hasActionWpBeforeAdminBarRender = has_action('wp_head');
        self::$debugBucket['wp_before_admin_bar_render__has_action__wp_head'] = $hasActionWpBeforeAdminBarRender;

        $didActionWpBeforeAdminBarRender = did_action('wp_head');
        self::$debugBucket['wp_before_admin_bar_render__did_action__wp_head'] = $didActionWpBeforeAdminBarRender;
    }

    public function main() {
        include dirname(__FILE__).'/main.php';
    }
}
