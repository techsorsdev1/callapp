<?php
/**
 * Template Name: Contact
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

			<div class="contact-container inner-block">
				<?php echo do_shortcode('[contact-form-7 id="111" title="Contact form"]'); ?>
			</div>

			<div class="form-sucess-message-wrapper">
				<div class="inner-container form-sucess-message">
					<div class="form-sucess-message-head">Message has sent</div>
					<div class="form-sucess-message-text">
						Thank you, <br>
						We received your message, and someone will return to you as soon as possible
					</div>
					<div class="form-sucess-message-bottom cf">
						<div href="#" class="blue-bd-button form-sucess-message-close">CLOSE</div>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
