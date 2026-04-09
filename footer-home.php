<?php
declare(strict_types=1);

$logo_url = get_template_directory_uri() . '/assets/images/logo.svg';
?>
<footer class="nh-site-footer nh-site-footer--home">
    <div class="nh-site-footer__inner">
        <div class="nh-site-footer__main">

            <div class="nh-site-footer__brand">
                <img class="nh-site-footer__logo" src="<?php echo esc_url($logo_url); ?>" alt="Nice Hair" width="210" height="50">
                <p class="nh-site-footer__desc">2026 / Premium Hair Extensions in the Heart of Dubai</p>
            </div>

            <nav class="nh-site-footer__nav" aria-label="Footer navigation 1">
                <ul class="nh-site-footer__nav-list">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Salon</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
            </nav>

            <nav class="nh-site-footer__nav" aria-label="Footer navigation 2">
                <ul class="nh-site-footer__nav-list">
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>

            <div class="nh-site-footer__info">
                <p class="nh-site-footer__address">[Al Noor st, Al Sufouh,  Al Sufouh 1, Dubai]</p>
                <p class="nh-site-footer__hours">We're open daily: 10 AM – 10 PM</p>
                <div class="nh-site-footer__socials">
                    <a href="#" class="nh-site-footer__social">Telegram</a>
                    <a href="#" class="nh-site-footer__social">Instagram</a>
                    <a href="#" class="nh-site-footer__social">WhatsApp</a>
                </div>
            </div>

            <div class="nh-site-footer__cta">
                <a href="tel:+971585988409" class="nh-site-footer__phone">+971 58 598 8409</a>
                <a href="#" class="nh-site-footer__btn">
                    <span>VISIT SALON</span>
                    <span class="nh-site-footer__btn-icon" aria-hidden="true"></span>
                </a>
                <a href="#" class="nh-site-footer__btn">
                    <span>VISIT SHOP</span>
                    <span class="nh-site-footer__btn-icon" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        <div class="nh-site-footer__bottom">
            <div class="nh-site-footer__bottom-divider"></div>
            <div class="nh-site-footer__bottom-inner">
                <a href="#" class="nh-site-footer__privacy">Privacy Policy</a>
                <div class="nh-site-footer__credits">
                    <p>design: <a href="#">umapalata.space</a></p>
                    <p>development: <a href="#">username</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
