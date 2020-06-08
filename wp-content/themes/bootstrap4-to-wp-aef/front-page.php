<?php get_header();?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
     <div class="row dots"></div>
    <article class="jumbotron">
      <div class="container">
        <div class="col-lg-8 offset-lg-2">
          
       
        <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>

          <?php the_content() ?>
        
        <?php endwhile; endif; ?>

        <a href="#work" style="text-decoration: none;"><div id="design" class="mt-5">
            <p class="text-center bounce" style="font-size:1.3rem; color:#4e4e4e">Work</p>
            <div class="arrow bounce"> </div>
            <br>
        </div> </a>

        </div>
    </article>
    <div class="dots2"></div>
     <div id="work"> &nbsp; </div>


    <aside class="container mt-5">
       <div class="row">
         <?php
             $args=array(
             'post_type' => 'work',
             'post_status' => 'publish',
             'posts_per_page' => 8,
             'order' => 'ASC',
             'orderby' => 'date',
            
             );
             $workQuery = new WP_Query($args);
      
     
             if( $workQuery->have_posts() ) {
             while ($workQuery->have_posts()) : $workQuery->the_post();

             include 'includes/landingwork-square.php';
             endwhile;
             }
             wp_reset_query();
        ?>
     
   
        
      </div> <!-- end row -->
    </aside>

<?php get_footer();?>