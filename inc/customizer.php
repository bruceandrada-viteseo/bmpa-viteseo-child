<?php
/**
 * Customizer settings.
 *
 * @package Bmpa_Viteseo_Child
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register customizer settings and controls.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 * @return void
 */
function bmpa_customize_register( $wp_customize ) {

	// Theme options section.
	$wp_customize->add_section(
		'bmpa_theme_options',
		[
			'title'    => __( 'Theme Options', 'bmpa-viteseo-child' ),
			'priority' => 30,
		]
	);

	/**
	 * HERO OPTIONS
	 */

	// Primary color (background)
	$wp_customize->add_setting(
		'primary_color',
		[
			'default'           => '#ff0000',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'refresh',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'primary_color',
			[
				'label'   => __( 'Hero Background Color', 'bmpa-viteseo-child' ),
				'section' => 'bmpa_theme_options',
			]
		)
	);

	// Hero text
	$wp_customize->add_setting(
		'hero_text',
		[
			'default'           => 'Welcome to my site',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		]
	);

	$wp_customize->add_control(
		'hero_text',
		[
			'label'   => __( 'Hero Text', 'bmpa-viteseo-child' ),
			'section' => 'bmpa_theme_options',
			'type'    => 'text',
		]
	);

	// Hero text color ✅ (FIXED PLACEMENT)
	$wp_customize->add_setting(
		'hero_text_color',
		[
			'default'           => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'hero_text_color',
        [
            'label'    => __( 'Hero Text Color', 'bmpa-viteseo-child' ),
            'section'  => 'bmpa_theme_options',
            'priority' => 25,
        ]
    )
);

	// Hero toggle
	$wp_customize->add_setting(
		'show_hero',
		[
			'default'           => true,
			'sanitize_callback' => 'wp_validate_boolean',
		]
	);

	$wp_customize->add_control(
		'show_hero',
		[
			'label'   => __( 'Show Hero Section', 'bmpa-viteseo-child' ),
			'section' => 'bmpa_theme_options',
			'type'    => 'checkbox',
		]
	);

	/**
	 * FOOTER OPTIONS
	 */

	// Footer background color
	$wp_customize->add_setting(
		'footer_bg_color',
		[
			'default'           => '#000000',
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_bg_color',
			[
				'label'   => __( 'Footer Background Color', 'bmpa-viteseo-child' ),
				'section' => 'bmpa_theme_options',
			]
		)
	);

	// Footer text
	$wp_customize->add_setting(
		'footer_text',
		[
			'default'           => 'Default Footer Text',
			'sanitize_callback' => 'sanitize_text_field',
		]
	);

	$wp_customize->add_control(
		'footer_text',
		[
			'label'   => __( 'Footer Text', 'bmpa-viteseo-child' ),
			'section' => 'bmpa_theme_options',
			'type'    => 'text',
		]
	);

	// Footer toggle
	$wp_customize->add_setting(
		'show_footer',
		[
			'default'           => true,
			'sanitize_callback' => 'wp_validate_boolean',
		]
	);

	$wp_customize->add_control(
		'show_footer',
		[
			'label'   => __( 'Show Footer', 'bmpa-viteseo-child' ),
			'section' => 'bmpa_theme_options',
			'type'    => 'checkbox',
		]
	);
}

add_action( 'customize_register', 'bmpa_customize_register' );
