<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      0.0.1
 * @package    Buffalo Photo Portfolio
 * @subpackage Buffalo_Photo_Portfolio/includes
 * @author     Tokyo Buffalo <tokyobuffalothemes@gmail.com>
 */
class BPP_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    0.0.1
	 */
	public static function activate() {
		$addOptions = array(
			'bpp-activated' => 0,
			'bpp-social-buttons' => 1,
		);
		update_option( 'bpp-options', $addOptions );
	}

}