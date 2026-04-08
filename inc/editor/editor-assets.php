<?php
declare(strict_types=1);

function nice_hair_enqueue_editor_assets(): void
{
    if (nice_hair_is_vite_dev_server_running()) {
        nice_hair_enqueue_vite_dev_entry('nice-hair-editor', 'assets/js/editor.js');
        return;
    }

    if (file_exists(nice_hair_vite_manifest_path())) {
        nice_hair_enqueue_vite_entry('nice-hair-editor', 'assets/js/editor.js', ['wp-blocks', 'wp-edit-post', 'wp-element']);
    }
}
add_action('enqueue_block_editor_assets', 'nice_hair_enqueue_editor_assets');
