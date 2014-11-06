<?php

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      0.0.1
 * @package    Buffalo Photo Portfolio
 * @subpackage Plugin_Name/includes
 * @author     Tokyo Buffalo <tokyobuffalothemes@gmail.com>
 */

class Buffalo_Photo_Activate {

		/**
	 * Create a database.
	 *
	 * The function, when the plugin is activated, will
	 * create an entry into the SQL database. 
	 *
	 * @since   0.0.1
	 */
	
		public static function activate() {
			echo 'Hello World';
		}
}