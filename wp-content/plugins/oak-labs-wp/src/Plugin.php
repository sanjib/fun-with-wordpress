<?php

namespace oak\labs\wp;

class Plugin {

    function activate() {
        if ($val = get_option(Option::$activation)) {
            $val['activated_on'] = current_time('timestamp');
            update_option(Option::$activation, $val);
        } else {
            $val['activated_on'] = current_time('timestamp');
            add_option(Option::$activation, $val, '', 'no');
        }
    }

    function deactivate() {
        if ($val = get_option(Option::$activation)) {
            $val['deactivated_on'] = current_time('timestamp');
            update_option(Option::$activation, $val);
        } else {
            $val['deactivated_on'] = current_time('timestamp');
            add_option(Option::$activation, $val, '', 'no');
        }
    }
}