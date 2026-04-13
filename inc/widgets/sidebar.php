<?php
/**
 * Sidebar Widgets Registration.
 *
 * @package Bmpa_Viteseo_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Custom Sidebar.
 */
function bmpa_register_custom_sidebar() {
	register_sidebar(
		array(
			'name'          => __( 'BMPA Custom Sidebar', 'bmpa-viteseo-child' ),
			'id'            => 'bmpa-custom-sidebar',
			'description'   => __( 'Custom widget area', 'bmpa-viteseo-child' ),
			'before_widget' => '<div class="bmpa-widget">',
			'after_widget'  => '</div>',
		)
	);
}
add_action( 'widgets_init', 'bmpa_register_custom_sidebar' );

/**
 * Sidebar Shortcode
 */
function bmpa_sidebar_shortcode() {
	ob_start();

	if ( is_active_sidebar( 'bmpa-custom-sidebar' ) ) {
		dynamic_sidebar( 'bmpa-custom-sidebar' );
	} else {
		echo '<p>No widgets added</p>';
	}

	return ob_get_clean();
}
add_shortcode( 'bmpa_sidebar', 'bmpa_sidebar_shortcode' );
