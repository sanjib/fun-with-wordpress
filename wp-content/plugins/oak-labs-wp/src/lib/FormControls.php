<?php

namespace oak\labs\wp\lib;

class FormControls
{
    public static function selectOptions($lvp, $selectedVal, $pleaseSelect = '- Any -') {
        $options = '';
        if ($pleaseSelect != null) {
            $options .= "<option value=''>$pleaseSelect</option>";
        }
        foreach ($lvp as $label => $value) {
            $label = esc_html($label);
            $value = esc_attr($value);

            if ($value == $selectedVal) {
                $options .= "<option value='$value' selected>$label</option>";
            } else {
                $options .= "<option value='$value'>$label</option>";
            }
        }
        return $options;
    }

    public static function radio($name, $lvp, $selectedVal) {
        $options = '';
        foreach ($lvp as $label => $value) {
            $label = esc_html($label);
            $value = esc_attr($value);

            $options .= '<p>';
            if ($value == $selectedVal) {
                $options .= "<input type='radio' id='$value' name='$name' value='$value' checked />";
            } else {
                $options .= "<input type='radio' id='$value' name='$name' value='$value' />";
            }
            $options .= "<label for='$value'>$label</label>";
            $options .= '</p>';
        }
        return $options;
    }
}