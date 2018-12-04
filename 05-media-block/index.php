<?php

defined( 'ABSPATH' ) || exit;

//- ADD BLOCK EDITOR ASSETS
add_action( 'enqueue_block_editor_assets', 'block05editor_scripts' );

function block05editor_scripts() {
	wp_enqueue_script(
		'block05editor_scripts',
		plugins_url( 'block.build.js', __FILE__ ),
		array( 'wp-blocks', 'wp-i18n', 'wp-editor', 'wp-components' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'block.build.js' )
	);

	wp_enqueue_style(
		'block05editor_styles',
		plugins_url( 'editor.css', __FILE__ ),
		array(),
		filemtime( plugin_dir_path( __FILE__ ) . 'editor.css' )
	);
}

//- ADD BLOCK ASSETS FOR FRONTEND
add_action( 'enqueue_block_assets', 'block05frontend_styles' );

function block05frontend_styles() {
	wp_enqueue_style(
		'block05frontend_styles',
		plugins_url( 'style.css', __FILE__ ),
		array(),
		filemtime( plugin_dir_path( __FILE__ ) . 'style.css' )
	);
}
