<?php
/**
 * Template Name: Media
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Call_Up
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			<div class="press press-media press-3blocks">
				<div class="inner-block">

					<div class="press-head">
						From the press
					</div>

					<div class="press-list cf">

						<?php 

						// WP_Query arguments
						$args = array (
							'cat'                    => '5',
							'posts_per_page'         => '6',
							'order'                  => 'ASC',
						);

						// The Query
						$query = new WP_Query( $args );

						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();  ?>
								<div class="press-item">
									<div class="press-item-top">
										<a href="<?php the_permalink(); ?> " class="press-item-image">
											<?php the_post_thumbnail('full');  ?>
										</a>
										<div class="press-item-date"><?php the_time('j F Y'); ?></div>
									</div>
									<div class="press-item-bottom">
										<div class="press-item-exerpt">
											<?php the_excerpt(); ?>
										</div>
										<div class="press-item-read-more">
											<a href="<?php the_permalink(); ?> ">Read More ›</a>
										</div>
									</div>
								</div>
						<?php 	}
						} else {
							// no posts found
						}

						// Restore original Post Data
						wp_reset_postdata();

						?>

					</div>

					<a href="#" class="blue-bd-button">View all Stories</a>

				</div>
			</div>

			<div class="media-kit-container inner-block">

				<h2 class="blue-title">
					Media Kitt
				</h2>

				<div class="media-gallery">
					<div class="media-gallery-title">
						Screenshots
					</div>
					<div class="media-gallery-list cf">

						<div class="media-gallery-item">
							<a href="#" class="media-gallery-image">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/media-1.png" alt=""/>
							</a>
							<div class="media-gallery-text">
								Lorem
							</div>
						</div>

						<div class="media-gallery-item">
							<a href="#" class="media-gallery-image">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/media-1.png" alt=""/>
							</a>
							<div class="media-gallery-text">
								Callapp Main
							</div>
						</div>

						<div class="media-gallery-item">
							<a href="#" class="media-gallery-image">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/media-1.png" alt=""/>
							</a>
							<div class="media-gallery-text">
								Smart Dialer
							</div>
						</div>

						<div class="media-gallery-item">
							<a href="#" class="media-gallery-image">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/media-1.png" alt=""/>
							</a>
							<div class="media-gallery-text">
								Spammer ID
							</div>
						</div>

						<div class="media-gallery-item">
							<a href="#" class="media-gallery-image">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/media-1.png" alt=""/>
							</a>
							<div class="media-gallery-text">
								Contact card
							</div>
						</div>

						<div class="media-gallery-item">
							<a href="#" class="media-gallery-image">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/media-1.png" alt=""/>
							</a>
							<div class="media-gallery-text">
								Business card
							</div>
						</div>

						<div class="media-gallery-item">
							<a href="#" class="media-gallery-image">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/media-1.png" alt=""/>
							</a>
							<div class="media-gallery-text">
								Birthday card
							</div>
						</div>

					</div>
				</div>

				<div class="media-gallery">
					<div class="media-gallery-title">
						Screenshots
					</div>
					<div class="media-gallery-list cf">

						<div class="media-gallery-item">
							<a href="#" class="media-gallery-image">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/media2-1.png" alt=""/>
							</a>
							<div class="media-gallery-text">
								Logo for Dark Background
							</div>
						</div>

						<div class="media-gallery-item">
							<a href="#" class="media-gallery-image">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/media2-2.png" alt=""/>
							</a>
							<div class="media-gallery-text">
								Logo for white Background
							</div>
						</div>

						<div class="media-gallery-item">
							<a href="#" class="media-gallery-image">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/media2-3.png" alt=""/>
							</a>
							<div class="media-gallery-text">
								App Icon
							</div>
						</div>

					</div>
				</div>

				<a href="#" class="blue-bd-button download-images">Download all Files</a>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
