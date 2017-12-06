<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package BizSphere
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src='<?php echo get_template_directory_uri();?>/bss/js/hammer.min.js'></script>
	<link href='<?php echo get_template_directory_uri();?>/bss/css/simple-slideshow-styles.css' rel='stylesheet' type='text/css'>
	<script src='<?php echo get_template_directory_uri();?>/bss/js/better-simple-slideshow.min.js'></script>
	<script src="<?php echo get_template_directory_uri();?>/js/waypoint/noframework.waypoints.min.js"></script>

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper-one">
<div id="wrapper-two">
<div id="wrapper-three">
<div id="page" class="hfeed site">
	<?php do_action( 'BizSphere_before' ); ?>
       
	<header id="masthead" class="site-header" role="banner">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri();?>/images/ACA Logo.png" /></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main-nav', 'container' => false, 'menu_class' => 'nav', 'walker' => new wp_bootstrap_navwalker() ) ); ?>
            </div>
        </nav>

      </div>
	</header><!-- #masthead -->
   
	<div id="main" class="site-main"> 
	<?php 
		if(is_front_page()) {
		echo '<div id="bss" class="bss-slides">';
		$args = array(
		 'post_type' => 'post',
			'numberposts' => 3, // Limit to 5 featured posts only
			'category_name' => 'sliderCN', // Show only 'Slider' category posts
			'post_status' => 'publish',
			'ignore_sticky_posts' => 1,
			'orderby' => "date",
			'order' => "DESC"
		);

		$query = new WP_Query( $args );
		
		$images = get_children( $args );
				if($images) {
					foreach( $images as $image ) {
						$feat_image = wp_get_attachment_url( get_post_thumbnail_id( $image->ID ) );
						?>
        <figure class="bssfig">
									<div class="figBG" style="background: url(<?php echo $feat_image; ?>)" ></div>
									<figcaption>
										<h3><?php echo $image->post_title; ?></h3>
										<p><?php echo $image->post_content; ?></p>
									</figcaption>
        </figure>
						<?php }
				} ?>
				<figure class="bssfig">
					<div class="figBGvfi" ></div>
						<figcaption class="vfi">
							<h3>" 力推极限，挑战极限 "</h3>
							<p>由于行业的需求显着增加，我们致力于力推界限, 挑战技能和知识的极限。<br/>从设计到执行, 我们将实现优秀及令人满意的结果。</p>
						</figcaption>
				</figure>
				
				<div class="bss-prev" ></div>
				<div class="bss-next" ></div>
				<div id="paginationCenterer">
						<div id="pagination" class="pagination">
								<?php
										foreach ($images as $image) {
												echo '<div class="paginationBox"></div>';
										}
								?>
								<div class="paginationBox"></div>
						</div>
				</div>
   </div>   
				
		<?php }	?>

    		
<script>
		var opts = {
				auto: { speed: 5000, pauseOnHover: true },
				swipe: true
		};
		makeBSS('.bss-slides', opts);
				
		updatePagination(0);
</script>