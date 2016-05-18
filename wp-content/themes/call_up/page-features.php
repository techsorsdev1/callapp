<?php
/**
 * Template Name: Features
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

			<div class="features-container">

				<div class="features-block">
					<div class="inner-container">
						<div class="features-content">
							<div class="features-title blue-title">
								Make your phone Smarter
							</div>
							<div class="features-text">
								<p>CallApp is the №1 Caller-ID in the US & the world; CallApp identifies a billion unknown callers & blocks spam, scam calls. “One Ring Scam” happens when a scammer calls you & immediately hang up. If you call back this missed call number — you are charged a high fee for calling a premium number.</p>
							</div>
							<a href="#" class="google-play-button"></a>
						</div>
						<div class="features-image">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/feature_04.png" alt=""/>
						</div>
					</div>
				</div>

				<div class="features-block features-block-gray">
					<div class="inner-container">
						<div class="features-content">
							<div class="features-title blue-title">
								Social Dialer
							</div>
							<div class="features-text">
								<p>CallApp is the №1 Caller-ID in the US & the world; CallApp identifies a billion unknown callers & blocks spam, scam calls. “One Ring Scam” happens when a scammer calls you & immediately hang up. If you call back this missed call number — you are charged a high fee for calling a premium number.</p>
							</div>
						</div>
						<div class="features-image">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/feature_04.png" alt=""/>
						</div>
					</div>
				</div>

				<div class="features-block">
					<div class="inner-container">
						<div class="features-content">
							<div class="features-title blue-title">
								Social Dialer
							</div>
							<div class="features-text">
								<p>CallApp is the №1 Caller-ID in the US & the world; CallApp identifies a billion unknown callers & blocks spam, scam calls. “One Ring Scam” happens when a scammer calls you & immediately hang up. If you call back this missed call number — you are charged a high fee for calling a premium number.</p>
							</div>
						</div>
						<div class="features-image">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/feature_04.png" alt=""/>
						</div>
					</div>
				</div>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
