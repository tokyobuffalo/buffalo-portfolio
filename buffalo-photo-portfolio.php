<?php
/**
 * Plugin Name: Buffalo Photography Portfolio 
 * Description: A plugin that you can use to show your photy
 * Version: 0.0.1
 * Author: Tokyo Buffalo
 * Author URI: http://www.github.com/tokyobuffalo
 * License: GPL2
 *
 * A plugin that photographers can use for their portfolio.
 *
 * This plugin used the WordPress Plugin Boilerplate as a foundation
 * which you find here:
 * 	http://wppb.io/
 *
 * The plugin will use the following prefix for Javascript and 
 * CSS files:
 * bpp
 *
 */

// For security reasons, if an outsider tries to access
// this file, then abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

//The file that will run once the plugin is activated
require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-activator.php';

// The code the will run once the plugin is deactivated
require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-deactivator.php';

// A hook that will be called once the plugin is activated
register_activation_hook( __FILE__, array( 'Plugin_Name_Activator', 'activate' ) );

// A hook that will be called once the plugin is deactivatd
register_deactivation_hook( __FILE__, array( 'Plugin_Name_Deactivator', 'deactivate' ) );

 // The core file which includes internalization
require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name.php';

/**
 *
 * Start up the Buffalo!
 *
 * @since    0.0.1
 */

function run_buffalo_portfolio() {

		$plugin = new Buffalo_Photo_Portfolio();
		$plugin->run();

	}

	run_buffalo_portfolio();

}
