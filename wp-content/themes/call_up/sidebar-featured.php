<aside class="featured-posts">
	<h2 class="featured-posts-head">
		FEATURED POSTS
	</h2>
	<div class="featured-posts-list">

		<?php 

		// WP_Query arguments
		$args = array (
			'cat'                    => '6',
			'posts_per_page'         => '6',
			'order'                  => 'ASC',
		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();  ?>

				<div class="featured-posts-item">
					<h3 class="featured-posts-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h3>
					<div class="featured-posts-text">
						<?php echo substr(get_the_excerpt(), 0,65); ?>
						... <a class="featured-posts-read-more" href="<?php the_permalink(); ?>">Read More ›</a>
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
</aside>