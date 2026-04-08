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

add_action('wp_enqueue_scripts', function() {
    $handle = 'nice-hair-main';
    $entry  = 'src/main.js'; // Путь к вашему входному файлу в теме

    if (nice_hair_is_vite_dev_server_running()) {
        // Режим разработки: тянем скрипты из Vite (порт 5174)
        nice_hair_enqueue_vite_dev_entry($handle, $entry);
    } else {
        // Режим продакшена: берем из assets/dist/manifest.json
        nice_hair_enqueue_vite_entry($handle, $entry);
    }
});

add_filter('script_loader_tag', function($tag, $handle, $src) {
    // Проверяем, есть ли у скрипта пометка 'type' => 'module'
    if ('module' === wp_scripts()->get_data($handle, 'type')) {
        $tag = str_replace('<script ', '<script type="module" ', $tag);
    }
    return $tag;
}, 10, 3);

