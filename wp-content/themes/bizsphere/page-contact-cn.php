<?php
/**
 * The template for Contact (CN) page
	*
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package BizSphere
 	Template Name: Contact (CN) Page
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
																<p>与我们交谈<br/><span class="contactBlue">联系电话&nbsp;&nbsp;+604 501 1010
																<br/>传真&nbsp;&nbsp;+604 501 1011</span></p>
												</div>
		
												<div class="contactLeft" style="display: none;">
																<img src="<?php echo $templateDir ?>/images/Calendar.png" />
												</div>
												<div class="contactRight" style="display: none;">
																<p>营业时间<br/><span class="contactBlue">0900-1800 (星期一 - 星期五)</span></p>
												</div>
												
												<div class="contactLeft">
																<img src="<?php echo $templateDir ?>/images/Mail.png" />
												</div>
												<div class="contactRight">
																<p>给我们发电子邮件<br/><span class="contactBlue"><a href="mailto:enquiry@acavision.com.my">enquiry@acavision.com.my</a></span></p>
												</div>
										</div>
								</div>
								<div class="cntRightSection">
										<b>查询表格</b>
										<p>想不想知道更多关于我们的公司或提供的服务呢？我们很高兴和你谈论。
													请填写以下表单，我们的专家将在短期内与您联络。 谢谢
														<br/><span class="colorRed">(*必填项目)</span></p>
										<?php echo do_shortcode('[contact-form-7 id="202" title="Contact page form (CN)"]'); ?>
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

<?php get_footer('cn'); ?>