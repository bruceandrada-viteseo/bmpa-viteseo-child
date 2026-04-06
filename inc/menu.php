<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function bmpa_register_menus() {
    register_nav_menus([
        'primary' => __('Primary Menu', 'bmpa-viteseo-child'),
    ]);
}

add_action('after_setup_theme', 'bmpa_register_menus');