<?php
if (!defined('ABSPATH')) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>



<div class="site-wrapper">

<header class="site-header">
    <div class="header-container">

        <h2 class="site-title">
            <a href="<?php echo esc_url( home_url('/') ); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </h2>

        <nav class="main-nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class'     => 'nav-menu',
                'container'      => false,
            ]);
            ?>
        </nav>

    </div>
</header>