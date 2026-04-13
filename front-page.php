<?php
/**
 * Front Page Template
 *
 * @package BMPA_ViteSEO_Child
 */

get_header();
?>

<main>
	<?php if ( get_theme_mod( 'show_hero', true ) ) : ?>
		<?php get_template_part( 'parts/hero' ); ?>
	<?php endif; ?>

	<!-- PAGE CONTENT -->
	<div class="content">
		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>

<section class="projects">

	<div class="container">

		<h2 class="section-title">Projects</h2>

	<div class="project-grid">

		<?php
		$args = array(
			'post_type'      => 'project',
			'posts_per_page' => 6,
		);

		$projects = new WP_Query( $args );

		if ( $projects->have_posts() ) :
			while ( $projects->have_posts() ) :
				$projects->the_post();

				get_template_part( 'parts/card' );

			endwhile;
			wp_reset_postdata();
		else :
			echo '<p>No projects found.</p>';
		endif;
		?>

	</div>
	</div>

</section>

</main>

<?php
get_footer();