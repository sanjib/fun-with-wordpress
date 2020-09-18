<?php

namespace oak\labs\wp\lib;

class WpApi {

    public static function path($path) { return plugin_dir_path(__FILE__).'../../'.$path; }
    public static function url($url) { return plugin_dir_url(__FILE__).'../../'.$url; }

    public static function addSettingsFields($fieldId, $containerOptionsKey) {
        $options = get_option($containerOptionsKey);
        $fieldValue = $options[$fieldId];
        $fieldName = $containerOptionsKey."[$fieldId]";
        return [$fieldId, $fieldName, $fieldValue];
    }
}