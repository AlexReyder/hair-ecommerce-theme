<?php
declare(strict_types=1);
?>
<footer class="nh-site-footer nh-site-footer--home">
    <div class="nh-site-footer__inner">
        <p class="nh-site-footer__copy">&copy; <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
