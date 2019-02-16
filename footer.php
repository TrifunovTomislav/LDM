			<!-- footer -->
			<footer class="footer">
                <div class="footer-widgets" id="footer-widgets">
                     <?php oliva_social_menu(); ?>    
						<?php dynamic_sidebar( 'sidebar-1' ); ?>                
                 </div><!-- widgets -->
				
            <div class="clear"></div>    
			</footer>
			<!-- /footer -->
            
<div class="scroll-top-wrapper "><!-- scroll to top button -->
                <span class="scroll-top-inner">
                    <i class="fa2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top.png" height="57" id="topButton" />
                    </i>
                </span>
            </div><!-- /scroll to top button -->
            
<?php include 'js/footer-scripts.js'; ?>
	</body>
</html>
