<?php
/**
 * Template Name: Company
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

			<div class="company-container inner-block">

				<h2 class="blue-title">
					Meet The Team
				</h2>

				<div class="company-members cf">

					<div class="company-member">
						<div class="company-member-image">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/Amit.png" alt=""/>
						</div>
						<div class="company-member-name">
							Amit On
						</div>
						<div class="company-member-position">
							CEO
						</div>
					</div>

					<div class="company-member">
						<div class="company-member-image">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/Alon.png" alt=""/>
						</div>
						<div class="company-member-name">
							Alon Zimmerman
						</div>
						<div class="company-member-position">
							VP R&amp;D
						</div>
					</div>

					<div class="company-member">
						<div class="company-member-image">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/Liron.png" alt=""/>
						</div>
						<div class="company-member-name">
							Liron Leshem
						</div>
						<div class="company-member-position">
							VP Product
						</div>
					</div>

				</div>
				

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
