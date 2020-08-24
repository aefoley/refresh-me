 <div class=" col-lg-3 col-md-3 col-sm-6  col-6 mb-5" >
      <div class="hovereffect">
           <?php
                  if ( has_post_thumbnail()) {
                   echo '<a href="' . get_permalink()  . '" title="' . the_title_attribute('echo=0') . '" >';
                   the_post_thumbnail('300x300', array( 'class' => ' img-fluid grayborder' )); }
                  echo '</a><div class="overlay"><h4 class="text-center"><a href="' . get_permalink()  . '" >';
                   print the_field('short_title'); ;
                   echo '</a></h4></div>';
             ?>
     </div>
 
 </div><!-- end cols -->