<?php
/**
 * Plugin Name: Buffalo Photography Portfolio 
 * Description: A plugin that you can use to show your photy
 * Version: 0.0.1
 * Author: Tokyo Buffalo
 * Author URI: http://www.github.com/tokyobuffalo
 * License: GPL2
 */

// For security reasons, if an outsider tries to access
// this file, then abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

class BuffaloPhotoPortfolio {

	
	function __construct(argument)
	{
				define( 'BPP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
	}

}
