<?php
/**
 * Page Template
 *
 * @package BMPA_ViteSEO_Child
 */

get_header();
?>

<main>

<?php if ( is_page( 'landing-test' ) ) : ?>
	<?php get_template_part( 'parts/hero' ); ?>
<?php endif; ?>

<div class="content">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<?php the_content(); ?>
	<?php endwhile; ?>
</div>

</main>

<?php get_footer(); ?>