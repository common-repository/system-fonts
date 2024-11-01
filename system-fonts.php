<?php
/**
 * Plugin Name: System Fonts
 * Plugin URI: https://www.nilovelez.com/system-fonts/
 * Description: Enqueues a stylesheet that lets you use the native font on each operating system
 * Version: 0.5
 * Author: Nilo Velez
 * Author URI: https://www.nilovelez.com
 * Text Domain: system-fonts
 * Domain Path: /languages
 *
 * @package WordPress
 * @subpackage SystemFonts
 */

namespace NiloVelez\SystemFonts;

/**
 * Only useful function in the plugin. Enqueues the system-ui @fontface stylesheet
 */
function enqueue_style() {

	if ( WP_DEBUG ) {
		$css_filename = 'system-fonts.css';
	} else {
		$css_filename = 'system-fonts.min.css';
	}

	wp_enqueue_style( 'system-fonts', plugins_url( $css_filename, __FILE__ ), false, '0.1' );
}


/**
 * Initialises plugin, checks if WP-Cli is running
 */
if ( ! defined( 'WP_CLI' ) || ! WP_CLI ) {
	add_action(
		'init',
		function() {
			if ( ! is_admin() ) {
				add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_style' );
			}
		}
	);
}
