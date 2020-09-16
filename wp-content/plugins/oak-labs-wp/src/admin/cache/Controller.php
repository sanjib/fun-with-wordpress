<?php

namespace oak\labs\wp\admin\cache;

use oak\labs\wp\lib\AdminPageController;
use oak\labs\wp\Plugin;

class Controller extends AdminPageController {
    public static function setCache() {
        $fruits = ['Apples', 'Oranges', 'Bananas', 'Mangoes', 'Pears'];
        wp_cache_set(Plugin::$wpCacheKey_fruits, $fruits, Plugin::$wpCacheGroup_oak, 0);
    }

    public static function setTransient() {
        if (!get_transient(Plugin::$wpTransKey_colors)) {
            $colors = ['Blue', 'Red', 'Green', 'Orange', 'Yellow', 'Purple'];
            set_transient(Plugin::$wpTransKey_colors, $colors, 5);
        }
    }

    public function main() {
        include dirname(__FILE__).'/main.php';
    }
}
