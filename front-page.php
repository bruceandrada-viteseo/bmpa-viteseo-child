<?php 
get_header();
?>

<main>
    <?php if ( get_theme_mod('show_hero', true) ) : ?>
        <?php get_template_part('parts/hero'); ?>
    <?php endif; ?>

   <!-- PAGE CONTENT -->
    <div class="content">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>


</main>

<?php
get_footer();