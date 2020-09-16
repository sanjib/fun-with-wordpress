<?php

namespace oak\labs\wp;

class Plugin {

    // CACHE
    public static $wpCacheKey_fruits = 'fruits';
    public static $wpCacheGroup_oak = 'oak_labs_wp_cache';

    // TRANS
    public static $wpTransKey_colors = 'oak_labs_wp_colors';

    public static function activate() {
        if ($val = get_option(WpOptions::$activationKey)) {
            $val['activated_on'] = current_time('timestamp');
            update_option(WpOptions::$activationKey, $val);
        } else {
            $val['activated_on'] = current_time('timestamp');
            add_option(WpOptions::$activationKey, $val, '', 'no');
        }
    }

    public static function deactivate() {
        if ($val = get_option(WpOptions::$activationKey)) {
            $val['deactivated_on'] = current_time('timestamp');
            update_option(WpOptions::$activationKey, $val);
        } else {
            $val['deactivated_on'] = current_time('timestamp');
            add_option(WpOptions::$activationKey, $val, '', 'no');
        }
    }
}