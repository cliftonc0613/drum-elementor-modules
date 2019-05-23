<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://drumcreative.com/
 * @since      1.0.0
 *
 * @package    Drum_Elementor_Modules
 * @subpackage Drum_Elementor_Modules/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Drum_Elementor_Modules
 * @subpackage Drum_Elementor_Modules/includes
 * @author     Clifton Canady <webmaster@drumcreative.com>
 */
class Drum_Elementor_Modules_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'drum-elementor-modules',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
