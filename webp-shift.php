<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Webp_Shift
 *
 * @wordpress-plugin
 * Plugin Name:       WebP Shift
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       Seamless Image Optimization: Automatically convert and serve WebP images to enhance your site’s performance without sacrificing quality.
 * Version:           1.0.0
 * Author:            Dominic_N
 * Author URI:        https://dominicn.dev/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       webp-shift
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 */
define( 'WEBP_SHIFT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-webp-shift-activator.php
 */
function activate_webp_shift() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-webp-shift-activator.php';
	WEBP_SHIFT_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-webp-shift-deactivator.php
 */
function deactivate_webp_shift() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-webp-shift-deactivator.php';
	WEBP_SHIFT_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_webp_shift' );
register_deactivation_hook( __FILE__, 'deactivate_webp_shift' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-webp-shift.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_webp_shift() {

	$plugin = new Webp_Shift();
	$plugin->run();

}
run_webp_shift();