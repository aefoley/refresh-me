<?php
/**
 * Template Name: Page - Full-width-misc
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
        <div class="span8 offset2" >
            <h1 style="text-align:center;"><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
        </div><!-- end span8 -->
       
    </div><!-- end container -->
</div><!--/.row -->


<div class="row dots2">
    &nbsp;
</div><!--/.row -->

<div class="container">
<div class="row content">
   
        <div class="span5">
            <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/06/scpl.jpg">
            <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/06/ffest.jpg">
            <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/06/wf.jpg">
            <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/06/nways_web.jpg">
       </div>
       <div class="span6 offset1">
            <h3>Identity</h3>
            <p>I don't do a lot of identity work. I like to leave it to the experts. Experts are people who design logos all the time. And I mean ALL THE TIME.</p>
            <p>If you concepted and designed a logo a week for a year, you might get pretty good at it. But most designers don't have that opportunity, so a lot of logos are a little bit awkward. </p>
            <p></p>
            <p>Designers who do a lot of identity work develop skill in a couple of areas:</p>
            <ol>
                <li>Taking big ideas and condensing them into simple symbols. The best logos are really, really simple. They don't have multiple areas or lots of ideas, or a ton of type. They're not too vertical or too horizontal. They work well as a favicon and on a billboard.  </li>
                <li>Drawing stakeholders into the process and convincing them of the importance of the first point in this list. Good identity designers are always persuading. And they're always teaching non-designers about good design.
                  </li>
            </ol>
            <p>You'll see that the logos I've designed are far from perfect&mdash;even by my own standards, articulated above. </p>
            <p>I still have a fondness for all of these. They're not perfect, but they are successul. </p>
       </div>
       
    </div>
</div>

<div class="row content tint">
    <div class="container">
        
        <div class="row">
             <h3 style="text-align:center" >A few illustrations (click to enlarge)</h3><br><br>

              <div class="span3 offset1" style="margin-bottom:20px;">
                <a class="fancybox" href="<?php bloginfo('url');?>/wp-content/uploads/2015/06/OLD_DOG6.jpg" data-fancybox-group="gallery" >
                    <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/07/OLD_DOG6300.jpg" class="shadow" title ="Old Dogs, digital illustration, 2006">
                </a>

                <p style="font-size:90%; margin-top:20px;"> <em>Old Dogs</em>, digital illustration, 2006</p>
            </div>
            <div class="span3  offset1" style="margin-bottom:20px;">
                <a class="fancybox" href="<?php bloginfo('url');?>/wp-content/uploads/2015/06/stanthony.jpg" data-fancybox-group="gallery" >
                    <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/07/stanthony300.jpg" class="shadow size-thumbnail">
                </a>
                <br>
                 <p style="font-size:90%; margin-top:20px;"> <em>St. Anthony, Patron of Lost Items</em>, digital illustration, 2006</p>
            </div>

             <div class="span3  offset1" style="margin-bottom:20px;">
                <a class="fancybox" href="<?php bloginfo('url');?>/wp-content/uploads/2015/06/hi_flatpig.jpg" data-fancybox-group="gallery">
                    <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/07/hi_flatpig300.jpg" class="shadow size-thumbnail">
                </a>
                <p style="font-size:90%; margin-top:20px;"> <em>Debt</em>, digital illustration, 2006</p>
            </div>

           
           
        </div>

    </div>
</div>

  <div class="container">
     <div class="row" style="padding-top:40px;">

       
       
           <div class="span6" style="text-align:right">
                <h3 >2012 Ann Foley Design promotional calendar</h3>
                <p>My #YOLO project for 2012. I designed a letterpress calendar and had it printed at <a href="http://www.crankypressman.com/"> Cranky Pressman</a>. I sent these to my friends and family instead of holiday cards. So much fun!</p>
                
            </div>

             <div class="span6">
                 <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/06/IMG_7433-carpe_web.png" />
            </div>
        </div>
               
    </div><!-- /.row -->


     




<?php get_footer(); ?>