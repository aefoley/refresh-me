<?php
/**
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage WP-Bootstrap
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-57-precomposed.png">

    <!-- fonts -->
    <link rel='stylesheet'
          href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic'  type='text/css'>
    <link rel='stylesheet'
          href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic'  type='text/css'>
    <link rel='stylesheet'
          href='https://annfoley.com/wp-content/themes/aefBootstrap-child/assets/js/fancybox/source/jquery.fancybox.css'>
    
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37140711-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());

      gtag('config', 'UA-37140711-2');
    </script>

    <?php wp_head(); ?>

   
</head>
<body <?php body_class(); ?>  data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">
    <div class="wrapper"> <!-- for Ryan Fait Sticky Footer -->

    <script>
     $(document).ready(function(){
        $(".menu-item").click(function(e) {
           e.stopPropagation(); // <--- here
        
        });
    });

     </script>
     <div class="container">
        <div class="row logorow">
            <div class="span4">
                <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url');?>/assets/img/AFD_smallorangelogogradient.png" class="brandlogo"/></a>

               <h2 style="margin-top:20px;"> <a class="brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"> <?php bloginfo('name'); ?></a></h2>
            </div>
            <div class="span8">
                    <div class="navbar  navbar-relative-top">
                        <div class="navbar-inner">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                                  
                                <?php wp_nav_menu(
                                        array(
                                            'menu' => 'main-menu',
                                            'container_class' => 'nav-collapse collapse',
                                            'menu_class' => 'nav',
                                            'fallback_cb' => '',
                                            'menu_id' => 'main-menu',
                                            'walker' => new Bootstrapwp_Walker_Nav_Menu()
                                        )
                                    ); ?>
                            </div><!-- end navbar inner -->
                    </div><!-- end navbar -->
            </div><!-- end span 8 -->
        </div><!-- end row -->

     </div><!-- end container  -->

   

    <!-- End Header. Begin Template Content -->