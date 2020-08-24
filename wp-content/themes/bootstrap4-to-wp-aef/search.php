<?php
/*
    Template Name: search
*/
?>

<?php get_header();?>
<div class="row dots"></div>




        <div class="container mt-5">
            <div class="row">
                
            </div>
            <h1>Search results for: <?php the_search_query(); ?></h1>
            <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
            <div class="row content">
            <div class="col-md-10">
            <h3><a href="<?php the_permalink(); ?>"> <?php the_title();?></a> </h3>
                    

            <?php the_excerpt(); ?>
              <?php the_field('introductory_text'); ?>

            <?php endwhile; else: ?>

            <p>Sorry! No results for this search!</p>
            <?php get_search_form(); ?>

            <?php endif; ?>

            </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
  


<?php get_footer();?>
