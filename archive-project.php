<?php
/**
 * Projects Archive Template
 *
 * @package BMPA_ViteSEO_Child
 */

get_header(); ?>

<main>

	<section class="projects">
		<div class="container">

			<h1 class="section-title">Projects</h1>

			<div class="project-grid">

				<?php if ( have_posts() ) : ?>
					<?php
					while ( have_posts() ) :
						the_post();
						?>

						<?php get_template_part( 'parts/card' ); ?>

					<?php endwhile; ?>
				<?php else : ?>
					<p>No projects found.</p>
				<?php endif; ?>

			</div>

		</div>
	</section>

</main>

<?php get_footer(); ?>