<?php
/**
 * Exception handling
 *
 * @package    OakStarter
 * @since      1.0.0
 * @author     Sanjib Ahmad
 * @link       https://oak.dev/sanjib
 * @license    GNU General Public License 2.0+
 */
namespace OakStarter;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

add_action('init', __NAMESPACE__.'\load_whoops', 1);
/**
 * Load Whoops.
 *
 * @since 1.0.0
 *
 * @return void
 */
function load_whoops() {
    $whoops = new Run();
    $errorPage = new PrettyPageHandler();
    $whoops->pushHandler($errorPage);
    $whoops->register();
}

