<?php

defined( 'ABSPATH' ) || exit;

//- ADD BLOCK EDITOR ASSETS
add_action( 'enqueue_block_editor_assets', 'block04editor_scripts' );

function block04editor_scripts() {
	wp_enqueue_script(
		'block04editor_scripts',
		plugins_url( 'block.build.js', __FILE__ ),
		array( 'wp-blocks', 'wp-i18n', 'wp-editor' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'block.build.js' )
	);

	wp_enqueue_style(
		'block04editor_styles',
		plugins_url( 'editor.css', __FILE__ ),
		array(),
		filemtime( plugin_dir_path( __FILE__ ) . 'editor.css' )
	);
}

//- ADD BLOCK ASSETS FOR FRONTEND
add_action( 'enqueue_block_assets', 'block04frontend_styles' );

function block04frontend_styles() {
	wp_enqueue_style(
		'block04frontend_styles',
		plugins_url( 'style.css', __FILE__ ),
		array(),
		filemtime( plugin_dir_path( __FILE__ ) . 'style.css' )
	);
}
