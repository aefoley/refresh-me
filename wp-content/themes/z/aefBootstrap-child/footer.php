<?php
/**
 * Default Footer
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
<div class="push"></div>
    </div><!-- end wrapper -->
    
        <footer style="background-color:#fff;">
            <div class="container">
                <p>&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?></p>
                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("footer-content");
                } ?>
            </div><!-- /container -->
        </footer>

        <div class="row dots">
          &nbsp;
      </div><!--/.row -->

        <?php wp_footer(); ?>
    </body>
 <script type="text/javascript">
    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox();
      });

    </script>
</html>

