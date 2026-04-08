<?php
declare(strict_types=1);

get_header();
?>
<main class="nh-main nh-main--blog-index">
    <div class="nh-dev-fallback">
        <h1><?php esc_html_e('Blog', 'nice-hair'); ?></h1>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('nh-post-card'); ?>>
                    <h2 class="nh-post-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e('No posts found.', 'nice-hair'); ?></p>
        <?php endif; ?>
    </div>
</main>
<?php
get_footer();
