<?php /* Template Name: privacy-refund-terms */ ?>

<?php

 get_header(); ?>

 
<div class="privacy-refund-terms">
			<?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
            endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
            ?>
<div class="clear"></div>
</div>
 <?php get_footer();
 
 
  ?>