<?php
/**
 * Template part for displaying the hero section on the front page.
 *
 * @package BMPA_ViteSEO_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="hero-wrapper" style="background-color: <?php echo esc_attr( get_theme_mod( 'primary_color', '#ff0000' ) ); ?>">
	<h1 style="color: <?php echo esc_attr( get_theme_mod( 'hero_text_color', '#ffffff' ) ); ?>">
				<?php echo esc_html( get_theme_mod( 'hero_text', 'Default Hero Text' ) ); ?>
			</h1>
</section>