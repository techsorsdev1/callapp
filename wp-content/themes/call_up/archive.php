<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Call_Up
 */

get_header('blog'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

		<div class="two-colums-arch inner-block cf">
			<div class="two-colums-arch-left">

				<header class="page-header inner-block">
					<?php
						echo '<h1 class="page-title">';single_cat_title();echo '</h1>';
					?>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'archive' );

				endwhile;

				the_posts_navigation( array(
					'next_text' => 'PREVIOUS POSTS ›',
					'prev_text' => '‹ OLDER POSTS',
				) );

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</div>
			<div class="two-colums-arch-right">
				<?php get_sidebar( 'featured' ); ?>
				<?php dynamic_sidebar('categories')?>
			</div>
		</div>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
