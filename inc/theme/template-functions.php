<?php
declare(strict_types=1);

function nice_hair_home_menu_fallback(): void
{
    echo '<ul class="nh-site-header__menu">';
    echo '<li class="nh-site-header__menu-item"><a href="#home-hero">' . esc_html__('Home', 'nice-hair') . '</a></li>';
    echo '<li class="nh-site-header__menu-item"><a href="#home-faq">' . esc_html__('FAQ', 'nice-hair') . '</a></li>';
    echo '<li class="nh-site-header__menu-item"><a href="#home-cta">' . esc_html__('Contact', 'nice-hair') . '</a></li>';
    echo '</ul>';
}
