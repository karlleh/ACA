<?php
/**
 * The front page file.
 *
 * @package BizSphere
 */

	if (pll_current_language() == 'en') {
		get_header();
	} else {
		get_header('cn');
	}
?>

	<?php 
		
	if (pll_current_language() == 'en') {
		if( !of_get_option('homepage_layout') || of_get_option('homepage_layout') == 'bone' ) {
			 get_template_part( 'index', 'bone' );
		}elseif( of_get_option('homepage_layout') == 'bfive' ) {
			get_template_part( 'index', 'bfive' );
		}else{	
			if( 'page' == get_option( 'show_on_front' ) ){	
				get_template_part('index', 'page');
			}else {
				get_template_part('index', 'standard');
			}
		}
	}
	else {
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
	}
	?>

<?php
	if (pll_current_language() == 'en') {
		get_footer();
	}
	else {
		get_footer('cn');
	}
?>