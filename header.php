<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cornerstone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="site-branding hidden-xs">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>
						" rel="home">
						<?php bloginfo( 'name' ); ?></a>
				</h1>
				<h2 class="site-description">
					<?php bloginfo( 'description' ); ?></h2>
			</div>

			<nav id="site-navigation" class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="menu-label">Menu</span>
						</button>
						<a class="navbar-brand visible-xs" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
					</div>
					<a class="skip-link screen-reader-text sr-only" href="#content">
						<?php _e( 'Skip to content', 'cs' ); ?></a>
					<div class="collapse navbar-collapse" id="primary-nav">
						<?php 
							wp_nav_menu( 
							array( 
								'menu' => 'primary', /* menu name */
								'menu_class' => 'nav navbar-nav'.$nav1.' '.$nav2,
								'theme_location' => 'primary', /* where in the theme it's assigned */
								'container' => false, /* container class */
								'fallback_cb' => 'hale_main_nav_fallback',
								'items_wrap' =>	'<ul id="%1$s" class="%2$s"><li><a href="'.home_url().'">Home</a></li>%3$s</ul>',
								'walker' => new Bootstrap_Nav_Walker()/*,
								'with_search' => true*/
							)
						);
						?>
					</div>
				</div>
			</nav>
			<!-- #site-navigation -->	
		</div>
	</header>
	<!-- #masthead -->	

	<div id="content" class="site-content">
