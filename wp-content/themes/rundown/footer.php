<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @since Rundown 1.6.3
 * @update 1.7 
 */
?>	

		</div><!--/#main-->
		
		<div class="clear"></div>		
		
		<div id="footer">
		
			<?php wp_nav_menu( array( 'container_id' => 'primarynav-footer', 'theme_location' => 'primary' ) ); ?>		
		
			<div class="footer-inner">
				<span class="footcreditleft">&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?></span>
				<div class="clear"></div>
			</div>	
		</div><!--/#footer-->
	
	
	</div><!-- /#wrapper -->
	
	<a href="#" class="scrollup"><?php _e('Scroll to top', 'rundown'); ?></a>			

	<?php wp_footer(); ?>
	
</body>


</html>
