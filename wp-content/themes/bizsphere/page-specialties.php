<?php
/**
 * The template for Specialty page
 *
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325.36140677382167!2d100.43421263483103!3d5.311444395800283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac7fc0bb10d79%3A0xfd5823f509f36d23!2s56%2C+Jalan+Industri+Beringin%2C+Taman+Perindustrian+Beringin%2C+14100+Simpang+Ampat%2C+Pulau+Pinang!5e0!3m2!1sen!2smy!4v1459930907899" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	
	
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package BizSphere
 	Template Name: Specialty Page
 */

get_header(); ?>

	<div class="pageBanner">
			<!--img src="<?php echo get_template_directory_uri();?>/images/Spec_img_01.jpg" width="100%" /-->
			<div class="specialtiesBanner" style="background: url(<?php echo get_template_directory_uri();?>/images/Spec_img.jpg); " ></div>
			<figcaption id="specialty">
				<h1>Product Study</h1>
				<p>Once our team received the brief from our clientele, we'll perform an overview analyzes towards every possibilities and scenarios by applying our company's core principles of cost effectiveness, efficiency and high performance.</p>
			</figcaption> 
	</div>

	<div class="responsive-container">    
		<div class="content-container">
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
						<div class="spctLeftSection">
								<img src="<?php echo get_template_directory_uri();?>/images/Customize_02.jpg" width="100%" />
								<h3>Design & Customization</h3>
								<p>We customize a fully automated and functional machine vision system, from design to integration for each and every of the components. We have our own custom design for every standard vision system, yet we still provide customization to client's requirement. By the skills that came from years of experience, our team are trained for excel in craftsmanship.</p>
						</div>
						<div class="spctRightSection">
								<img src="<?php echo get_template_directory_uri();?>/images/Testing-03.jpg" width="100%" />
								<h3>Installation & Testing</h3>
								<p>Lastly, simulations of processes are created to perform an overall test onto the newly developed visions system. This is to ensure the machine visions are fully tested and scaled towards traceability, measurement, inspection and quality control needs before installation happens on site.</p>
						</div>
				</div><!-- #content -->
			</div><!-- #primary -->
		</div>
	</div>
				<div id="machineVision" class="fullWidth">
						<h3>Machine Vision made simple</h3>
						<p>Our machine vision software is specially designed to perform in high-speed environment. A custom algorithm for simple to sophisticated vision inspection, yet able to produce high accuracy results. Hence, it came with an intuitive user interface design which made the deployment of the software easier and user-friendly.</p>
						<img id="machineMon" src="<?php echo get_template_directory_uri();?>/images/laptop-thumb.png" width="100%" />
				</div>
				<div id="afterSupport" class="fullWidth">
						<h3>After Support</h3>
						<span>Our promises to customers are not just the product but services too. Each of our support technicians are well trained in order to provide an efficient and value-added maintenance to our clientele. We are passionately committed to our clientele for a long-term partner relationship, working side by side to achieve outstanding and satisfactory results.</span>
						<div class="afterSupportBG" style="background: url(<?php echo get_template_directory_uri();?>/images/support-bg.jpg)" ></div>
				</div>
<?php get_footer(); ?>

<script>
var $elem = jQuery('#machineMon');

var waypoint = new Waypoint({
  element: document.getElementById('machineMon'),
  handler: function() {
    $elem.addClass('start')
  },
		exit: function () {
				$elem.removeClass('start')
		}, offset: 'bottom-in-view'
})
</script>
