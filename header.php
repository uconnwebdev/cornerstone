<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 */

$secondary = get_option( 'parentSiteTitle','');
$secondarylink = get_option( 'parentSiteLink','');
//$nav1 = get_theme_mod( 'navoption1','textnav');
//$nav2 = get_theme_mod( 'navoption2','with-drop');

?>
<!DOCTYPE html>
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
<?php if(function_exists('uconn_banner_hook')){uconn_banner_hook();}?>
<div id="page" class="hfeed site">
	<?php 
		$headerImg = get_header_image();
		
	?>
	<header id="masthead" class="site-header container <?php if ($headerImg != ''){echo 'header-image';} ?>" role="banner">
			<?php if ($headerImg != ''){ echo '<div id="header-image-wrap"><img src="' . get_header_image() . '" height="' . get_custom_header()->height . '" width="' . get_custom_header()->width . '" id="header-image" alt="Decorative header image of '. get_bloginfo('name') .'" /></div> ';}?>
			<div class="site-branding hidden-xs">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>
						" rel="home">
						<?php bloginfo( 'name' ); ?></a>
						<?php
				            if(strlen($secondary) > 0 && strlen($secondarylink) > 0){
								if(substr($secondarylink,0,4) != 'http'){
									$secondarylink = 'http://'.$secondarylink;
								}
				                echo '<a href="'.$secondarylink.'">'.$secondary.'</a>';
				            }
				        ?>
				</h1>
				<h2 class="site-description">
					<?php bloginfo( 'description' ); ?></h2>
			</div>

			<nav id="site-navigation" class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
						<span class="sr-only">Toggle navigation</span>
						<span class="menu-icon">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</span>
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
			</nav>
			<!-- #site-navigation -->	
	</header>
	<!-- #masthead -->	

	<div id="content" class="container site-content">
