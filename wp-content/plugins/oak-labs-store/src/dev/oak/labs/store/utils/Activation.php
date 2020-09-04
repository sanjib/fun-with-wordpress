<?php

namespace dev\oak\labs\store\utils;

class Activation {

    public static function activate() {
        if ($currentData = get_option(OAK_LABS_STORE_OPTION_ACTIVATION)) {
            if (is_array($currentData)) {
                $currentData['activated_at'] = current_time('timestamp');
                update_option(OAK_LABS_STORE_OPTION_ACTIVATION, $currentData);
            }
        } else {
            $newData['activated_at'] = current_time('timestamp');
            add_option(OAK_LABS_STORE_OPTION_ACTIVATION, $newData);
        }
    }

    public static function deactivate() {
        if ($currentData = get_option(OAK_LABS_STORE_OPTION_ACTIVATION)) {
            if (is_array($currentData)) {
                $currentData['deactivated_at'] = current_time('timestamp');
                update_option(OAK_LABS_STORE_OPTION_ACTIVATION, $currentData);
            }
        } else {
            $newData['deactivated_at'] = current_time('timestamp');
            add_option(OAK_LABS_STORE_OPTION_ACTIVATION, $newData);
        }
    }
}
