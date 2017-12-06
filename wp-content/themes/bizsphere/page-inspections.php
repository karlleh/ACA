<?php
/**
 * The template for Type of Inspections page
	*
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package BizSphere
 	Template Name: Type of Inspection sub Page
 */

get_header();

$post = get_post();
$catContent = $post->post_content;
$catTitle = $post->post_title;

$inspectionCategory = '5'; // Localhost
$inspectionCategory = '4'; // Dev server
$inspectionCategory = '4'; // Live server

if ($catTitle == 'Semiconductor, End of line process') {
		$inspectionCategory = '6';
		$inspectionCategory = '11'; // Dev server
	 $inspectionCategory = '5'; // Live
}
if ($catTitle == 'Other industries') {
		$inspectionCategory = '7';
		$inspectionCategory = '12'; // Dev server
		$inspectionCategory = '6'; // Live
}

?>

	<div id="inspectionHeader">
		<div class="onethird" id="onethird">
				<!--ul class="inspectionUl">
						<li class="inspectionTitle sidebar">Industries</li>
						<li class="inspectionType"><a class="<?php if ($inspectionCategory == '4') { echo 'current'; } ?>" href="http://dreamrocks.my/aca/types-of-inspection/front-mid-of-line-semiconductor/">Front / mid of line semiconductor</a></li>
						<li class="inspectionType"><a class="<?php if ($inspectionCategory == '11') { echo 'current'; } ?>" href="http://dreamrocks.my/aca/types-of-inspection/semiconductor-end-of-line-process/">End of line semiconductor</a></li>  
						<li class="inspectionType"><a class="<?php if ($inspectionCategory == '12') { echo 'current'; } ?>" href="http://dreamrocks.my/aca/types-of-inspection/other-industries/">Other</a></li>
				</ul>
				<ul class="inspectionUl">
						<li class="inspectionTitle sidebar">Industries</li>
						<li class="inspectionType"><a class="<?php if ($inspectionCategory == '5') { echo 'current'; } ?>" href="?page_id=55">Front / mid of line semiconductor</a></li>
						<li class="inspectionType"><a class="<?php if ($inspectionCategory == '6') { echo 'current'; } ?>" href="?page_id=74">End of line semiconductor</a></li>  
						<li class="inspectionType"><a class="<?php if ($inspectionCategory == '7') { echo 'current'; } ?>" href="?page_id=79">Other</a></li>
				</ul-->
				<ul class="inspectionUl">
						<li class="inspectionTitle sidebar">Industries</li>
						<li class="inspectionType"><a class="<?php if ($inspectionCategory == '4') { echo 'current'; } ?>" href="http://www.acavision.com.my/aca/types-of-inspection/semiconductor-front-mid-of-line-process/">Front / mid of line semiconductor</a></li>
						<li class="inspectionType"><a class="<?php if ($inspectionCategory == '5') { echo 'current'; } ?>" href="http://www.acavision.com.my/aca/types-of-inspection/semiconductor-end-of-line-process/">End of line semiconductor</a></li>  
						<li class="inspectionType"><a class="<?php if ($inspectionCategory == '6') { echo 'current'; } ?>" href="http://www.acavision.com.my/aca/types-of-inspection/other-industries/">Other</a></li>
				</ul>
				<div id="enquirySidebar">
						<h3>Can't find what you are looking for?</h3>
						<p>Drop us a line and one of our expert will assist you along the way.</p>
						<a href="../../contact/" class="enquiryButton">Call us +604 501 1010</a>
						<br/><br/>
						<span>&boxh;&boxh;&boxh;&boxh;&boxh;&boxh;&nbsp;or&nbsp;&boxh;&boxh;&boxh;&boxh;&boxh;&boxh;</span>
						<a href="../../contact/" class="enquiryButton">Make Enquiry</a>
				</div>
		</div>
		<div class="twothird">
				<ul id="inspectionDesc" class="inspectionUl">
						<li class="inspectionTitle">
								<?php echo $catTitle ?>
						</li>
						<li class="inspectionDesc">
								<?php echo $catContent ?>
						</li>
				</ul>
				
				<div class="content-container inspectionListing">
					<div id="primary" class="content-area">
						<div id="content" class="site-content" role="main">
								<?php
														$loop = new WP_Query(array('post_type' => 'post', 'cat' => $inspectionCategory));
														
														if ( $loop ) : 
																											
																while ( $loop->have_posts() ) : $loop->the_post();
																		get_template_part( 'loop');
																endwhile;
																
														endif;
								?>
						</div><!-- #content -->
					</div><!-- #primary -->
				</div>
		</div>
	</div>
<?php get_footer(); ?>

<script>
		var $win = jQuery(window);
		var $body = jQuery("#main");
		var $footer = jQuery("#colophon");
		var $scrollingDiv = jQuery("#onethird");
		var $bodyHeight = 0; // Body content dynamic height
		var $sidebarHeight = 0; // 686px (sidebar height)
		var $footerTopPosition = 0; // To store footer top position
		var $setScrollMargin = 0; // Max margin-top int limiter
		
		jQuery(function() {
    var $sidebar   = $scrollingDiv,
        offset     = $sidebar.offset(),
        topPadding = 115; // 20px margin + menubar 95px

				// set body height and sidebar height variables
				$bodyHeight = $body.outerHeight();
				$sidebarHeight = $sidebar.outerHeight() + offset.top;
				$footerTopPosition = $footer.offset().top;

    $win.scroll(function() {
						if ($win.width() > 479) {
        if ($win.scrollTop() > offset.top) { // Once browser window top scrolls down and cover sidebar top, execute below script
										
										// Limit margin-top to body height
										if ($setScrollMargin + $sidebarHeight < $footerTopPosition) {
												// if current marginTop + sidebarHeight is less then footer top pixel, set the marginTop
												$setScrollMargin = $win.scrollTop() - offset.top + topPadding;
												
												if ($setScrollMargin + $sidebarHeight > $footerTopPosition) {
														$setScrollMargin = $footerTopPosition - $sidebarHeight;
												}
										}
										else if ($setScrollMargin + $sidebarHeight > $footerTopPosition) {
												$setScrollMargin = $footerTopPosition - $sidebarHeight;
										}
										else if ($bodyHeight > $win.scrollTop() + $sidebarHeight) {
												// Set current sidebar margin to follow scroll if not over body height
												$setScrollMargin = $win.scrollTop() - offset.top + topPadding;
										}
										
										$sidebar.stop().animate({
														marginTop: $setScrollMargin,
														duration: 0
										});
        } else {
										$sidebar.stop().animate({
														marginTop: 0,
														duration: 0
										});
        }	
						}
    });
		});
		
		// Toggle mobile sidebar Inspection dropdown feature
		jQuery('.inspectionTitle').click(function(){
			jQuery('.inspectionType').slideToggle('slow');
		});
</script>
