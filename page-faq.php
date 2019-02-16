<?php /* Template Name: FAQ page */?>
<?php get_header(); ?>

    <div class="faq">
		  <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
            endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
           ?>
   </div>
   
    <div class="faq-accordion">
		<?php
        // The Query for posts by category
        $the_query = new WP_Query( array( 'category_name' => 'faq' , 'orderby' => 'ID',
            'order'   => 'ASC',) );
        
        // The Loop
        if ( $the_query->have_posts() ) {
            
            echo '<ul class="accordion">';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<li>';
                echo '<h4>'. get_the_title(). '</h4>';
                echo '<ul><li>';
                echo the_content();
                echo '</li></ul>';
                echo '</li>';
            }
            echo '</ul>';
            
        } else {
            // no posts found
        }
        
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
    </div>
   
<?php get_footer(); ?>