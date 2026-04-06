<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function bmpa_register_projects() {

    register_post_type('project', [
        'label' => 'Projects',
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'projects'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
    ]);

}

add_action('init', 'bmpa_register_projects');