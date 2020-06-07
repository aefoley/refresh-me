<?php 
/*
    Template Name: Full Width Template
*/
?>

<?php get_header();?>
  
<!--  -->

    <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
        <div class="container-fluid">
             <div class="row dots"></div>
            <header class="row py-4 mt-3">
                <div class="col-12">
                    <div class="page-header">
                        <h1 class="text-center mb-5"><?php the_title(); ?></h1>
                    </div>
                </div>
            </header>
        </div>

<main class="container">
    <div class="row">
        <article class="col-md-12">
                <?php the_content() ?>

            <?php endwhile; else: ?>

                  <p>It looks like nothing was found at this location. Maybe try a search?></p>
                <?php get_search_form(); ?>

            <?php endif; ?>

        </article><!-- end col -->
    </div><!-- end row -->
</main><!-- end container -->


<?php get_footer();?>