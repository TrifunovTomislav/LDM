<?php /* Template Name: Thank you page */?>

<?php get_header(); ?>


<div class="main">
		  <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
            endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
           ?>
</div>

<?php get_footer(); ?>





