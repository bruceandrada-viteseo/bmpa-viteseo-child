<?php
if ( ! defined('ABSPATH') ) exit;
?>

<section class="hero-wrapper" style="background-color: <?php echo esc_attr( get_theme_mod('primary_color', '#ff0000') ); ?>">
     <h1 style="color: <?php echo esc_attr( get_theme_mod('hero_text_color') ); ?>">
                <?php echo esc_html( get_theme_mod('hero_text') ); ?>
            </h1>
</section>