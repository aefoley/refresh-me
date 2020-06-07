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

// /**
//  * Register custom post types
//  *
//  */

add_action( 'init', 'register_work_posttype' );

    function register_work_posttype () {

        $work_labels = array(
        'name' => 'Work',
        'singular_name' => 'Work',
        'all_items' => 'All Work Posts',
        'add_new' => 'Add new Work Post',
        'add_new_item' => 'Add New Work Post',
        'edit_item' => 'Edit Work Post',
        'new_item' => 'New Work Post',
        'view_item' => 'View Work Post',
        'search_items' => 'Search in Work Posts',
        'not_found' =>  'No Work Post found',
        'not_found_in_trash' => 'No Work Posts found in trash',
        'parent_item_colon' => '',
        'menu _name' => 'Work Post'
    );

        $args = array(
        'labels' => $work_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'taxonomies' => array('category'),
        'menu_icon' => 'dashicons-art',
        'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
        'has_archive' => false

            );
        register_post_type( 'work', $args );

}



?>