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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">



		<?php wp_head(); ?>
		</head>

		<body <?php body_class(); ?>>

		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<!-- <h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
					<!-- <p class="site-description"><?php bloginfo( 'description' ); ?></p> -->
				</div> <!-- .site-branding -->

				<div <?php $banner = new camp_banner();?> >
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<div id="top-nav">
								<div onClick="parent.location='<?php echo home_url( '/' ); ?>'" alt="Logo Of Inhabitent" class="logo-img <?php $banner->logo_options() ?>"><?php dynamic_sidebar('header-nav-logo')?></div>
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							</div>
					</nav><!-- #site-navigation -->
					<div id="banner-center-display"></div>
				</div>

			</header><!-- #masthead -->

			<div id="content" class="site-content">
