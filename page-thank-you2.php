<?php /* Template Name: Thank you page 2 */?>

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
           
           <a class="download-button2" href="<?php echo get_template_directory_uri(); ?>/data/E-handbook.pdf" download></a>
         &nbsp;
           <div class="clear"></div>
</div>

<?php get_footer(); ?>
