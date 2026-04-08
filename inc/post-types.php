<?php
/**
 * Custom Post Types
 *
 * @package BMPA_ViteSEO_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register the "Projects" custom post type.
 */
function bmpa_register_projects() {

	register_post_type(
		'project',
		array(
			'label'        => 'Projects',
			'public'       => true,
			'has_archive'  => true,
			'rewrite'      => array( 'slug' => 'projects' ),
			'supports'     => array( 'title', 'editor', 'thumbnail' ),
			'show_in_rest' => true,
		)
	);
}

add_action( 'init', 'bmpa_register_projects' );
