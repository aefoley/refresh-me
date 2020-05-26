<?php



/**
 * Load JavaScript and jQuery files for theme.
 *
 */
function bootstrapwp_scripts_loader2() {

   
    wp_enqueue_script('mousewheel','https://annfoley.com/wp-content/themes/aefBootstrap-child/assets/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js', array('jquery'),'1.0',true);
    wp_enqueue_script('fancybox','https://annfoley.com/wp-content/themes/aefBootstrap-child/assets/js/fancybox/source/jquery.fancybox.js', array('jquery'),'1.0',true);


}
add_action('wp_enqueue_scripts', 'bootstrapwp_scripts_loader2');


