<?php
/**
 * Oak Starter - WordPress Plugin
 *
 * @package           OakStarter
 * @author            Sanjib Ahmad
 * @copyright         2020 Oak.dev
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Oak Starter
 * Plugin URI:        https://oak.dev/wp/starter
 * Description:       Oak Starter is a sandbox WordPress plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Sanjib Ahmad
 * Author URI:        https://oak.dev/sanjib
 * Text Domain:       oak-starter
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */
namespace OakStarter;

//-- GUARD DIRECT EXECUTION
if (!defined('ABSPATH')) exit();

require __DIR__.'/assets/vendor/autoload.php';

add_action('init', __NAMESPACE__.'\launch');
function launch() {

}



