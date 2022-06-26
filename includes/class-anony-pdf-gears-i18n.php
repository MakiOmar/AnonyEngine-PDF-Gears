<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/MakiOmar
 * @since      1.0.0
 *
 * @package    Anony_Pdf_Gears
 * @subpackage Anony_Pdf_Gears/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Anony_Pdf_Gears
 * @subpackage Anony_Pdf_Gears/includes
 * @author     Makiomar <maki3omar@gmail.com>
 */
class Anony_Pdf_Gears_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'anony-pdf-gears',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
