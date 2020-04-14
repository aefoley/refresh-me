<?php
/**
 * Template Name: Page - Full-width-basic
 * Description: Displays a page title and content without displaying a sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<div class="row dots">
    &nbsp;
</div><!--/.row -->
<div class="row content tint">
    <?php while (have_posts()) : the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="span8 offset2" >
                <h1 style="text-align:center;"><?php the_title(); ?></h1>
   
            </div><!-- end span8 -->
         </div><!-- /.row -->
    </div><!-- /.container -->
</div><!--  /.row -->
<div class="row dots2">
&nbsp;
</div><!--/.row -->

<div class="container">
    <div class="row content">
        <div class="span8 offset2" >
            <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
        </div><!-- end span8 -->
    </div><!-- /.container -->
</div><!--  /.row -->



    












<?php get_footer(); ?>