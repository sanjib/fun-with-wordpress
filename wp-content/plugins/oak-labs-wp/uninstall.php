<?php

if (!defined( 'WP_UNINSTALL_PLUGIN')) {
    wp_die( sprintf(
        __('%s should be called during uninstallation.', 'oak-labs-wp'),
        __FILE__
    ) );
}

require_once dirname(__FILE__) . '/src/Options.php';

use oak\labs\store\Options;

delete_option(Options::$activation);