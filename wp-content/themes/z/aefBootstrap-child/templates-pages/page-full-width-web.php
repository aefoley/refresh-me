<?php
/**
 * Template Name: Page - Full-width-web
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


<div class="row content">
    <div class="container">
        <div class="span12">
                  <h3 style="text-align:center">Website for Lawnbott of the Great Lakes</h3>
                    <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/06/lawnbott.png">
                    <div class="row" style="margin-top:20px;">
                        <div class="span8 offset2">
                            
                            <p>Website for <a href="http://lawnbottgreatlakes.com/">Lawnbott Great Lakes </a>, a Waunakee dealer for cool little robotic lawn mowers.</p>
                            <p>I love the look of the little mowers; they're like tiny Italian sports cars from an art deco advertising poster. </p>
                            <p>This website is a WordPress site built using a customized Bootstrap template (original template developed by <a href="http://rachelbaker.me/">Rachel Baker</a>).</p>
                            <p>This site was developed for <a href="http://www.thecreativecompany.com">The Creative Company.</a> I concentrated on the layout, user experience design and all the coding and markup. <a href="https://www.behance.net/ktarnesen/collections"> KT Arneson</a> did the aesthetic design.</p>
                        </div>
                    </div>
           </div>
       
    </div>
</div>

<div class="row content tint">
    <div class="container">
            <div class="span5">
                 <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/06/TCC_email.jpg" class="shadow" />
            </div>
            <div class="span6">
                <h3 >Promotional email for The Creative Company</h3>
                <p>One of many, many promotional emails designed for <a href="http://www.thecreativecompany.com">The Creative Company.</a> </p>
                <p>These "email blast" pieces present a number of design and development challenges. </p>
                <p>Email clients such as Outlook, Gmail and Apple Mail handle markup very differently from browsers&mdash; and from one another. A piece that looks great in Gmail can absolutely fall apart in Outlook. </p>
                <p> Creating a successful piece requires creativity and knowledge of both markup and design principles. And lots of testing!</p>
                
            </div>

    </div>
</div>


<div class="row content " >
    <div class="container">
           <div class="span12">
                  <h3 style="text-align:center">Website for the Sauk City Public Library</h3>
                    <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/06/scpl.png">
                    <div class="row" style="margin-top:20px;">
                        <div class="span8 offset2">
                            <p>Website for <a href="http://saukcitylibrary.org">Sauk City Public Library</a>. Ben Miller, Library Director, wanted:</p>
                                <ul>
                                    <li>an attractive library website </li>
                                    <li>that works on phones and other devices</li>
                                    <li>that he could update easily.</li>
                                </ul> 

                            <p>I designed and developed a custom WordPress site for the library using the Skeleton responsive framework. Along the way, I also designed a new logo for the library.</p>    
                            <br>
                        </div>
                    </div>
            </div>
    </div>
</div>

<div class="row content tint" >
    <div class="container">
         <div class="span12">
              <h3 style="text-align:center">Website for Nurturing Ways, LLC</h3>
                <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/06/nways.png">
                <div class="row" style="margin-top:20px;">
                    <div class="span8 offset2">
                        
                        <p>Website for <a href="http://nurturing-ways.com">Nurturing Ways, LLC</a>. Yvonne Hiebert is an infant massage expert and trainer.</p>
                        <p>In additon to designing and developing this site, I also took most of the photographs! Gallery below: </p>
                        <br>
                    </div>
                </div>



  



     <div class="row">
       
            <div class="span2" style="margin-bottom:20px;">
                <a class="fancybox" href="<?php bloginfo('url');?>/wp-content/uploads/2015/06/IMG_2738_web.jpg" data-fancybox-group="gallery" >
                    <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/06/IMG_2738_web-150x150.jpg" class="shadow">
                </a>
            </div>
            <div class="span2" style="margin-bottom:20px;">
                <a class="fancybox" href="<?php bloginfo('url');?>/wp-content/uploads/2015/06/IMG_2766_web.jpg" data-fancybox-group="gallery" >
                    <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/06/IMG_2766_web-150x150.jpg" class="shadow size-thumbnail">
                </a>
            </div>

             <div class="span2" style="margin-bottom:20px;">
                <a class="fancybox" href="<?php bloginfo('url');?>/wp-content/uploads/2015/06/IMG_2749-Edit_web.jpg" data-fancybox-group="gallery">
                    <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/06/IMG_2749-Edit_web-150x150.jpg" class="shadow size-thumbnail">
                </a>
            </div>
               <div class="span2" style="margin-bottom:20px;">
                <a class="fancybox" href="<?php bloginfo('url');?>/wp-content/uploads/2015/06/IMG_2773-Edit-Edit_web.jpg" data-fancybox-group="gallery" >
                    <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/06/IMG_2773-Edit-Edit_web-150x150.jpg" class="shadow size-thumbnail">
                </a>
            </div>
           <div class="span2" style="margin-bottom:20px;">
                <a class="fancybox" href="<?php bloginfo('url');?>/wp-content/uploads/2015/06/IMG_2735_web.jpg" data-fancybox-group="gallery">
                    <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/06/IMG_2735_web-150x150.jpg" class="shadow size-thumbnail">
                </a>
            </div>
            <div class="span2" style="margin-bottom:20px;">
                <a class="fancybox" href="<?php bloginfo('url');?>/wp-content/uploads/2015/06/IMG_2714_web.jpg" data-fancybox-group="gallery">
                    <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/06/IMG_2714_web-150x150.jpg" class="shadow size-thumbnail">
                </a>
            </div>
    </div><!-- /.row -->
        </div>
           
    </div><!-- ./container -->
</div><!--./row content  --><!--  -->





        




<?php get_footer(); ?>