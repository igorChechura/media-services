<?php
function main_scripts() {
	// style.css
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/styles/main.min.css', array(), filemtime( get_stylesheet_directory() . '/assets/styles/main.min.css' ) );
}
add_action( 'wp_enqueue_scripts', 'main_scripts' );