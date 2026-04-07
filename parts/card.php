<?php
/**
 * Template part for displaying project cards.
 *
 * @package BMPA_ViteSEO_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<article class="card">

	<a href="<?php echo esc_url( get_permalink() ); ?>">

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="card-image">
				<?php the_post_thumbnail( 'medium' ); ?>
			</div>
		<?php endif; ?>

		<h2><?php echo esc_html( get_the_title() ); ?></h2>

	</a>

</article>