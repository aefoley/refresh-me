<?php

/**
   * Enqueue scripts and styles
**/
add_action( 'wp_enqueue_scripts', 'bs4aef_enqueue_styles' );
function bs4aef_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'parent-style' ), 
        wp_get_theme()->get('1.0.0') 
    );

    wp_enqueue_style('ProximaN', 'https://use.typekit.net/zbj4hjv.css');


}









?>