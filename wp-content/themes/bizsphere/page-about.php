<?php
/**
 * The template for About page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package BizSphere
 	Template Name: About Page
 */

get_header(); ?>

	<div class="pageBanner">
			<div class="aboutBanner" ></div>
			<figcaption class="aboutCaption">
				<h1>About ACA Vision Technology</h1>
				<p>We are an expert provider of advanced machine vision inspection solutions &amp; technology. The company core mission it's to deliver an integrated machine visions system with the principles of cost-effectiveness, efficiency, and high performance.
				</p>
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

<?php get_footer(); ?>
