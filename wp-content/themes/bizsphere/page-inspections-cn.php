<?php
/**
 * The template for Type of Inspections (CN) page
	*
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package BizSphere
 	Template Name: Type of Inspection (CN) sub Page
 */

get_header();

$post = get_post();
$catContent = $post->post_content;
$catTitle = $post->post_title;

$inspectionCategory = '4'; // Live server

if ($catTitle == '半导体生产线尾端') {
	 $inspectionCategory = '5'; // Live
}
if ($catTitle == '其他行业') {
		$inspectionCategory = '6'; // Live
}

?>

	<div id="inspectionHeader">
		<div class="onethird" id="onethird">
				<ul class="inspectionUl">
						<li class="inspectionTitle sidebar">行业</li>
						<li class="inspectionType"><a class="<?php if ($inspectionCategory == '4') { echo 'current'; } ?>" href="http://acavision.com.my/zh/%e6%a3%80%e6%9f%a5%e7%9a%84%e7%b1%bb%e5%9e%8b/%e5%8d%8a%e5%af%bc%e4%bd%93%e5%89%8d%e4%b8%ad%e7%94%9f%e4%ba%a7%e7%ba%bf/">半导体前/中生产线</a></li>
						<li class="inspectionType"><a class="<?php if ($inspectionCategory == '5') { echo 'current'; } ?>" href="http://acavision.com.my/zh/%e6%a3%80%e6%9f%a5%e7%9a%84%e7%b1%bb%e5%9e%8b/%e5%8d%8a%e5%af%bc%e4%bd%93%e7%94%9f%e4%ba%a7%e7%ba%bf%e5%b0%be%e7%ab%af/">半导体生产线尾端</a></li>  
						<li class="inspectionType"><a class="<?php if ($inspectionCategory == '6') { echo 'current'; } ?>" href="http://acavision.com.my/zh/%e6%a3%80%e6%9f%a5%e7%9a%84%e7%b1%bb%e5%9e%8b/%e5%85%b6%e4%bb%96%e8%a1%8c%e4%b8%9a/">其他行业</a></li>
				</ul>
				<div id="enquirySidebar">
						<h3>找不到你想要的？</h3>
						<p>请告诉我们, 我们的专家会一路上协助你。</p>
						<a href="http://acavision.com.my/zh/%e8%81%94%e7%b3%bb%e6%88%91%e4%bb%ac/" class="enquiryButton">联系我们 +604 501 1010</a>
						<br/><br/>
						<span>&boxh;&boxh;&boxh;&boxh;&boxh;&boxh;&nbsp;或&nbsp;&boxh;&boxh;&boxh;&boxh;&boxh;&boxh;</span>
						<a href="http://acavision.com.my/zh/%e8%81%94%e7%b3%bb%e6%88%91%e4%bb%ac/" class="enquiryButton">查询</a>
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

<?php get_footer('cn'); ?>

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
