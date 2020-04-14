<?php
/**
 * Template Name: Page - Full-width-fest
 * Description: Displays a page title and content without displaying a sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

    <div class="row tint" style="padding-top:50px; padding-bottom:50px;">
        <?php while (have_posts()) : the_post(); ?>
            <div class="container">
                <div class="span2"></div>

                <div class="span8" >
                    
                    <h1 style="text-align:center;"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
                </div><!-- end span6 -->
                 <div class="span2"></div>
            </div><!-- end container -->
        </div><!--/.row -->





<div class="row" style="padding-top:100px; padding-bottom:100px;">
    <div class="container">

        <div class="row">
           
           <div class="span12">
                  <h4>Website</h4>
                    <p>Designed and developed mostly by me. But I have collaborated closely with Fest director Donna Neuwirth&mdash; she's an artist with a great eye for design. </p>
                    <br>
                    <img src="/wp-content/uploads/2015/06/FFweb1.png" class="shadow">
           </div>
           
       </div>
        
   </div>
</div>


<div class="row content  tint" style="padding-top:100px; padding-bottom:100px;">
    <div class="container">


        <div class="row">

        <div class="span4">
        <img src="/wp-content/uploads/2015/06/KI_FF_Poster2000.jpg" class="shadow">
        </div>

        <div class="span8">
        <h4>Collateral - Poster for the 2010 Fermentation Fest</h4>
        <p>The Fermentation Fest is an arts and sustainable food event that takes place each fall in Sauk County, Wisconsin. Since the Fest began in 2010, I've been fortunate to work on a number of projects for the Fest — the website, the visitor guide, branding, marketing and lots more.</p>
         <p>At left, an example of the many collateral pieces I have designed for the Fest over the years.</p>
         <p>I came up with the concept for this poster, and even took the photograph of the bottle with the fermented foods in it.</p>
         <p>I took dozens of shots the get the right beer, pickle, cheese and bread arrangement. Had to drink a few beers and eat a few pickles as I was doing so. But I'm always willing to go the extra mile.</p>
         <br>
        </div>

   </div>
</div>


     

        




<?php get_footer(); ?>