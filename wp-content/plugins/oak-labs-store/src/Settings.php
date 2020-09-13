<?php

namespace oak\labs\store;

class Settings {

    // DIR / URL
    public static function dirPlugin() {
        return plugin_dir_path(__FILE__);
    }

    public static function urlPlugin() {
        return plugin_dir_url(__FILE__);
    }

}