<?php

declare(strict_types=1);

function nice_hair_register_block_category(array $categories): array
{
    array_unshift($categories, [
        'slug'  => 'nice-hair',
        'title' => __('Nice Hair', 'nice-hair'),
    ]);

    return $categories;
}
add_filter('block_categories_all', 'nice_hair_register_block_category');

function nice_hair_register_acf_blocks(): void
{
    if (! function_exists('acf_register_block_type')) {
        return;
    }

    acf_register_block_type([
        'name'            => 'nh-faq',
        'title'           => __('FAQ Section', 'nice-hair'),
        'description'     => __('Accordion FAQ section with two-column grid layout.', 'nice-hair'),
        'category'        => 'nice-hair',
        'icon'            => 'editor-help',
        'keywords'        => ['faq', 'questions', 'accordion'],
        'render_template' => 'template-parts/blocks/faq/faq.php',
        'mode'            => 'auto',
        'supports'        => [
            'align'  => false,
            'anchor' => true,
            'jsx'    => false,
        ],
    ]);
}
add_action('acf/init', 'nice_hair_register_acf_blocks');
