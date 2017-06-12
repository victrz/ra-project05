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
		<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
			<header id="masthead" class="site-header" role="banner">
				<div <?php $banner = new camp_banner();?> class="flex flex-col width100">
					<nav id="top-nav" class="uppercase font-secondary padding10 flex width100 flex-just-between flex-align-items-center main-navigation" role="navigation">
						<div>
							<a href="<?php echo site_url(); ?>" alt="Logo Of Inhabitent" class="logo-img <?php $banner->logo_options() ?>"><?php dynamic_sidebar('header-nav-logo')?></a>
						</div>
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?> </button>
						<div class="flex">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							<div id="nav-search" class="flex">
								<?php get_search_form(); ?>
							</div>
							<div class="fa fa-search flex flex-align-items-center" id="search-icon" aria-hidden="true"></div>
						</div>
					</nav><!-- #site-navigation -->
					<div class="banner-overlay color-primary flex flex-just-center flex-grow flex-align-items-center "><?php $banner->overlay_options(); ?></div>
				</div>
			</header><!-- #masthead -->
			<div id="content" class="site-content">
