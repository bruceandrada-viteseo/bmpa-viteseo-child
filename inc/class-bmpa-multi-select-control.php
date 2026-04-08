<?php
/**
 * Custom_Multi_Select_Control.
 *
 * @package Bmpa_Viteseo_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register customizer settings and controls.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */
function bmpa_extra_customizer( $wp_customize ) {

	/**
	 * Custom Multi Select Control
	 */
	class BMPA_Multi_Select_Control extends WP_Customize_Control {
		/**
		 * Control type.
		 *
		 * @var string
		 */

		public $type = 'multi-select';

		/**
		 * Render the control content.
		 *
		 * @return void
		 */
		public function render_content() {
			if ( empty( $this->choices ) ) {
				return;
			}
			?>
			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<select multiple="multiple" style="height:100px;">
					<?php foreach ( $this->choices as $value => $label ) : ?>
						<option value="<?php echo esc_attr( $value ); ?>">
							<?php echo esc_html( $label ); ?>
						</option>
					<?php endforeach; ?>
				</select>
			</label>
			<?php
		}
	}

	/**
	 * MULTI SELECT
	 */
	$wp_customize->add_setting(
		'project_types',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new BMPA_Multi_Select_Control(
			$wp_customize,
			'project_types',
			array(
				'label'   => 'Select Project Types',
				'section' => 'bmpa_theme_options',
				'choices' => array(
					'type1' => 'Type 1',
					'type2' => 'Type 2',
					'type3' => 'Type 3',
				),
			)
		)
	);

	/**
	 * PROJECTS PER PAGE (FIXED)
	 */
	$wp_customize->add_setting(
		'projects_per_page',
		array(
			'default'           => 6,
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'projects_per_page',
		array(
			'label'   => 'Projects Per Page',
			'section' => 'bmpa_theme_options',
			'type'    => 'number',
		)
	);

	$wp_customize->add_setting(
		'projects_per_page',
		array(
			'default'           => 6,
			'sanitize_callback' => 'absint',
		)
	);
}

add_action( 'customize_register', 'bmpa_extra_customizer' );