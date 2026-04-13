<?php
/**
 * Search Template
 *
 * @package Bmpa_Viteseo_Child
 */

get_header();
?>

<div class="main-layout">

	<!-- LEFT -->
	<div class="main-content">

		<h1>Search results for: "<?php echo get_search_query(); ?>"</h1>

		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article class="search-item">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>

	</div>

	<!-- RIGHT -->
	<aside class="bmpa-sidebar-search">
		<?php dynamic_sidebar( 'bmpa-custom-sidebar' ); ?>
	</aside>

</div>

<?php get_footer(); ?>