<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Call_Up
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'call_up' ); ?></a>

	<header id="masthead" class="site-header site-header-blog" role="banner">

		<div class="site-header-inner inner-container">

			<div class="site-header-left cf">

				<div class="site-logo">
					<a href="/callapp">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-white.png" alt=""/>
					</a>
				</div>

				<div class="site-header-blog-title">CALLAPP BLOG</div>


			</div>

			<div class="site-header-right cf">
				
				<a href="#" class="download-header">DOWNLOAD NOW</a>

				<div class="search-header"></div>

			</div>

		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

