<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://survos.com
 * @since             1.0.0
 * @package           Survos survey plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Survos Wordpress plugin
 * Plugin URI:        https://github.com/Survos/survos-wp-plugin
 * Description:
 * Version:           1.0.0
 * Author:            Survos
 * Author URI:        http://survos.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       survos-wp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-survos-wp-activator.php
 */
function activate_survos_wp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-survos-wp-activator.php';
	survos_wp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-survos-wp-deactivator.php
 */
function deactivate_survos_wp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-survos-wp-deactivator.php';
	survos_wp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_survos_wp' );
register_deactivation_hook( __FILE__, 'deactivate_survos_wp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-survos-wp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_survos_wp() {

	$plugin = new survos_wp();
	$plugin->run();

}
run_survos_wp();
