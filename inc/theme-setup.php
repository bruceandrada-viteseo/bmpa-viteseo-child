<?php
/**
 * Theme setup.
 *
 * @package Bmpa_Viteseo_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Setup theme defaults.
 *
 * @return void
 */
function bmpa_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
}

add_action( 'after_setup_theme', 'bmpa_theme_setup' );
