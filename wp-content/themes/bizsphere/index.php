<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package BizSphere
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php
			if (pll_current_language() == 'en') {
				if ( have_posts() ) : ?>
							<header class="page-header">
								<h1 class="page-title">
									<?php
										if ( is_category() ) :
											single_cat_title();
				
										elseif ( is_tag() ) :
											single_tag_title();
				
										elseif ( is_author() ) :
											the_post();
											printf( __( 'Author: %s', 'BizSphere' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
											rewind_posts();
				
										elseif ( is_day() ) :
											printf( __( 'Day: %s', 'BizSphere' ), '<span>' . get_the_date() . '</span>' );
				
										elseif ( is_month() ) :
											printf( __( 'Month: %s', 'BizSphere' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
				
										elseif ( is_year() ) :
											printf( __( 'Year: %s', 'BizSphere' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
				
										elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
											_e( 'Asides', 'BizSphere' );
				
										elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
											_e( 'Images', 'BizSphere');
				
										elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
											_e( 'Videos', 'BizSphere' );
				
										elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
											_e( 'Quotes', 'BizSphere' );
				
										elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
											_e( 'Links', 'BizSphere' );
				
										else :
											_e( 'Archives', 'BizSphere' );
				
										endif;
									?>
								</h1>
								<?php
									// Show an optional term description.
									$term_description = term_description();
									if ( ! empty( $term_description ) ) :
										printf( '<div class="taxonomy-description">%s</div>', $term_description );
									endif;
								?>
							</header><!-- .page-header -->
							<?php
									/* Start the Loop */ 
									while ( have_posts() ) : the_post();
									get_template_part( 'content', get_post_format() );
								?>
				
							<?php endwhile; ?>
				
							<?php BizSphere_content_nav( 'nav-below' ); ?>
				
						<?php else : ?>
				
							<?php get_template_part( 'no-results', 'archive' ); ?>
				
						<?php endif; ?>
				
						</div><!-- #content -->
					</section><!-- #primary -->
			<?php
			} else {
								if ( have_posts() ) : ?>
							<header class="page-header">
								<h1 class="page-title">
									<?php
										if ( is_category() ) :
											single_cat_title();
				
										elseif ( is_tag() ) :
											single_tag_title();
				
										elseif ( is_author() ) :
											the_post();
											printf( __( 'Author: %s', 'BizSphere' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
											rewind_posts();
				
										elseif ( is_day() ) :
											printf( __( 'Day: %s', 'BizSphere' ), '<span>' . get_the_date() . '</span>' );
				
										elseif ( is_month() ) :
											printf( __( 'Month: %s', 'BizSphere' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
				
										elseif ( is_year() ) :
											printf( __( 'Year: %s', 'BizSphere' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
				
										elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
											_e( 'Asides', 'BizSphere' );
				
										elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
											_e( 'Images', 'BizSphere');
				
										elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
											_e( 'Videos', 'BizSphere' );
				
										elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
											_e( 'Quotes', 'BizSphere' );
				
										elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
											_e( 'Links', 'BizSphere' );
				
										else :
											_e( 'Archives', 'BizSphere' );
				
										endif;
									?>
								</h1>
								<?php
									// Show an optional term description.
									$term_description = term_description();
									if ( ! empty( $term_description ) ) :
										printf( '<div class="taxonomy-description">%s</div>', $term_description );
									endif;
								?>
							</header><!-- .page-header -->
							<?php
									/* Start the Loop */ 
									while ( have_posts() ) : the_post();
									get_template_part( 'content-cn', get_post_format() );
								?>
				
							<?php endwhile; ?>
				
							<?php BizSphere_content_nav( 'nav-below' ); ?>
				
						<?php else : ?>
				
							<?php get_template_part( 'no-results', 'archive' ); ?>
				
						<?php endif; ?>
				
						</div><!-- #content -->
					</section><!-- #primary -->
			<?php } ?>
				

<?php get_sidebar(); ?>
<?php
	if (pll_current_language() == 'en') {
		get_footer();
	}
	else {
		get_footer('cn');
	}
?>