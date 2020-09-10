<?php

namespace oak\labs\store;

class Plugin {

    public static function activate() {
        if ($currentData = get_option(Options::$activation)) {
            if (is_array($currentData)) {
                $currentData['activated_at'] = current_time('timestamp');
                update_option(Options::$activation, $currentData);
            }
        } else {
            $newData['activated_at'] = current_time('timestamp');
            add_option(Options::$activation, $newData, '', 'no');
        }
    }

    public static function deactivate() {
        if ($currentData = get_option(Options::$activation)) {
            if (is_array($currentData)) {
                $currentData['deactivated_at'] = current_time('timestamp');
                update_option(Options::$activation, $currentData);
            }
        } else {
            $newData['deactivated_at'] = current_time('timestamp');
            add_option(Options::$activation, $newData, '', 'no');
        }
    }
}
