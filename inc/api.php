<?php
/**
 * API Endpoints
 *
 * @package BMPA_ViteSEO_Child
 */

add_action(
	'rest_api_init',
	function () {
		register_rest_route(
			'bmpa/v1',
			'/projects',
			array(
				'methods'  => 'GET',
				'callback' => 'bmpa_get_projects',
			)
		);
	}
);

/**
 * Get a list of projects for the API endpoint.
 *
 * @return array List of projects with title and link.
 */
function bmpa_get_projects() {
	$projects = get_posts(
		array(
			'post_type'   => 'project',
			'numberposts' => 5,
		)
	);

	$data = array();

	foreach ( $projects as $project ) {
		$data[] = array(
			'title' => get_the_title( $project ),
			'link'  => get_permalink( $project ),
		);
	}

	return $data;
}
