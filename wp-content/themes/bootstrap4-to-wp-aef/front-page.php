<?php get_header();?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
     <div class="row dots"></div>
    <article class="jumbotron">
      <div class="container">
        <div class="col-lg-8 offset-lg-2">
          
       
        <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>

          <?php the_content() ?>
        
        <?php endwhile; endif; ?>

        </div>
    </article>
    <div class="dots2"></div>


    <aside class="container mt-5">
      <!-- Example row of columns -->
      <div class="row">
        <section class="col-md-4">
           <?php
              if (function_exists('dynamic_sidebar')) {
                  dynamic_sidebar("home-left");
              } 
            ?>
        </section>

        <section class="col-md-4">
           <?php
              if (function_exists('dynamic_sidebar')) {
                  dynamic_sidebar("home-middle");
              } 
            ?>
        </section>
        <section class="col-md-4">
          <?php
              if (function_exists('dynamic_sidebar')) {
                  dynamic_sidebar("home-right");
              } 
            ?>
        </section>
      </div>
    </aside>

<?php get_footer();?>