<?php

namespace oak\labs\wp;

class Plugin {

    function activate() {
        if ($val = get_option(Options::$activation)) {
            $val['activated_on'] = current_time('timestamp');
            update_option(Options::$activation, $val);
        } else {
            $val['activated_on'] = current_time('timestamp');
            add_option(Options::$activation, $val, '', 'no');
        }
    }

    function deactivate() {
        if ($val = get_option(Options::$activation)) {
            $val['deactivated_on'] = current_time('timestamp');
            update_option(Options::$activation, $val);
        } else {
            $val['deactivated_on'] = current_time('timestamp');
            add_option(Options::$activation, $val, '', 'no');
        }
    }
}