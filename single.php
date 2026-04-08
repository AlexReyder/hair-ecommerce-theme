<?php
declare(strict_types=1);

get_header();
?>
<main class="nh-main nh-main--single">
    <div class="nh-dev-fallback">
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class('nh-single'); ?>>
                <h1><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    </div>
</main>
<?php
get_footer();
