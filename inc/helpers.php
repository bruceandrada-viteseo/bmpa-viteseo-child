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

/**
 * Modify the projects archive query to set posts per page based on customizer setting.
 *
 * @param WP_Query $query The WP_Query instance (passed by reference).
 */
function bmpa_modify_project_archive( $query ) {
	if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'project' ) ) {

		$posts_per_page = get_theme_mod( 'projects_per_page', 6 );

		$query->set( 'posts_per_page', $posts_per_page );
	}
}
add_action( 'pre_get_posts', 'bmpa_modify_project_archive' );
