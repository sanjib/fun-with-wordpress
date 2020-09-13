<?php

namespace oak\labs\wp\admin\options;

use oak\labs\wp\WpOptions;
use oak\labs\wp\admin\Menu;
use oak\labs\wp\lib\WpApi;
use oak\labs\wp\lib\FormControls;

class Controller {

    private static function sectionGeneral() { return WpOptions::$settingsKey.'_section_general'; }
    private static function sectionWriting() { return WpOptions::$settingsKey.'_section_writing'; }
    private static function sectionReading() { return WpOptions::$settingsKey.'_section_reading'; }

    private static $fieldIdSiteName = 'site_name';
    private static $fieldIdTagline = 'tagline';
    private static $fieldIdRandomStringPopName = 'random_string_pop_name';
    private static $fieldIdAllowsPostsViaEmail = 'allow_posts_via_email';
    private static $fieldIdSiteClosedReason = 'site_closed_reason';

    public static function register() {
        // CALLED IN ADMIN_INIT
        register_setting(WpOptions::$settingsKey, WpOptions::$settingsKey, [
            'sanitize_callback' => [get_called_class(), 'validateOptions'],
        ]);
    }

    public static function validateOptions($input) {
        $valid = $input;

        // SITE NAME
        $valid[self::$fieldIdSiteName] = preg_replace(
            '/[^a-zA-Z\s]/',
            '',
            $input[self::$fieldIdSiteName] );
        if( $valid[self::$fieldIdSiteName] !== $input[self::$fieldIdSiteName] ) {
            add_settings_error(
                self::$fieldIdSiteName,
                self::$fieldIdSiteName,
                'Incorrect value entered for Site Name! Please only input letters and spaces.',
                'error'
            );
        }

        $valid[self::$fieldIdTagline] = sanitize_text_field($input[self::$fieldIdTagline]);
        $valid[self::$fieldIdRandomStringPopName] = sanitize_text_field($input[self::$fieldIdRandomStringPopName]);

        return $valid;
    }

    public function main() {
        // SECTIONS
        add_settings_section(self::sectionGeneral(), 'Settings - General',
            function () { echo "<p>General settings section in addition to the same settings provided by WordPress.</p>"; },
            Menu::$menuSlugSettingsPage);
        add_settings_section(self::sectionWriting(), 'Settings - Writing',
            function () { echo "<p>Writing settings section in addition to the same settings provided by WordPress.</p>"; },
            Menu::$menuSlugSettingsPage);
        add_settings_section(self::sectionReading(), 'Settings - Reading',
            function () { echo "<p>Reading settings section in addition to the same settings provided by WordPress.</p>"; },
            Menu::$menuSlugSettingsPage);

        //---- FIELDS - GENERAL ----//

        // SITE_NAME
        add_settings_field(
            WpOptions::$settingsKey.'_'.self::$fieldIdSiteName, 'Site Name',
            function () {
                list($id, $name, $value) = WpApi::addSettingsFields(self::$fieldIdSiteName, WpOptions::$settingsKey);
                echo "<input id='$id' name='$name' type='text' value='".esc_attr($value)."' />";
            }, Menu::$menuSlugSettingsPage, self::sectionGeneral());

        // TAGLINE
        add_settings_field(WpOptions::$settingsKey.'_'.self::$fieldIdTagline, 'Tagline', function () {
                list($id, $name, $value) = WpApi::addSettingsFields(self::$fieldIdTagline, WpOptions::$settingsKey);
                echo "<input id='$id' name='$name' type='text' value='".esc_attr($value)."' />";
            }, Menu::$menuSlugSettingsPage, self::sectionGeneral());

        //---- FIELDS - WRITING ----//

        // RANDOM STRING POP NAME
        add_settings_field(WpOptions::$settingsKey.'_'.self::$fieldIdRandomStringPopName, 'Random String for POP Name', function () {
                list($id, $name, $value) = WpApi::addSettingsFields(self::$fieldIdRandomStringPopName, WpOptions::$settingsKey);
                echo "<input id='$id' name='$name' type='text' value='".esc_attr($value)."' />";
            }, Menu::$menuSlugSettingsPage, self::sectionWriting());

        // ALLOW POSTS TO BE SUBMITTED VIA EMAIL
        add_settings_field(WpOptions::$settingsKey.'_'.self::$fieldIdAllowsPostsViaEmail, 'Allow Posts Via Email', function () {
            list($_id, $name, $value) = WpApi::addSettingsFields(self::$fieldIdAllowsPostsViaEmail, WpOptions::$settingsKey);
            //$value = $value ? $value : 'yes';
            $radio = FormControls::radio($name, [
                'Yes' => 'yes',
                'No' => 'no',
            ], $value);
            echo $radio;
        }, Menu::$menuSlugSettingsPage, self::sectionWriting());

        //---- FIELDS - READING ----//
        // SITE CLOSED REASON
        add_settings_field(WpOptions::$settingsKey.'_'.self::$fieldIdSiteClosedReason, 'Site Closed Reason', function () {
                list($id, $name, $value) = WpApi::addSettingsFields(self::$fieldIdSiteClosedReason, WpOptions::$settingsKey);
                $options = FormControls::selectOptions([
                    'Closed for Easter' => 'easter',
                    'Closed for Christmas' => 'christmas',
                    'Closed for New Years' => 'new_years',
                ], $value, '- Please select -');
                echo "<select id='$id' name='$name'>$options</select>";
            }, Menu::$menuSlugSettingsPage, self::sectionReading());

        include dirname(__FILE__).'/main.php';
    }

}