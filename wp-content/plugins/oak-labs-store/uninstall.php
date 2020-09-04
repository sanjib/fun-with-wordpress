<?php

if (!defined( 'WP_UNINSTALL_PLUGIN')) {
    wp_die( sprintf(
        __('%s should be called during uninstallation.', 'oak-labs-store'),
        __FILE__
    ) );
}

require_once dirname(__FILE__).'/defines.php';

delete_option(OAK_LABS_STORE_OPTION_ACTIVATION);