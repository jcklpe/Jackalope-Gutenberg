<?php
defined('ABSPATH') || exit;

// add action enqueue block editor assets
add_action('enqueue_block_editor_assets', 'block02editor_scripts');

// enqueue the scripts for the block
function block02editor_scripts() {
    wp_enqueue_script (
        //name of script
        'block02editor',
        // full URL of script
        plugins_url('block.build.js', __FILE__),
        // dependencies this script needs
        array( 'wp-blocks', 'wp-i18n', 'wp-element'),
        // script version number
        filemtime(plugin_dir_path(__FILE__) . 'block.build.js')
    );
    wp_enqueue_style (
        'block02editorstyles',
        // full URL of script
        plugins_url('editor.css', __FILE__),
        // dependencies this script needs
        array( 'wp-edit-blocks'),
        // script version number
        filemtime(plugin_dir_path(__FILE__) . 'editor.css')
    );
}

add_action('enqueue_block_assets', 'block02frontend_styles');

// enqueu assets for frontend styles
function block02frontend_styles() {
    wp_enqueue_style (
        //name of styles
        'block02frontend_styles',
        // full URL of script
        plugins_url('style.css', __FILE__),
        // dependencies this script needs
        array( 'wp-blocks'),
        // script version number
        filemtime(plugin_dir_path(__FILE__) . 'style.css')
    );
}
