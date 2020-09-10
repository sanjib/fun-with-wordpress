<?php

namespace dev\oak\labs\wp\store\utils;

class Activation {

    public static function activate() {
        if ($currentData = get_option(Settings::$wpOptionActivation)) {
            if (is_array($currentData)) {
                $currentData['activated_at'] = current_time('timestamp');
                update_option(Settings::$wpOptionActivation, $currentData);
            }
        } else {
            $newData['activated_at'] = current_time('timestamp');
            add_option(Settings::$wpOptionActivation, $newData, '', 'no');
        }
    }

    public static function deactivate() {
        if ($currentData = get_option(Settings::$wpOptionActivation)) {
            if (is_array($currentData)) {
                $currentData['deactivated_at'] = current_time('timestamp');
                update_option(Settings::$wpOptionActivation, $currentData);
            }
        } else {
            $newData['deactivated_at'] = current_time('timestamp');
            add_option(Settings::$wpOptionActivation, $newData, '', 'no');
        }
    }
}
