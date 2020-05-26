<?php
/**
 * Template Name: Page - Home Hero
 * Description: Displays page title and content in Hero section above 3 widgets.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row dots">
            &nbsp;
        </div><!--/.row -->
         <div class="row tint" style="padding-top:30px; padding-bottom:30px;">
            <div class="container">
                <div class="span8 offset2">
                    
                    <?php the_content(); ?>
                </div><!-- end span12 -->
            </div><!-- end container -->
        </div><!--/.row -->
        <div class="row dots2">
            &nbsp;
        </div><!--/.row -->
     

    <?php endwhile; endif; ?>
<div class="container">
    <div class="row content">
        
    <a href="<?php bloginfo('url');?>/print">
        <div class="span3 box">
        <h4 style="text-align:center; color:#fff; font-weight:100; line-spacing:.1em">print</h4>
        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/06/FF2013_Tabloid_600_masthead800.jpg" class="over" /> 
        </div>
        </a>

        <a href="<?php bloginfo('url');?>/web">
        <div class="span3 offset1 box">
        <h4 style="text-align:center; color:#fff; font-weight:100; line-spacing:.1em">web</h4>
        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/06/SCPL_website_web800.jpg" class="over" /> 
        </div>
        </a>

       

        <a href="<?php bloginfo('url');?>/miscellaneous-projects">
        <div class="span3 offset1 box">
        <h4 style="text-align:center; color:#fff; font-weight:100; line-spacing:.1em">misc</h4>
        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/06/IMG_7433-carpe_square.jpg" class="over" /> 
        </div>
        </a>


        </div><!--/.container -->
    </div><!--/.row -->

<?php get_footer(); ?>