<?php /* Template Name: home page */?>
<?php get_header(); ?>
 
<div class="fotorama" data-loop="true" data-autoplay="4000" data-stopautoplayontouch="false" data-keyboard="true" data-width="100%" data-nav="false" data-transitionduration="1000" data-transition="crossfade">
          <div data-img="<?php echo get_template_directory_uri(); ?>/images/image_1.jpg" class="slider-text"><p>Get To Know About <br />Tools<br/><a href="#introduction">introduction</a></p></div>
          <div data-img="<?php echo get_template_directory_uri(); ?>/images/image_13.jpg" class="slider-text"><p>For Your Everyday<br/>Packages</p></div>
          <div data-img="<?php echo get_template_directory_uri(); ?>/images/image_15.jpg" class="slider-text"><p>The Old Fashion Way</p></div>
     </div>

	
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
   
<?php

// The Query for posts by category
$the_query = new WP_Query( array( 'category_name' => 'blurbs' ) );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<div class="blurbs clear">';
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>';
		echo the_content();
		echo '</li>';
	}
	echo '</ul>';
	echo '</div>';
} else {
	// no posts found
}

/* Restore original Post Data */
wp_reset_postdata();
?>
<div class="clear"></div>

<div class="promo-section">

	<?php
    
    // The Query for posts by category
    $the_query = new WP_Query( array( 'category_name' => 'promo headline' ) );
    
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

	<div class="promo-section-left">

		<?php
        
        // The Query for posts by category
        $the_query = new WP_Query( array( 'category_name' => 'promo left side' ) );
        
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

	</div>
    
	<div class="promo-section-right">

		<?php
        
        // The Query for posts by category
        $the_query = new WP_Query( array( 'category_name' => 'promo right side' ) );
        
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
        
	</div>
    
<div class="clear"></div>
</div>

<div class="video-section">
	<div class="video-headline">
		<?php
            
            // The Query for posts by category
            $the_query = new WP_Query( array( 'category_name' => 'video headline' ) );
            
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
    </div>
    
    <div class="video-accordion">
		<?php
        // The Query for posts by category
        $the_query = new WP_Query( array( 'category_name' => 'video accordion' , 'orderby' => 'ID',
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
<div class="clear"></div>
</div>

<div class="preview-chapter">
			<?php
            
            // The Query for posts by category
            $the_query = new WP_Query( array( 'category_name' => 'preview chapter' ) );
            
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
            
            <a class="download-button" href="<?php echo get_template_directory_uri(); ?>/data/introduction_chapter.pdf" download></a>
            
            <div class="clear"></div>
</div>

<?php get_footer(); ?>
