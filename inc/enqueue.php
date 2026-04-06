<?php
/**
 * Enqueue child theme styles and scripts.
 *
 * @package Bmpa_Viteseo_Child
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue styles and scripts for the child theme.
 *
 * @return void
 */
function bmpa_viteseo_child_enqueue_styles() {
	$parent_style = 'twentytwentyfive-style';

	// Enqueue parent theme styles.
	wp_enqueue_style( $parent_style, get_parent_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'twentytwentyfive' )->get( 'Version' ) );

	// Enqueue child theme styles, making sure it loads after the parent theme styles.
	wp_enqueue_style( 'bmpa-viteseo-child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get( 'Version' ) );
}


add_action( 'wp_enqueue_scripts', 'bmpa_viteseo_child_enqueue_styles' );
