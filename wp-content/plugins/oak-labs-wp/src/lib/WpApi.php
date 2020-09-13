<?php

namespace oak\labs\wp\lib;

class WpApi
{
    public static function addSettingsFields($fieldId, $containerOptionsKey) {
        $options = get_option($containerOptionsKey);
        $fieldValue = $options[$fieldId];
        $fieldName = $containerOptionsKey."[$fieldId]";
        return [$fieldId, $fieldName, $fieldValue];
    }
}