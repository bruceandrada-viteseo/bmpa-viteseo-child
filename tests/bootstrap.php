<?php

if ( ! class_exists( 'WP_UnitTestCase' ) ) {
    return;
}

/**
 * PHPUnit bootstrap file.
 *
 * @package Bmpa_Viteseo_Child
 */

$_tests_dir = getenv( 'WP_TESTS_DIR' );

if ( ! $_tests_dir ) {
	$_tests_dir = rtrim( sys_get_temp_dir(), '/\\' ) . '/wordpress-tests-lib';
}

// If WordPress test library is missing, skip WP bootstrap.
if ( ! file_exists( $_tests_dir . '/includes/functions.php' ) ) {
	echo "⚠️ WordPress test environment not found. Running standalone PHPUnit tests only." . PHP_EOL;
	return;
}

// Give access to tests_add_filter() function.
require_once "{$_tests_dir}/includes/functions.php";

/**
 * Registers theme.
 */
function _register_theme() {

	$theme_dir     = dirname( __DIR__ );
	$current_theme = basename( $theme_dir );
	$theme_root    = dirname( $theme_dir );

	add_filter(
		'theme_root',
		function () use ( $theme_root ) {
			return $theme_root;
		}
	);

	register_theme_directory( $theme_root );

	add_filter(
		'pre_option_template',
		function () use ( $current_theme ) {
			return $current_theme;
		}
	);

	add_filter(
		'pre_option_stylesheet',
		function () use ( $current_theme ) {
			return $current_theme;
		}
	);
}

tests_add_filter( 'muplugins_loaded', '_register_theme' );

// Start up the WP testing environment.
require "{$_tests_dir}/includes/bootstrap.php";