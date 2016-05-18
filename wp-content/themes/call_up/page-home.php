<?php
/**
 * Template Name: Home
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

get_header('home'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="homepage-wrapper">
				<div class="homepage-item">
					<div class="homepage-item-inner inner-container">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/feature_01.png" class="homepage-item-image">
						<div class="homepage-item-content">
							<h2 class="homepage-item-title">
								Caller ID
							</h2>
							<div class="homepage-item-text">
								<p>Identify a billion unknown callers (people &amp; businesses)
								with info &amp; pictures</p>
								<p>
									<a class="google-play-button home_gpbutton" href="#"></a>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="homepage-item homepage-item-gray">
					<div class="homepage-item-inner inner-container">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/feature_02.png" class="homepage-item-image">
						<div class="homepage-item-content">
							<h2 class="homepage-item-title">
								Social Dialer
							</h2>
							<div class="homepage-item-text">
								<p>Sync contacts &amp; keep your contact card up-to-date
									with updated contacts picture &amp; social info</p>
							</div>
						</div>
					</div>
				</div>

				<div class="homepage-item">
					<div class="homepage-item-inner inner-container">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/feature_03.png" class="homepage-item-image">
						<div class="homepage-item-content">
							<h2 class="homepage-item-title">
								Block List
							</h2>
							<div class="homepage-item-text">
								<p>Lorem Ipsum is simply dummy text of the printing
									and typesetting industry. Lorem Ipsum has been
									the industry's standard dummy text.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="homepage-learn-more">
					<div class="inner-container"><a href="#">LEARN MORE</a></div>
				</div>

				<div class="homepage-banner">
					<div class="inner-container">
						<h2 class="homepage-banner-title">
							Always know who's calling
						</h2>
						<div class="homepage-banner-text">
							<p>Lorem Ipsum is simply dummy text of the
							printing and typesetting industry. Lorem
							Ipsum has been the industry's standard
							dummy text.</p>
						</div>
						<div class="homepage-banner-gp">
							<a href="#"></a>
						</div>
					</div>
				</div>

				<div class="press press-home press-2blocks">
					<div class="inner-container">

						<div class="press-head">
							From the press
						</div>

						<div class="press-list cf">

							<?php 

							// WP_Query arguments
							$args = array (
								'cat'                    => '5',
								'posts_per_page'         => '2',
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
												<a href="<?php the_permalink(); ?>">Read More ›</a>
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

						<a href="#" class="blue-bd-button press-all">View all Stories</a>

					</div>
				</div>


			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
