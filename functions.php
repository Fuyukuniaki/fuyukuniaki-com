<?php
function fuyukuniaki_script() {
    wp_enqueue_script( 'GA4', '//www.googleoptimize.com/optimize.js?id=OPT-KC7CGN5', array() );
    wp_enqueue_script( 'fuyukuniaki-javascript', get_template_directory_uri() . '/js/script.js', array(), '1.0.0' );
	wp_enqueue_style( 'fuyukuniaki-reset', '//unpkg.com/modern-css-reset/dist/reset.min.css', array(), '4.5.0' );
	wp_enqueue_style( 'fuyukuniaki', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
	wp_enqueue_style( 'fuyukuniaki-style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'fuyukuniaki_script' );
