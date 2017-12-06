<?php
/**
 * The template for Design & Solutions page
	*
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package BizSphere
 	Template Name: Design & Solutions Page
 */
get_header();

$templateDir = get_template_directory_uri();
?>
				<div id="content" class="fullwidth black">
					<div id="designContainer" >
						<div id="camera">
							<div class="leftText">
								<h3>
									Hardware Optimization
								</h3>
								<p>
									ACA team always source for the finest and most suitable lenses, camera and optical accessories to develop the best
									vision system for optimal measurement and inspection. Through hardware optimization, the best images are
									acquired and the defect can be easily identified at the region of interest.
								</p>
							</div>
							<div class="midSection">
								<img id="cameraImg" src="<?php echo $templateDir ?>/images/Lens.png" width="100%" />
							</div>
							<div class="rightText">
								<p>
									The suitable hardware selection meet all pricing and performance requirements:
									<ol>
										<li>Field of view (FOV)</li>
										<li>Camera and pixel resolution</li>
										<li>Result accuracy and repeatability</li>
										<li>Performance speed</li>
										<li>Spacing constraint</li>
									</ul>
								</p>
							</div>
						</div>
						
						<div id="mirrors">
							<div id="bss" class="bss-slides">
								<figure class="bssfig">
									<div class="ledContainer">
										<img class="ledlight1" src="<?php echo $templateDir ?>/images/blank.gif" alt="Red Circle Light"></img>
										<!--div class="ledlight" style="background: no-repeat center top url(<?php echo $templateDir ?>/images/Lights-03.jpg)" ></div-->
											<h3>Illuminator / Light Source</h3>
											<p>Understanding the quality and appropriateness of lighting are critical aspects of an inspection environment. To provide a foundation for an effective vision lighting solution it's by understanding of illumination types, techniques, geometry, filtering, sensor characteristics, and color to create a robust and timely vision inspection.</p>
									</div>
								</figure>
								<figure class="bssfig">
									<div class="ledContainer">
										<img class="ledlight2" src="<?php echo $templateDir ?>/images/blank.gif" alt="Blue Light" ></img>
										<!--div class="ledlight" style="background: no-repeat center top url(<?php echo $templateDir ?>/images/Lights-03.jpg)" ></div-->
											<h3>Illuminator / Light Source</h3>
											<p>Understanding the quality and appropriateness of lighting are critical aspects of an inspection environment. To provide a foundation for an effective vision lighting solution it's by understanding of illumination types, techniques, geometry, filtering, sensor characteristics, and color to create a robust and timely vision inspection.</p>
									</div>
								</figure>
								<figure class="bssfig">
									<div class="ledContainer">
										<img class="ledlight3" src="<?php echo $templateDir ?>/images/blank.gif" alt="Red Square Light" ></img>
										<!--div class="ledlight" style="background: no-repeat center top url(<?php echo $templateDir ?>/images/Lights-03.jpg)" ></div-->
											<h3>Illuminator / Light Source</h3>
											<p>Understanding the quality and appropriateness of lighting are critical aspects of an inspection environment. To provide a foundation for an effective vision lighting solution it's by understanding of illumination types, techniques, geometry, filtering, sensor characteristics, and color to create a robust and timely vision inspection.</p>
									</div>
								</figure>
								<div id="mirrorsNavigation">
									<div class="bss-prev" ></div>
									<div class="bss-next" ></div>
								</div>
							</div>
						</div>
						
						<div id="mirrorDesignText">
							<div id="mirror2dLeft">
							</div>
							<div id="mirror2dRight">
								<h3>Reflector</h3>
								<p>The design and application of a reflector it's to allow a single vision system to perform 3D or multiple side inspection.
								By maximizing the potential of a single system to acquire full inspection aspect from all different perspective. Followed
								by simulation and analysis of image processing and algorithm in order to compute accurate output result. It is a cost
								effective solution prior to space constraint cases.</p>
							</div>
						</div>
						
					</div>
						<div class="msAnimatedBG">
							<div id="madeSimple">
								<div class="rightSection">
									<!--img id="madeSimpleImg" src="<?php echo $templateDir ?>/images/laptop.png" width="100%" /-->
									<!--img id="madeSimpleImg" src="<?php echo $templateDir ?>/images/Computer-Animated.gif" width="100%" /-->
								</div>
								<div class="madeSimpleLeftText">
									<h3>Machine Vision Application</h3>
									<p>
										Our machine vision software is specially designed to perform in high-speed environment. A custom algorithm for simple to sophisticated vision inspection, yet able to produce high accuracy results. Hence, it came with an intuitive user interface design which made the deployment of the software easier and user-friendly. 
									</p>
									<ul>
										<li>Flexible communication options</li>
										<li>Administration control and data logging</li>
										<li>Emulator for offline application development</li>
										<li>Fully automated inspection system</li>
										<li>Support multiple package type</li>
										<li>In built calibration</li>
										<li>High accuracy and repeatability</li>
										<li>Ability to provide SPC report, GR&R report, result data, mapping and summary</li>
									</ul>
								</div>
							</div>
						</div>
				</div><!-- #content -->
				
<?php get_footer(); ?>

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
