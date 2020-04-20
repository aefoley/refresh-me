<?php


// Register Custom Navigation Walker
require_once('includes/wp_bootstrap_navwalker.php');

function add_theme_scripts() {
  
  // wp_enqueue_style( 'parent-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
 
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');

  wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap', array('parent-bootstrap'));
 
  wp_enqueue_script( 'main-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 4.4, true);

  wp_enqueue_script( 'custom-theme', get_template_directory_uri() . '/assets/js/bs4-custom.js', array ( 'jquery', 'main-bootstrap' ), 1, true);
 
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

/**
 * Define theme's widget areas.
 *
 */
function bootstrapwp_widgets_init() {

    register_sidebar(
        array(
            'name'          => __('Page Sidebar', 'bootstrapwp'),
            'id'            => 'sidebar-page',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => "</div>",
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('Posts Sidebar', 'bootstrapwp'),
            'id'            => 'sidebar-posts',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => "</div>",
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('Home Left', 'bootstrapwp'),
            'id'            => 'home-left',
            'description'   => __('Left textbox on homepage', 'bootstrapwp'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name'          => __('Home Middle', 'bootstrapwp'),
            'id'            => 'home-middle',
            'description'   => __('Middle textbox on homepage', 'bootstrapwp'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name'          => __('Home Right', 'bootstrapwp'),
            'id'            => 'home-right',
            'description'   => __('Right textbox on homepage', 'bootstrapwp'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name'          => __('Footer Content', 'bootstrapwp'),
            'id'            => 'footer-content',
            'description'   => __('Footer text or acknowledgements', 'bootstrapwp'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        )
    );

}
add_action('init', 'bootstrapwp_widgets_init');


function register_aef_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'utility-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_aef_menus' );





add_theme_support('post-thumbnails');




?>