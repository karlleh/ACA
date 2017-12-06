<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * The loop that displays posts.
 *
	* KARL 4 Mar 2016: This loop is being used to display Type of Inspections page
 */
?>
	<div class="inspectionParent">
		<article id="post-<?php the_ID(); ?>" class="inspectionBox">
			<h4 class="post-title"><?php echo get_the_title(); ?></h4>
			<?php if ( has_post_thumbnail() ) { ?>
				<div class="featured-img">
					<?php the_post_thumbnail(); ?>
				</div>
				<?php } ?>
					<div class="loopContent">
						<?php the_content(); ?>
					</div>
					<div class="meta">
						<div class="cats">
							<ul>
								<?php
										// Insert post "Tags" here
										$posttags = get_the_tags();
										
										if ($posttags) {
												foreach($posttags as $tag) {
														echo '<li class="tagRow">';
														echo $tag->name . ' ';
														echo '</li>';
												}
										}
								?>
							</ul>
						</div>
					</div>
		</article>
	</div>