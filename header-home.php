<?php
declare(strict_types=1);
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('nh-body nh-body--home'); ?>>
<?php wp_body_open(); ?>
<header class="nh-site-header nh-site-header--home">
    <div class="nh-site-header__inner">
        <a class="nh-site-header__brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        <nav class="nh-site-header__nav" aria-label="<?php esc_attr_e('Primary navigation', 'nice-hair'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'home_primary',
                'container'      => false,
                'fallback_cb'    => 'nice_hair_home_menu_fallback',
                'menu_class'     => 'nh-site-header__menu',
            ]);
            ?>
        </nav>
    </div>
</header>
