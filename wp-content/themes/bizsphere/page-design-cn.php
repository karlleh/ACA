<?php
/**
 * The template for Design & Solutions (CN) page
	*
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package BizSphere
 	Template Name: Design & Solutions (CN) Page
 */
get_header();

$templateDir = get_template_directory_uri();
?>
				<div id="content" class="fullwidth black">
					<div id="designContainer" >
						<div id="camera">
							<div class="leftText">
								<h3>
									硬件优化
								</h3>
								<p>
									ACA团队始终寻找最优秀和最合适的镜头，镜头及光学配件开发出最好的视觉系统进行最佳的测量和检测。通过硬件优化, 最好图像被获取, 在目标区域的缺陷可以容易地识别。
								</p>
							</div>
							<div class="midSection">
								<img id="cameraImg" src="<?php echo $templateDir ?>/images/Lens.png" width="100%" />
							</div>
							<div class="rightText">
								<p>
									合适的硬件选择满足所有的价格和性能要求：
									<ol>
										<li>视野范围(FOV)</li>
										<li>相机和像素分辨率</li>
										<li>结果的准确性和重复性</li>
										<li>性能速度</li>
										<li>间隔限制</li>
									</ul>
								</p>
							</div>
						</div>
						
						<div id="mirrors">
							<div id="bss" class="bss-slides">
								<figure class="bssfig">
									<div class="ledContainer">
										<img class="ledlight1Cn" src="<?php echo $templateDir ?>/images/blank.gif" alt="圆形红色照明灯"></img>
											<h3>照明和光源使用</h3>
											<p>了解照明质量和适当的检查环境的非常重要的关键。为了提供一个有效的视觉照明解决方案基础来创建一个强大的和及时的视觉检测, 我们需要通过了解明类型，技术，几何，滤波，传感器特性和色彩方面。</p>
									</div>
								</figure>
								<figure class="bssfig">
									<div class="ledContainer">
										<img class="ledlight2Cn" src="<?php echo $templateDir ?>/images/blank.gif" alt="正方形蓝色照明" ></img>
											<h3>照明和光源使用</h3>
											<p>了解照明质量和适当的检查环境的非常重要的关键。为了提供一个有效的视觉照明解决方案基础来创建一个强大的和及时的视觉检测, 我们需要通过了解明类型，技术，几何，滤波，传感器特性和色彩方面。</p>
									</div>
								</figure>
								<figure class="bssfig">
									<div class="ledContainer">
										<img class="ledlight3Cn" src="<?php echo $templateDir ?>/images/blank.gif" alt="正方形红色照明" ></img>
										<h3>照明和光源使用</h3>
											<p>了解照明质量和适当的检查环境的非常重要的关键。为了提供一个有效的视觉照明解决方案基础来创建一个强大的和及时的视觉检测, 我们需要通过了解明类型，技术，几何，滤波，传感器特性和色彩方面。</p>
									</div>
								</figure>
								<div id="mirrorsNavigation">
									<div class="bss-prev" ></div>
									<div class="bss-next" ></div>
								</div>
							</div>
						</div>
						
						<div id="mirrorDesignText">
							<div id="mirror2dLeftCn">
							</div>
							<div id="mirror2dRight">
								<h3>反射器</h3>
								<p>反射器的设计和应用在于允许一个单一的视觉系统执行3D或多个现场检查。通过将单一系统的潜力最大限度地提高以允许各个不同的方面获得全面检查 。其次是模拟和图像处理与算法分析来精确的计算输出成绩。它在空间限制的情况之前具有成本效益。</p>
							</div>
						</div>
						
					</div>
						<div class="msAnimatedBG">
							<div id="madeSimple">
								<div class="rightSection">
								</div>
								<div class="madeSimpleLeftText">
									<h3>机器视觉应用</h3>
									<p>
										我们的机器视觉软件是专门为高速环境而设计。它是一个自定义算法可以给予简单至精良的视觉检测，还能够生产高精度的结果。因此，它具有直观的用户界面设计, 令自制软件更容易, 用户能够更方便使用。
									</p>
									<ul>
										<li>灵活的通信选项</li>
										<li>管理控制和数据记录</li>
										<li>为离线应用开发仿真器</li>
										<li>全自动检测系统</li>
										<li>支持多种封装类型</li>
										<li>内置校准</li>
										<li>高精确度和可重复性</li>
										<li>能够提供SPC报告，GR＆R报告， 数据结果，映射和汇总</li>
									</ul>
								</div>
							</div>
						</div>
				</div><!-- #content -->
				
<?php get_footer('cn'); ?>

<script>
var $elem = jQuery('#cameraImg');

var waypoint = new Waypoint({
  element: document.getElementById('cameraImg'),
  handler: function() {
    $elem.addClass('lensStart')
  },
		exit: function () {
				$elem.removeClass('lensStart')
		}, offset: 'bottom-in-view'
})

		var opts = {
				auto: { speed: 8000, pauseOnHover: true },
				swipe: true
		};
		makeBSS('.bss-slides', opts);
</script>
