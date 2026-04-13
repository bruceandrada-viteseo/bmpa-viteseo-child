<?php
/**
 * Single Project Template
 *
 * @package BMPA_ViteSEO_Child
 */

get_header(); ?>

<main>

	<div class="main-layout">

		<!-- LEFT CONTENT -->
		<div class="main-content">

			<div class="back-link">
				<a href="<?php echo esc_url( get_post_type_archive_link( 'project' ) ); ?>">
					← Back to Projects
				</a>
			</div>

			<?php if ( have_posts() ) : ?>
				<?php
				while ( have_posts() ) :
					the_post();
					?>

					<article class="single-project">

						<h1><?php the_title(); ?></h1>

						<?php if ( has_post_thumbnail() ) : ?>
							<div class="project-image">
								<?php the_post_thumbnail( 'large' ); ?>
							</div>
						<?php endif; ?>

						<div class="project-content">
							<?php the_content(); ?>
						</div>

					</article>

				<?php endwhile; ?>
			<?php endif; ?>

		</div>

		<!-- RIGHT SIDEBAR -->
		<aside class="bmpa-sidebar">
			<?php dynamic_sidebar( 'bmpa-custom-sidebar' ); ?>
		</aside>

	</div>

</main>

<?php get_footer(); ?>