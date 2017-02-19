<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<script src="https://use.fontawesome.com/1679034438.js"></script>
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div>
				<!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation reverse-navigation">
				<div class="container">
					<div class="logo">
						<a href="<?php  echo esc_url( home_url( '/' ) ); ?>"><h1 class="header-logo" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg) no-repeat; background-size: contain">Inhabitent Logo</h1></a>
					</div>
					<div class="right-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', ) ); ?>
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					</div>
				</div>
			</nav><!-- #site-navigation -->
</header><!-- #masthead -->
<div id="content" class="site-content">