<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpressone
 */

// ACF Variables ========
$logo = get_field('logo');
$hero_img = get_field('background_banner_image');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Raleway:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wordpressone' ); ?></a>

	<header class="site-header">
		<!-- ====== NAV BAR ======= -->
		<div id="site-navigation" class="main-navigation">
			
		<div class="burgerContainer">
			<div class="bars"></div>
			<div class="bars"></div>
			<div class="bars"></div>
		</div>

			<?php
				$primarynav = ( array(
					'theme_location' => 'primary',
					'container' => 'nav',
					'container_class' => 'nav-container',
					'menu_class' => 'nav-menu'
				) );
				wp_nav_menu($primarynav);
			?>
		</div>

		<!-- ====== HERO BANNER ======= -->
		<?php if ( is_admin_bar_showing() ) { ?>
			<!-- Show this hero banner -->
			<div id="hero-banner" class="hero-banner-with-admin" style="background-image: url(<?php echo $hero_img['url']; ?>)">
				<div class="hero-content">
					<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
					<h1><?php bloginfo('name'); ?></h1>
					<p class="subheading"><?php bloginfo('description'); ?></p>
				</div>
			</div>	
		<?php } else { ?>
			<div id="hero-banner" class="hero-banner" style="background-image: url(<?php echo $hero_img['url']; ?>)">
				<div class="hero-content">
					<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
					<h1><?php bloginfo('name'); ?></h1>
					<p class="subheading"><?php bloginfo('description'); ?></p>
				</div>
			</div>	
		<?php } ?>
	</header>

	<div id="content" class="site-content">
