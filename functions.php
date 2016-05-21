<?php

function demo_theme_name_scripts() {
    wp_enqueue_style( 'demo-style', get_stylesheet_uri() );
    // no JS at this point
    //wp_enqueue_script( 'demo-script', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'demo_theme_name_scripts' );
