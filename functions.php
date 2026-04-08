<?php
declare(strict_types=1);

$nice_hair_files = [
    '/inc/core/setup.php',
    '/inc/core/vite.php',
    '/inc/core/enqueue.php',
    '/inc/editor/pattern-categories.php',
    '/inc/editor/pattern-registration.php',
    '/inc/editor/editor-assets.php',
    '/inc/editor/allowed-blocks.php',
    '/inc/theme/template-functions.php',
];

foreach ($nice_hair_files as $nice_hair_file) {
    $nice_hair_path = get_theme_file_path($nice_hair_file);

    if (file_exists($nice_hair_path)) {
        require_once $nice_hair_path;
    }
}
