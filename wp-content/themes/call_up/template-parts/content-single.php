<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Call_Up
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header cf">
		<h2 class="entry-title"><?php the_title() ?></h2>
		<div class="entry-meta">
			<?php the_time('j F Y'); ?>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content() ?>

		<nav class="navigation posts-navigation" role="navigation">
			<div class="nav-links">
				<div class="nav-previous">
					<?php previous_post_link('%link', '‹ Previous Posts', TRUE); ?>
				</div>
				<div class="nav-next">
					<?php next_post_link('%link', 'Next Posts ›', TRUE); ?>
				</div>
			</div>
		</nav>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
