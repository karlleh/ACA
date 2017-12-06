<?php
/**
 * The template for Contact page
	*
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package BizSphere
 	Template Name: Contact Page
 */

get_header();

$templateDir = get_template_directory_uri();
?>

<div id="google-maps">
		<!--div class="overlay"></div-->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.6864412818086!2d100.43207031486203!3d5.311523337536864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac7fc0ba59d2d%3A0x400a5e6d5f0e7d8e!2sACA+Vision+Technology+Sdn.+Bhd.!5e0!3m2!1sen!2smy!4v1459931091017" width="1920" height="379" frameborder="0" scrolling="no" style="border:0" allowfullscreen></iframe>
</div>

	<div class="responsive-container">    
		<div class="content-container">
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
						<div id="contactPage">
								<div class="cntLeftSection">
										<div id="contactPageInfo">
												<div class="contactLeft">
																<img src="<?php echo $templateDir ?>/images/Bubble.png" />
												</div>
												<div class="contactRight">
																<p>Talk to Us<br/>
																<span class="contactBlue">Tel&nbsp;&nbsp;+604 501 1010
																<br/>Fax&nbsp;&nbsp;+604 501 1011</span></p>
												</div>
		
												<div class="contactLeft" style="display: none;">
																<img src="<?php echo $templateDir ?>/images/Calendar.png" />
												</div>
												<div class="contactRight" style="display: none;">
																<p>Operating Hours<br/><span class="contactBlue">0900-1800 (Mon - Friday)</span></p>
												</div>
												
												<div class="contactLeft">
																<img src="<?php echo $templateDir ?>/images/Mail.png" />
												</div>
												<div class="contactRight">
																<p>Email Us<br/><span class="contactBlue"><a href="mailto:enquiry@acavision.com.my">enquiry@acavision.com.my</a></span></p>
												</div>
										</div>
								</div>
								<div class="cntRightSection">
										<b>Enquiry Form</b>
										<p>Want to know more about our company or services provided? We are pleased to talk to you.
Kindly fill up the following form and one of our experts will attend your inquiry shortly. Thank you
														<br/><span class="colorRed">(*Required field)</span></p>
										<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
								</div>
						</div>
				</div><!-- #content -->
			</div><!-- #primary -->
		</div>
	</div>
	
	<script>
				jQuery('#google-maps').click(function () {
							jQuery('.maps iframe').css("pointer-events", "auto");
				});	
	</script>

	
<?php get_footer(); ?>
