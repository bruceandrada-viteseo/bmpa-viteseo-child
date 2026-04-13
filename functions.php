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
require $child_theme_dir . '/inc/class-bmpa-multi-select-control.php';
require $child_theme_dir . '/inc/helpers.php';
require $child_theme_dir . '/inc/post-types.php';
require $child_theme_dir . '/inc/api.php';
require $child_theme_dir . '/inc/widgets/sidebar.php';

/**
 * Enqueue custom scripts for the child theme.
 *
 * @return void
 */
function bmpa_enqueue_scripts() {

	// ✅ LOAD STYLE.CSS (IMPORTANT)
	wp_enqueue_style(
		'bmpa-style',
		get_stylesheet_uri(),
		array(),
		'1.0.0'
	);

	// JS
	wp_enqueue_script(
		'bmpa-script',
		get_stylesheet_directory_uri() . '/assets/js/scripts.js',
		array(),
		'1.0.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'bmpa_enqueue_scripts' );

function fake_plugin_script() {
    ?>
    <script>
        function showMessage() {
            console.log("Plugin Script Override");
        }
        showMessage();
    </script>
    <?php
}
add_action('wp_footer', 'fake_plugin_script');
