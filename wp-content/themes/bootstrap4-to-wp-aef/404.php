<?php get_header();?>
<div class="row dots"></div>



<div class="container ">
    <div class="row">
        <div class="col-md-12 content">
            <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>

                <?php the_content() ?>

            <?php endwhile; else: ?>

                <header class="row py-4 mt-5">
                    <div class="col-8 offset-2">
                        <div class="page-header">
                            <h1 class="text-center mb-5">Page not found</h1>

                            <p>It looks like nothing was found at this location. Maybe try a search?</p>
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                </header>

            <?php endif; ?>

        </div><!-- end col -->

    </div><!-- end row -->

</div><!-- end container -->

<?php get_footer();?>
