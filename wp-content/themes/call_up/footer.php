<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Call_Up
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

			
		<div class="site-footer-top">
			<div class="inner-container">
				<div class="site-footer-top-title">
					Follow Us
				</div>
				<div class="site-footer-top-socials">
					<a class="site-footer-top-socials-1" href="#"></a>
					<a class="site-footer-top-socials-2" href="#"></a>
					<a class="site-footer-top-socials-3" href="#"></a>
					<a class="site-footer-top-socials-4" href="#"></a>
					<a class="site-footer-top-socials-5" href="#"></a>
				</div>
			</div>
		</div>

		<div class="site-footer-middle">
			<div class="inner-container">
				<div class="footer-middle-left">
					<div class="footer-middle-title">
						<h2>Always know who's calling</h2>
					</div>
					<div class="footer-middle-text">
						<p>
							Lorem Ipsum is simply dummy text of the
							printing and typesetting industry. Lorem
							Ipsum has been the industry's standard
							dummy text.
						</p>
					</div>
					<a href="#" class="google-play-button"></a>
				</div>
				<div class="footer-middle-right">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/footer_cta_banner_pic.png" alt="">
				</div>
			</div>
		</div>

		<div class="site-footer-bottom">
			
			<div class="inner-container site-footer-bottom-inner">
				
				<div class="footer-bottom-left cf">
					<?php dynamic_sidebar('footer-1')?>
					<?php dynamic_sidebar('footer-2')?>
				</div>
				<div class="footer-bottom-right">
					<div class="footer-bottom-right-top cf">
						<h2>FOLLOW US</h2>
						<div class="site-footer-bottom-socials">
							<a class="site-footer-bottom-socials-1" href="#"></a>
							<a class="site-footer-bottom-socials-2" href="#"></a>
							<a class="site-footer-bottom-socials-3" href="#"></a>
							<a class="site-footer-bottom-socials-4" href="#"></a>
							<a class="site-footer-bottom-socials-5" href="#"></a>
						</div>
					</div>
					<div class="footer-bottom-right-bottom">
						<div class="footer-copyright">&copy;2015 CallApp.</div>
					</div>

				</div>
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<a href="#page" class="back-to-top"></a>

<?php wp_footer(); ?>

</body>
</html>
