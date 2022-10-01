<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Friends_of_Bedminster_Library
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400
							&family=Nanum+Myeongjo:wght@400;700&family=Taviraj:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400
							&family=Lora:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php // esc_html_e( 'Skip to content', 'friends-of-bedminster-library' ); ?></a> -->

	<header id="masthead" class="site-header events-header">
		<div class="container">
			<div class="header-container">

				<a class="logo-container" href="<?php echo get_home_url(); ?>">
					<img id="logo" class="logo home-logo" src="<?php echo get_template_directory_uri().'/assets/home-header-logo.svg'?>"/>
				</a>
			
				<nav id="site-navigation" class="site-menu site-menu-events">
					<?php wp_nav_menu(); ?>
				</nav>

				<img src="<?php echo get_template_directory_uri().'/assets/hamburger-off-white.svg'?>" id="hamburger-menu" class="hamburger-menu" onclick="showMenu();">

				<nav id="site-menu-small" class="site-menu site-menu-small">
					<?php wp_nav_menu(); ?>
					<div class="social-links-small-menu">
						<img src="<?php echo get_template_directory_uri().'/assets/facebook.svg'?>">
						<img src="<?php echo get_template_directory_uri().'/assets/insta.svg'?>">
					</div>
				</nav>

			</div>
		</div><!-- .container -->
	</header><!-- #masthead -->
