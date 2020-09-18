<?php

namespace oak\labs\wp\admin\js;

use oak\labs\wp\admin\Menu;
use oak\labs\wp\lib\AdminPageController;
use oak\labs\wp\lib\WpApi;

class Controller extends AdminPageController {
    public static $scriptJavaScript = 'oaks_labs_wp_javascript';
    public static $scriptInline1 = 'oaks_labs_wp_inline1';

    public static function regEnqScript() {
        if (isset($_GET['page']) && ($_GET['page'] == Menu::$menuSlugJsPage)) {
            // REGISTER
            wp_register_script(self::$scriptJavaScript,
                WpApi::url('public/js/javascript.js'),
                [], '1.0.1', false);

            // LOCALIZE
            wp_localize_script(self::$scriptJavaScript, 'oakLabsWp', [
                'greeting' => __('Hello', 'oak-labs-wp')
            ]);

            // ENQUEUE
            wp_enqueue_script(self::$scriptJavaScript);
        }
    }

    public static function loadPluginTextDomain() {
        load_plugin_textdomain('oak-labs-wp',
            false,
            dirname(plugin_basename(__FILE__)).'/../../../lang');
    }

    public function main() {

        include dirname(__FILE__).'/main.php';
    }
}
