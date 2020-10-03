<?php
/**
 * Sandbox
 *
 * @package    OakStarter
 * @since      1.0.0
 * @author     Sanjib Ahmad
 * @link       https://oak.dev/sanjib
 * @license    GNU General Public License 2.0+
 */

namespace OakStarter;

add_action('loop_start', __NAMESPACE__.'\demo');
/**
 *
 * Demo - testing purposes only.
 *
 * @since 1.0.0
 *
 * @return void
 *
 */
function demo() {
//	d(get_the_ID());
}