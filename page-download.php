<?php /* Template Name: download page */ 
 get_header(); ?>


<div class="main aside">
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

<div class="preview-chapter purchece">
			<?php
            
            // The Query for posts by category
            $the_query = new WP_Query( array( 'category_name' => 'purchece' ) );
            
            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    echo the_content();
                }
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
            
            <div class="clear"></div>
</div>

<?php get_footer(); ?>