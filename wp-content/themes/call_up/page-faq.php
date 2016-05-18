<?php
/**
 * Template Name: FAQ
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

			<div class="faq-container inner-block">

				<h2 class="blue-title">
					FAQ
				</h2>

				<div class="top-links">
					<ul>
						<li><a href="#">What is CallApp?</a></li>
						<li><a href="#">Is CallApp Free?</a></li>
						<li><a href="#">How does CallApp Caller ID work?</a></li>
						<li><a href="#">Accept a Facebook request?</a></li>
					</ul>
				</div>

			</div>

			<div class="inner-container">
				<div class="blue-accordion">
					<div class="blue-accordion-item">
						<div class="blue-accordion-title blue-accordion-title-open">
							How To...
						</div>
						<div class="blue-accordion-content">

							<div class="blue-accordion-inner">
								<div class="blue-accordion-inner-title">
									Contacts
								</div>
								<div class="blue-accordion-inner-links">
									<ul>
										<li>
											<a href="#">Correct wrong matching of information? How can this be solved?</a>
										</li>
										<li>
											<a href="#">Interact with a contact?</a>
										</li>
										<li>
											<a href="#">Access CallApp’s contact details screen?</a>
										</li>
										<li>
											<a href="#">Add a contact from the call screen?</a>
										</li>
										<li>
											<a href="#">Edit / delete / rename a contact?</a>
										</li>
										<li>
											<a href="#">Change the social network linked to a contact?</a>
										</li>
										<li>
											<a href="#">Provide  pictures of my contacts and more accurate information?</a>
										</li>
										<li>
											<a href="#">Use the contact details screen?</a>
										</li>
										<li>
											<a href="#">Click on a contact from the contact list without calling him?</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="blue-accordion-inner">
								<div class="blue-accordion-inner-title">
									Block
								</div>
								<div class="blue-accordion-inner-links">
									<ul>
										<li>
											<a href="#">Block a number?</a>
										</li>
										<li>
											<a href="#">Unblock a number?</a>
										</li>
										<li>
											<a href="#">Protects from “one ring scam”?</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>

					<div class="blue-accordion-item">
						<div class="blue-accordion-title">
							Technical
						</div>
						<div class="blue-accordion-content">

							<div class="blue-accordion-inner">
								<div class="blue-accordion-inner-title">
									Contacts
								</div>
								<div class="blue-accordion-inner-links">
									<ul>
										<li>
											<a href="#">Correct wrong matching of information? How can this be solved?</a>
										</li>
										<li>
											<a href="#">Interact with a contact?</a>
										</li>
										<li>
											<a href="#">Access CallApp’s contact details screen?</a>
										</li>
										<li>
											<a href="#">Add a contact from the call screen?</a>
										</li>
										<li>
											<a href="#">Edit / delete / rename a contact?</a>
										</li>
										<li>
											<a href="#">Change the social network linked to a contact?</a>
										</li>
										<li>
											<a href="#">Provide  pictures of my contacts and more accurate information?</a>
										</li>
										<li>
											<a href="#">Use the contact details screen?</a>
										</li>
										<li>
											<a href="#">Click on a contact from the contact list without calling him?</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="blue-accordion-inner">
								<div class="blue-accordion-inner-title">
									Block
								</div>
								<div class="blue-accordion-inner-links">
									<ul>
										<li>
											<a href="#">Block a number?</a>
										</li>
										<li>
											<a href="#">Unblock a number?</a>
										</li>
										<li>
											<a href="#">Protects from “one ring scam”?</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<div class="blue-accordion-item">
						<div class="blue-accordion-title">
							Privacy
						</div>
						<div class="blue-accordion-content">

							<div class="blue-accordion-inner">
								<div class="blue-accordion-inner-title">
									Contacts
								</div>
								<div class="blue-accordion-inner-links">
									<ul>
										<li>
											<a href="#">Correct wrong matching of information? How can this be solved?</a>
										</li>
										<li>
											<a href="#">Interact with a contact?</a>
										</li>
										<li>
											<a href="#">Access CallApp’s contact details screen?</a>
										</li>
										<li>
											<a href="#">Add a contact from the call screen?</a>
										</li>
										<li>
											<a href="#">Edit / delete / rename a contact?</a>
										</li>
										<li>
											<a href="#">Change the social network linked to a contact?</a>
										</li>
										<li>
											<a href="#">Provide  pictures of my contacts and more accurate information?</a>
										</li>
										<li>
											<a href="#">Use the contact details screen?</a>
										</li>
										<li>
											<a href="#">Click on a contact from the contact list without calling him?</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="blue-accordion-inner">
								<div class="blue-accordion-inner-title">
									Block
								</div>
								<div class="blue-accordion-inner-links">
									<ul>
										<li>
											<a href="#">Block a number?</a>
										</li>
										<li>
											<a href="#">Unblock a number?</a>
										</li>
										<li>
											<a href="#">Protects from “one ring scam”?</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<div class="blue-accordion-item">
						<div class="blue-accordion-title">
							Other
						</div>
						<div class="blue-accordion-content">

							<div class="blue-accordion-inner">
								<div class="blue-accordion-inner-title">
									Contacts
								</div>
								<div class="blue-accordion-inner-links">
									<ul>
										<li>
											<a href="#">Correct wrong matching of information? How can this be solved?</a>
										</li>
										<li>
											<a href="#">Interact with a contact?</a>
										</li>
										<li>
											<a href="#">Access CallApp’s contact details screen?</a>
										</li>
										<li>
											<a href="#">Add a contact from the call screen?</a>
										</li>
										<li>
											<a href="#">Edit / delete / rename a contact?</a>
										</li>
										<li>
											<a href="#">Change the social network linked to a contact?</a>
										</li>
										<li>
											<a href="#">Provide  pictures of my contacts and more accurate information?</a>
										</li>
										<li>
											<a href="#">Use the contact details screen?</a>
										</li>
										<li>
											<a href="#">Click on a contact from the contact list without calling him?</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="blue-accordion-inner">
								<div class="blue-accordion-inner-title">
									Block
								</div>
								<div class="blue-accordion-inner-links">
									<ul>
										<li>
											<a href="#">Block a number?</a>
										</li>
										<li>
											<a href="#">Unblock a number?</a>
										</li>
										<li>
											<a href="#">Protects from “one ring scam”?</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>


<?php
$post_object = get_field('postobject');
if($post_object) :
    $post = $post_object;
    // Overwrite $post
    setup_postdata( $post ); ?>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php
    // Reset $post so the rest of the page works
    wp_reset_postdata();
endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
