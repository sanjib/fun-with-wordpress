<?php

/*
 * Plugin Name:       Oak Labs Store
 * Plugin URI:        https://labs.oak.dev/wp/store
 * Description:       An experimental throw-away WordPress store plugin.
 * Version:           1.0.0
 * Requires at least: 5.3
 * Requires PHP:      5.6
 * Author:            Sanjib Ahmad
 * Author URI:        https://sanjib.org
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       oak-labs-store
 * Domain Path:       /public/lang
 *
 */

/*
Copyright (C) 2020 Sanjib Ahmad

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

use oak\labs\store\Plugin;
use oak\labs\store\admin\Menu;

require_once dirname(__FILE__).'/src/Options.php';
require_once dirname(__FILE__).'/src/Plugin.php';
require_once dirname(__FILE__).'/src/Settings.php';

if (is_admin()) {
    // ACTIVATION
    register_activation_hook(__FILE__, function () {
        require_once dirname(__FILE__) . '/src/Options.php';
        Plugin::activate();
    });
    // DEACTIVATION
    register_deactivation_hook(__FILE__, function () {
        require_once dirname(__FILE__) . '/src/Options.php';
        Plugin::deactivate();
    });
    // ADMIN MENU
    require_once dirname(__FILE__) . '/src/admin/Menu.php';
    add_action('admin_menu', [new Menu(), 'add']);
}
