<?php

if (!defined( 'WP_UNINSTALL_PLUGIN')) {
    wp_die( sprintf(
        __('%s should be called during uninstallation.', 'oak-labs-store'),
        __FILE__
    ) );
}

require_once dirname(__FILE__).'/src/dev/oak/labs/wp/store/utils/Settings.php';

use dev\oak\labs\wp\store\utils\Settings;

delete_option(Settings::$wpOptionActivation);