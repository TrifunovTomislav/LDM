<?php
/* The template for displaying search results pages */

get_header(); ?>

<div class="search-results-display">

		<?php if ( have_posts() ) : ?>
		<h2><?php printf( esc_html__( 'Search Results for: %s', 'oliva' ), '<span>' . get_search_query() . '</span>' ); ?>
        </h2>
		<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();?>
					<?php
					 the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); 
                       if ( 'post' === get_post_type() ) :
                        
                        endif; 
                        
                         the_excerpt(); 
                         
                        endwhile;?>
                        
                      <h3><?php the_posts_navigation(); ?></h3>
                      
                      <?php else :?>
                
                   <h2><?php esc_html_e( 'Nothing Found', 'oliva' ); ?></h2>
        
                   <h3><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'oliva' ); ?></h3>

		<?php endif; ?>

</div><!-- search-results-display -->
	

<?php get_footer();?>
