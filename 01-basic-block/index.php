<?php
defined('ABSPATH') || exit;

// add action enqueue block assets

add_action('enqueue_block_editor_assets', '');

// plugin-name_block-name_function-name
function enqueue_block_scripts {
    wp_enqueue_script (
        //name of script
        'block-examples-01-basic-block',
        // full URL of script
        plugins_url('block.build.js', __FILE__),
        // dependencies this script needs
        array( 'wp-blocks', 'wp-i18n', 'wp-element'),
        // script version number
        filemtime(plugin_dir_path(__FILE__) . 'block.build.js');
    )
}
