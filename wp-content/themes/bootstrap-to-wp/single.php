<?php get_header();?>

  
<div class="container pt-4">
    <div class="row">
        <div class="col-md-9">

            <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
                
                <div class="page-header">
                    <h1><?php the_title(); ?></h1>

                    <?php if(has_category('',$post->ID)) { ?>
                        <p> in <em><?php the_category(', '); ?></em><?php
                        } else {
                        };?>
                </div>

                <?php the_content() ?>
            
               <?php comments_template(); ?> 

            <?php endwhile; else: ?>

                <p>It looks like nothing was found at this location. Maybe try a search?></p>
                <?php get_search_form(); ?>

            <?php endif; ?>

        </div><!-- end col -->

        <?php get_sidebar('blog'); ?>


    </div><!-- end row -->
</div><!-- end container -->

<?php get_footer();?>


