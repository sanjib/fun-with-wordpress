<?php

namespace oak\labs\wp;

class Plugin {

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