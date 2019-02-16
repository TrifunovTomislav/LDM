<?php get_header();


            if ( have_posts() ) : while ( have_posts() ) : the_post();
                if (wp_attachment_is_image($post->id)) {
				$att_image = wp_get_attachment_image_src( $post->id, "large");
				?>
				<p class="attachment">
					
					<img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>"  class="attachment-image" alt="<?php $post->post_excerpt; ?>" />
					
				</p>
				<?php } 
				 
            endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
          
		  
		  
 get_footer(); ?>