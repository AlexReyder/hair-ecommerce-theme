<?php
declare(strict_types=1);

$logo_url = get_template_directory_uri() . '/assets/images/logo.svg';
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

        <a class="nh-site-header__brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Nice Hair — Home">
            <img class="nh-site-header__logo" src="<?php echo esc_url($logo_url); ?>" alt="Nice Hair" width="210" height="50">
            <span class="nh-site-header__brand-accent" aria-hidden="true"></span>
        </a>

        <nav class="nh-site-header__nav" aria-label="Primary navigation">
            <ul class="nh-site-header__nav-list">
                <li><a href="#home-about">About</a></li>
                <li><a href="#home-salon">Salon</a></li>
                <li><a href="#home-shop">Shop</a></li>
                <li><a href="#home-contact">Contact</a></li>
            </ul>
        </nav>

        <div class="nh-site-header__actions">
            <div class="nh-site-header__cta-group" role="group" aria-label="Quick links">
                <a class="nh-site-header__cta" href="#home-salon">Salon</a>
                <a class="nh-site-header__cta" href="#home-shop">Shop</a>
            </div>

            <button type="button" class="nh-site-header__toggle"
                    aria-expanded="false"
                    aria-controls="nh-site-header-drawer"
                    aria-label="Open menu">
                <span class="nh-site-header__toggle-bar" aria-hidden="true"></span>
                <span class="nh-site-header__toggle-bar" aria-hidden="true"></span>
                <span class="nh-site-header__toggle-bar" aria-hidden="true"></span>
            </button>
        </div>
    </div>

    <div class="nh-site-header__drawer" id="nh-site-header-drawer" hidden>
        <div class="nh-site-header__drawer-backdrop" data-nh-drawer-close></div>
        <div class="nh-site-header__drawer-panel" role="dialog" aria-modal="true" aria-label="Site navigation">
            <button type="button" class="nh-site-header__drawer-close" aria-label="Close menu" data-nh-drawer-close>
                <span aria-hidden="true">&times;</span>
            </button>
            <nav class="nh-site-header__drawer-nav" aria-label="Mobile navigation">
                <ul class="nh-site-header__drawer-list">
                    <li><a href="#home-about">About</a></li>
                    <li><a href="#home-salon">Salon</a></li>
                    <li><a href="#home-shop">Shop</a></li>
                    <li><a href="#home-contact">Contact</a></li>
                </ul>
            </nav>
            <div class="nh-site-header__drawer-contact">
                <a class="nh-site-header__drawer-phone" href="tel:+971585988409">+971 58 598 8409</a>
                <p class="nh-site-header__drawer-address">Al Noor st, Al Sufouh,<br>Al Sufouh 1, Dubai</p>
            </div>
        </div>
    </div>
</header>
