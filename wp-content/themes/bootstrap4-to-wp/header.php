<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
    <link rel="icon" href="<?php bloginfo('template_url');?>/assets/img/favicon.ico">

    <title>
      <?php wp_title(' | ', true, 'right'); ?>
      <?php bloginfo('name');?>

    </title>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class();?>>
    <header>
      <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="<?php bloginfo('url');?>">Offcanvas navbar</a>
      <!--       <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
          </button> -->
          <button class="hamburger hamburger--squeeze navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        <?php
              wp_nav_menu( array(
                  'theme_location'    => 'header-menu',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'navbar-collapse offcanvas-collapse',
                  'container_id'      => 'main_nav',
                  'menu_class'        => 'navbar-nav ml-auto',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
          ?>
        </div> <!-- Container -->
      </nav>
    </header>