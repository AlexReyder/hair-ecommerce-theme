<?php
declare(strict_types=1);

get_header();
?>
<main class="nh-main nh-main--page">
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class('nh-page'); ?>>
            <div class="nh-dev-fallback">
                <header class="nh-page__header">
                    <h1 class="nh-page__title"><?php the_title(); ?></h1>
                </header>
                <div class="nh-page__content">
                    <?php the_content(); ?>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
</main>
<?php
get_footer();
