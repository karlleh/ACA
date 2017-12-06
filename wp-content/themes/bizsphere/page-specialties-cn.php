<?php
/**
 * The template for Specialty (CN) page
 *
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325.36140677382167!2d100.43421263483103!3d5.311444395800283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac7fc0bb10d79%3A0xfd5823f509f36d23!2s56%2C+Jalan+Industri+Beringin%2C+Taman+Perindustrian+Beringin%2C+14100+Simpang+Ampat%2C+Pulau+Pinang!5e0!3m2!1sen!2smy!4v1459930907899" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	
	
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package BizSphere
 	Template Name: Specialty (CN) Page
 */

get_header(); ?>

	<div class="pageBanner">
			<div class="specialtiesBanner" style="background: url(<?php echo get_template_directory_uri();?>/images/Spec_img.jpg); " ></div>
			<figcaption id="specialty">
				<h1>产品研究</h1>
				<p>一旦我们的团队从我们的客户收到了简报, 我们将运用我们公司的成本效益，效率和高性能核心原则对每一个可能性和方案执行概要分析。</p>
			</figcaption> 
	</div>

	<div class="responsive-container">    
		<div class="content-container">
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
						<div class="spctLeftSection">
								<img src="<?php echo get_template_directory_uri();?>/images/Customize_02.jpg" width="100%" />
								<h3>设计与定制</h3>
								<p>从设计到每一个部件的集成, 我们定制一个完全自动化和功能性机器视觉系统。我们为每一个标准的视觉系统都有自定义设计，但我们仍然提供定制客户的要求。通过从多年的经验, 我们的团队训练出出类拔萃的工艺。</p>
						</div>
						<div class="spctRightSection">
								<img src="<?php echo get_template_directory_uri();?>/images/Testing-03.jpg" width="100%" />
								<h3>安装与测试</h3>
								<p>最后，我们创建模拟流程到新开发的视觉系统以执行整体测试。这是为了保证机器在现场安装之前得到全面测试, 拥有可追溯性, 达到测量检测和质量控制的需求。</p>
						</div>
				</div><!-- #content -->
			</div><!-- #primary -->
		</div>
	</div>
				<div id="machineVision" class="fullWidth">
						<h3>机器视觉变得简单</h3>
						<p>我们的机器视觉软件专门在高速环境中进行设计。一个自定义算法进行简单到复杂的视觉检测，然而能够生产高精度的结果。因此，它有一个直观的用户界面设计使软件更友好, 更容易给用户使用。</p>
						<img id="machineMon" src="<?php echo get_template_directory_uri();?>/images/laptop-thumb.png" width="100%" />
				</div>
				<div id="afterSupport" class="fullWidth">
						<h3>支持之后</h3>
						<span>我们对客户的承诺是不只是产品还有服务。我们的每一个技术支持人员都训练有素, 为我们的客户提供一个高效增值的维护服务。我们热切地承诺我们的客户长期的合作伙伴关系，并肩工作，实现优秀且令人满意的结果。</span>
						<div class="afterSupportBG" style="background: url(<?php echo get_template_directory_uri();?>/images/support-bg.jpg)" ></div>
				</div>
<?php get_footer('cn'); ?>

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
