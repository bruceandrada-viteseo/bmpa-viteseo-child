<?php
/**
 * Helper functions.
 *
 * @package Bmpa_Viteseo_Child
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Render footer via shortcode.
 *
 * @return string
 */
function bmpa_footer_shortcode() {
	ob_start();

	get_template_part( 'parts/footer' );

	return ob_get_clean();
}

add_shortcode( 'bmpa_footer', 'bmpa_footer_shortcode' );