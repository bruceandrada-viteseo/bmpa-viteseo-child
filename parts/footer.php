<?php
/**
 * Footer template part.
 *
 * @package Bmpa_Viteseo_Child
 * @version 1.0.0
 */

$footer_color = get_theme_mod( 'footer_bg_color', '#000000' );
$footer_text  = get_theme_mod( 'footer_text', 'Default Text' );
$show_footer  = get_theme_mod( 'show_footer', true );

if ( $show_footer ) :
	?>

<footer style="background: <?php echo esc_attr( $footer_color ); ?>; padding: 20px; text-align: center;">
	<h1 style="color: <?php echo esc_attr( get_theme_mod( 'hero_text_color', '#ffffff' ) ); ?>">
	<?php echo esc_html( get_theme_mod( 'footer_text' ) ); ?>
</h1>
</footer>

<?php endif; ?>