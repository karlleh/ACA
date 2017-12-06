<?php
/**
 * The template for About (CN) page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package BizSphere
 	Template Name: About (CN) Page
 */

get_header(); ?>

	<div class="pageBanner">
			<div class="aboutBanner" ></div>
			<figcaption class="aboutCaption">
				<h1>关于ACA视觉技术</h1>
				<p>我们是先进机器视觉检测解决方案和技术的专业供应商。我们公司的核心使命是以成本效益，效率和高性能的原理提供一个集成的机器视觉系统。</p>
			</figcaption> 
	</div>

	<div class="responsive-container">    
		<div class="content-container">
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
		
					<?php while ( have_posts() ) : the_post(); ?>
		
						<?php get_template_part( 'content', 'page' ); ?>
		
					<?php endwhile; // end of the loop. ?>
		
				</div><!-- #content -->
			</div><!-- #primary -->

<?php get_footer('cn'); ?>