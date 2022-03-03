<?php
/**
 * Plugin Name: E-Prime Grammar Checker by metapult
 * Description: The E-Prime Grammar Checker improves your writing style by showing hints on to how avoid the passive voice and improve clarity.
 * Version: 1.1.4
 * Author: metapult
 * Author URI: https://metapult.com/e-prime
 * License: GPLv2 or later
 * Text Domain: e-prime
 */
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

defined( 'ABSPATH' ) or die( 'No Trespassing!' ); // Security

class meta_E_Prime {
	/**
	 * Construct and initialize the main plugin class
	 */

	public function __construct() {
		add_action( 'init', array( $this, 'enqueue_script' ) );
	}

	/**
	 * Enqueue Scripts
	 */

	public function enqueue_script($screen) {
		// Main Scripts
		wp_register_script( 'meta-e-prime-js', plugins_url( basename( plugin_dir_path( __FILE__ ) ) . '/assets/js/meta-e-prime.js', basename( __FILE__ ) ), array('jquery'), '1.1.0' );
		wp_enqueue_script( 'meta-e-prime-js' );
		add_filter("plugin_row_meta", array($this,'add_plugin_meta_links'), 10, 2);
	}

	public function add_plugin_meta_links($meta_fields, $file) {
		if ( plugin_basename(__FILE__) == $file ) {
			$plugin_url = "https://wordpress.org/support/plugin/e-prime-grammar-checker-by-metapult";
			$prefix = 'e-prime';
			$title = __('Rate', $prefix);
			$meta_fields[] = "<a href='" . $plugin_url . "/#new-post' target='_blank'>" . __('Ask a question', $prefix) . "</a>";
			$meta_fields[] = <<<__STARS
				<a href='$plugin_url/reviews#new-post' target='_blank' title='$title'><i class='wdi-rate-stars'>
				<svg xmlns='http://www.w3.org/2000/svg' width='15' height='15' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-star'><polygon points='12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2'/></svg>
				<svg xmlns='http://www.w3.org/2000/svg' width='15' height='15' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-star'><polygon points='12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2'/></svg>
				<svg xmlns='http://www.w3.org/2000/svg' width='15' height='15' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-star'><polygon points='12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2'/></svg>
				<svg xmlns='http://www.w3.org/2000/svg' width='15' height='15' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-star'><polygon points='12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2'/></svg>
				<svg xmlns='http://www.w3.org/2000/svg' width='15' height='15' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-star'><polygon points='12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2'/></svg>
				</i></a>
__STARS;

			$stars_color = "#ffb900";

			echo "<style>"
				. ".wdi-rate-stars{display:inline-block;color:" . $stars_color . ";position:relative;top:3px;}"
				. ".wdi-rate-stars svg{fill:" . $stars_color . ";}"
				. ".wdi-rate-stars svg:hover{fill:" . $stars_color . "}"
				. ".wdi-rate-stars svg:hover ~ svg{fill:none;}"
				. "</style>";
		}

		return $meta_fields;
	}

}

$mep = new meta_E_Prime();
