<?php
declare(strict_types=1);

$logo        = get_field('nh_footer_logo', 'option') ?: get_template_directory_uri() . '/assets/images/logo.svg';
$tagline     = get_field('nh_footer_tagline', 'option');
$description = get_field('nh_footer_description', 'option') ?: date_i18n('Y') . ' / Premium Hair Extensions in the Heart of Dubai';
$address     = get_field('nh_footer_address', 'option') ?: '[Al Noor st, Al Sufouh,  Al Sufouh 1, Dubai]';
$phone       = get_field('nh_footer_phone', 'option') ?: '+971 58 598 8409';
$phone_link  = get_field('nh_footer_phone_link', 'option') ?: 'tel:+971585988409';
$hours       = get_field('nh_footer_hours', 'option') ?: "We're open daily: 10 AM – 10 PM";
$socials     = get_field('nh_footer_socials', 'option') ?: [];
$cta         = get_field('nh_footer_cta', 'option') ?: [];
$privacy_url = get_field('nh_footer_privacy_url', 'option');
$credits     = get_field('nh_footer_credits', 'option') ?: [];
?>
<footer class="nh-site-footer nh-site-footer--home">
    <div class="nh-site-footer__inner">
        <div class="nh-site-footer__main">

            <div class="nh-site-footer__brand">
                <img class="nh-site-footer__logo" src="<?php echo esc_url($logo); ?>" alt="<?php bloginfo('name'); ?>" width="210" height="50">
                <?php if ($tagline) : ?>
                    <p class="nh-site-footer__tagline"><?php echo esc_html($tagline); ?></p>
                <?php endif; ?>
                <p class="nh-site-footer__desc"><?php echo esc_html($description); ?></p>
            </div>

            <nav class="nh-site-footer__nav" aria-label="<?php esc_attr_e('Footer navigation 1', 'nice-hair'); ?>">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer_nav_1',
                    'container'      => false,
                    'menu_class'     => 'nh-site-footer__nav-list',
                    'depth'          => 1,
                    'fallback_cb'    => false,
                ]);
                ?>
            </nav>

            <nav class="nh-site-footer__nav" aria-label="<?php esc_attr_e('Footer navigation 2', 'nice-hair'); ?>">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer_nav_2',
                    'container'      => false,
                    'menu_class'     => 'nh-site-footer__nav-list',
                    'depth'          => 1,
                    'fallback_cb'    => false,
                ]);
                ?>
            </nav>

            <div class="nh-site-footer__info">
                <p class="nh-site-footer__address"><?php echo esc_html($address); ?></p>
                <p class="nh-site-footer__hours"><?php echo esc_html($hours); ?></p>

                <?php if (! empty($socials)) : ?>
                    <div class="nh-site-footer__socials">
                        <?php if (! empty($socials['telegram'])) : ?>
                            <a href="<?php echo esc_url($socials['telegram']); ?>" class="nh-site-footer__social" target="_blank" rel="noopener">Telegram</a>
                        <?php endif; ?>
                        <?php if (! empty($socials['instagram'])) : ?>
                            <a href="<?php echo esc_url($socials['instagram']); ?>" class="nh-site-footer__social" target="_blank" rel="noopener">Instagram</a>
                        <?php endif; ?>
                        <?php if (! empty($socials['whatsapp'])) : ?>
                            <a href="<?php echo esc_url($socials['whatsapp']); ?>" class="nh-site-footer__social" target="_blank" rel="noopener">WhatsApp</a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="nh-site-footer__cta">
                <a href="<?php echo esc_url($phone_link); ?>" class="nh-site-footer__phone"><?php echo esc_html($phone); ?></a>

                <?php if (! empty($cta['btn1_label']) && ! empty($cta['btn1_url'])) : ?>
                    <a href="<?php echo esc_url($cta['btn1_url']); ?>" class="nh-site-footer__btn">
                        <span><?php echo esc_html($cta['btn1_label']); ?></span>
                        <span class="nh-site-footer__btn-icon" aria-hidden="true"></span>
                    </a>
                <?php endif; ?>

                <?php if (! empty($cta['btn2_label']) && ! empty($cta['btn2_url'])) : ?>
                    <a href="<?php echo esc_url($cta['btn2_url']); ?>" class="nh-site-footer__btn">
                        <span><?php echo esc_html($cta['btn2_label']); ?></span>
                        <span class="nh-site-footer__btn-icon" aria-hidden="true"></span>
                    </a>
                <?php endif; ?>
            </div>

        </div>

        <div class="nh-site-footer__bottom">
            <div class="nh-site-footer__bottom-divider"></div>
            <div class="nh-site-footer__bottom-inner">
                <?php if ($privacy_url) : ?>
                    <a href="<?php echo esc_url($privacy_url); ?>" class="nh-site-footer__privacy">Privacy Policy</a>
                <?php endif; ?>

                <?php if (! empty($credits)) : ?>
                    <div class="nh-site-footer__credits">
                        <?php if (! empty($credits['designer_name'])) : ?>
                            <p>design: <?php if (! empty($credits['designer_url'])) : ?><a href="<?php echo esc_url($credits['designer_url']); ?>" target="_blank" rel="noopener"><?php echo esc_html($credits['designer_name']); ?></a><?php else : ?><?php echo esc_html($credits['designer_name']); ?><?php endif; ?></p>
                        <?php endif; ?>
                        <?php if (! empty($credits['developer_name'])) : ?>
                            <p>development: <?php if (! empty($credits['developer_url'])) : ?><a href="<?php echo esc_url($credits['developer_url']); ?>" target="_blank" rel="noopener"><?php echo esc_html($credits['developer_name']); ?></a><?php else : ?><?php echo esc_html($credits['developer_name']); ?><?php endif; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
