<?php
/**
 * Main functions file.
 *
 * @package Bmpa_Viteseo_Child
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$child_theme_dir = get_stylesheet_directory();

require $child_theme_dir . '/inc/enqueue.php';
require $child_theme_dir . '/inc/menu.php';
require $child_theme_dir . '/inc/customizer.php';
require $child_theme_dir . '/inc/helpers.php';
require $child_theme_dir . '/inc/post-types.php';
