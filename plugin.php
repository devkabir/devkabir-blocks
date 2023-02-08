<?php
/*
Plugin Name: Posts List Block
Description: A Gutenberg block that fetches posts from the WordPress REST API and displays them on the frontend
Version: 1.0
Author: Dev Kabir
*/

function my_gutenberg_block_scripts() {
	wp_enqueue_script(
		'my-gutenberg-block',
		plugins_url( 'block.js', __FILE__ ),
		array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-components', 'wp-api-fetch' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'block.js' )
	);
}
add_action( 'enqueue_block_editor_assets', 'my_gutenberg_block_scripts' );

add_action( 'wp_enqueue_scripts', function () {
	add_action( 'enqueue_block_assets', 'my_gutenberg_block_frontend_scripts' );
} );
function my_gutenberg_block_frontend_scripts() {
	wp_enqueue_script(
		'my-gutenberg-block-frontend',
		plugins_url( 'block-frontend.js', __FILE__ ),
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'block-frontend.js' )
	);
}