<?php
/*
Template Name: Landing Page
*/

get_header();

?>

<main>

    <?php get_template_part('parts/hero'); ?>

    <div class="content">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>