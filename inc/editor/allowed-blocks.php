<?php
declare(strict_types=1);

function nice_hair_allowed_blocks(array|bool $allowed_block_types, WP_Block_Editor_Context $editor_context): array|bool
{
    $post = $editor_context->post ?? null;

    if (! $post instanceof WP_Post) {
        return $allowed_block_types;
    }

    $is_front_page = (int) get_option('page_on_front') === (int) $post->ID;
    $is_home_slug  = $post->post_type === 'page' && $post->post_name === 'home';

    if (! $is_front_page && ! $is_home_slug) {
        return $allowed_block_types;
    }

    return [
        'core/group',
        'core/columns',
        'core/column',
        'core/heading',
        'core/paragraph',
        'core/image',
        'core/gallery',
        'core/buttons',
        'core/button',
        'core/list',
        'core/list-item',
        'core/spacer',
        'core/separator',
        'core/details',
        'core/quote',
        'core/cover',
        'core/media-text',
    ];
}
add_filter('allowed_block_types_all', 'nice_hair_allowed_blocks', 10, 2);
