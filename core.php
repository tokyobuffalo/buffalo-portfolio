<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             0.0.1
 * @package           Buffalo Photo Portfolio
 *
 * @wordpress-plugin
 * Plugin Name:       Buffalo Photo Portfolio
 * Description:       A photo portfolio plugin.
 * Version:           0.0.1
 * Author:            Tokyo Buffalo
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bpp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/includes/bpp-activator.php';

/**
 * The code that runs during plugin deactivation.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/includes/bpp-deactivator.php';

/** This action is documented in includes/class-plugin-name-activator.php */
register_activation_hook( __FILE__, array( 'BPP_Activator', 'activate' ) );

/** This action is documented in includes/class-plugin-name-deactivator.php */
register_deactivation_hook( __FILE__, array( 'BPP_Deactivator', 'deactivate' ) );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'src/includes/bpp.php';

/**
 * Define the constants that the plugin will use
 */

define('BPP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define('BPP_PLUGIN_ASSETS', plugin_dir_path( __FILE__ ) . 'assets' );
define('BPP_PLUGIN_ICON', plugin_dir_url( __FILE__ ) . 'assets/bpp-icon.png' );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.0.1
 */
function start_up_buffalo() {

	$plugin = new BPP();
	$plugin->run();

}
start_up_buffalo();
