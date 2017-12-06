<?php
/**
 * The front page file.
 *
 * @package BizSphere
 */

get_header(); ?>

	<?php 
		
		if( !of_get_option('homepage_layout') || of_get_option('homepage_layout') == 'bone' ) {
			 get_template_part( 'index-cn', 'bone' );
		}elseif( of_get_option('homepage_layout') == 'bfive' ) {
			get_template_part( 'index-cn', 'bfive' );
		}else{	
			if( 'page' == get_option( 'show_on_front' ) ){	
				get_template_part('index-cn', 'page');
			}else {
				get_template_part('index-cn', 'standard');
			}
		}
		
	?>

<?php get_footer(); ?>