<?php
/**
 * Header Template
 *
 * @package BMPA_ViteSEO_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php
	if ( is_singular() ) {
		$bmpa_desc = get_the_excerpt();
		if ( ! $bmpa_desc ) {
			$bmpa_desc = get_the_title();
		}
		$bmpa_meta_description = trim( wp_strip_all_tags( $bmpa_desc ) );
	} else {
		$bmpa_meta_description = get_bloginfo( 'description' );
	}
	?>

<meta name="description" content="<?php echo esc_attr( $bmpa_meta_description ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>



<div class="site-wrapper">

<header class="site-header">
	<div class="header-container">

		<h2 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a>
		</h2>

		<nav class="main-nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class'     => 'nav-menu',
					'container'      => false,
				)
			);
			?>
		</nav>

	</div>
</header>