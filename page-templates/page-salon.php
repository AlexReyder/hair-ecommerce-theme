<?php
/**
 * Template Name: Salon Page
 */
declare(strict_types=1);

get_header();
?>
<main class="nh-main nh-main--salon-page">
    <div class="nh-dev-fallback">
        <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</main>
<?php
get_footer();
