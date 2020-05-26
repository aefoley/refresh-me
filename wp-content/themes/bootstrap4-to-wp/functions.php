<?php

/**
   * Custom navwalker
**/
require_once('includes/wp_bootstrap_navwalker.php');


/**
   * Enqueue scripts and styles
**/
function add_theme_scripts() {
  
  //wp_enqueue_style( 'parent-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
 
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');

  wp_enqueue_script( 'main-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 4.4, true);

  wp_enqueue_script( 'custom-theme', get_template_directory_uri() . '/assets/js/bs4-custom.js', array ( 'jquery', 'main-bootstrap' ), 1, true);
 
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


/**
   * Define theme's widget areas.
**/
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

/**
   * Theme menus
**/

function register_aef_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'utility-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_aef_menus' );

/**
   * Post thumbnails
**/

add_theme_support('post-thumbnails');

/**
   * There's an error without this, so in it goes.
**/

function twentyfifteen_comment_nav() { 
    // Are there comments to navigate through? 
    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : 
    ?> 
    <nav class="navigation comment-navigation" role="navigation"> 
        <h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfifteen' ); ?></h2> 
        <div class="nav-links"> 
            <?php 
                if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'twentyfifteen' ) ) ) : 
                    printf( '<div class="nav-previous">%s</div>', $prev_link ); 
                endif; 
 
                if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'twentyfifteen' ) ) ) : 
                    printf( '<div class="nav-next">%s</div>', $next_link ); 
                endif; 
            ?> 
        </div><!-- .nav-links --> 
    </nav><!-- .comment-navigation --> 
    <?php 
    endif; 
} 




?>