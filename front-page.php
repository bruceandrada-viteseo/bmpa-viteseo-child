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

	<div class="container main-layout">

	<!-- LEFT SIDE -->
	<div class="main-content">

		<!-- CONTENT -->
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

		<!-- PROJECTS -->
		<section class="projects">

			<h2 class="section-title">Projects</h2>

			<div class="project-grid">
				<?php
				$bmpa_args = array(
					'post_type'      => 'project',
					'posts_per_page' => 6,
				);

				$bmpa_projects = new WP_Query( $bmpa_args );

				if ( $bmpa_projects->have_posts() ) :
					while ( $bmpa_projects->have_posts() ) :
						$bmpa_projects->the_post();
						get_template_part( 'parts/card' );
					endwhile;
					wp_reset_postdata();
				else :
					echo '<p>No projects found.</p>';
				endif;
				?>
			</div>

		</section>

	</div>

	<!-- RIGHT SIDE -->
	<?php if ( is_active_sidebar( 'bmpa-custom-sidebar' ) ) : ?>
		<aside class="bmpa-sidebar">
			<?php dynamic_sidebar( 'bmpa-custom-sidebar' ); ?>
		</aside>
	<?php endif; ?>

</div>

</main>

<?php
get_footer();