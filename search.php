<?php
/**
 * Search Template
 *
 * @package Bmpa_Viteseo_Child
 */

get_header();
?>

<main class="content">

	<h1>Search results for: "<?php echo get_search_query(); ?>"</h1>

	<?php if ( is_active_sidebar( 'bmpa-custom-sidebar' ) ) : ?>
		<aside class="bmpa-sidebar-search">
			<?php dynamic_sidebar( 'bmpa-custom-sidebar' ); ?>
		</aside>
	<?php endif; ?>

	<?php if ( have_posts() ) : ?>

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<article class="search-item">

				<h2>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>

				<?php if ( has_post_thumbnail() ) : ?>
					<div class="project-image">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'medium' ); ?>
						</a>
					</div>
				<?php endif; ?>

				<p><?php the_excerpt(); ?></p>

			</article>

		<?php endwhile; ?>

	<?php else : ?>

		<p>No results found.</p>

	<?php endif; ?>

</main>

<?php get_footer(); ?>