<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package BizSphere
 */
?>

    		</div><!-- .content-container -->
        
    	</div><!-- .Responsive-Container -->
        
	</div><!-- #main -->
	<!-- Footer Starts Here -->
	<?php 
								
		if( !of_get_option('footer_layout') || of_get_option('footer_layout') == 'one' ) {
			$footer_layout = 'one';
		}else {
			$footer_layout = 'two';
		}
								
		get_template_part( 'footer-cn', $footer_layout );
								
	?>
    <!-- Footer ends Here -->
    
</div><!-- #page -->
</div><!-- #wrapper-one -->
</div><!-- #wrapper-two -->
</div><!-- #wrapper-three -->

<?php wp_footer(); ?>

<script>
	/*jQuery( window ).on( "orientationchange", function( event ) {
			if (event.orientation == 'landscape') {
				jQuery('#landscapeBlocker').show();
			}
			else
			{
				jQuery('#landscapeBlocker').hide();
			}
	});
	
	// You can also manually force this event to fire.
	jQuery( window ).orientationchange();*/
</script>
 <div id="landscapeBlocker">
		<img src="<?php echo get_template_directory_uri() ?>/images/Rotate-Icon.jpg" alt="rotate your device"/>
	</div>
</body>
</html>