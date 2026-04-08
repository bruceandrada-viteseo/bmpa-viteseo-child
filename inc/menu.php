<?php
/**
 * Menu Registration
 *
 * @package BMPA_ViteSEO_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register navigation menus for the theme.
 */
function bmpa_register_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'bmpa-viteseo-child' ),
		)
	);
}

add_action( 'after_setup_theme', 'bmpa_register_menus' );
