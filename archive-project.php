<?php get_header(); ?>

<main>
    <h1>Projects</h1>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No projects found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>