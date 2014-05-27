<?php
/**
 * The Header template for our theme.
 *
 *
 * @package WordPress
 * @subpackage ThemeName
 * @since ThemeName ThemeVersion
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-query" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-query" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" id="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/html5shiv.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="site-header">
		<div class="site-title"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/images/logo.png' ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></div>
	</div>

	<div class="site-navigation"  role="navigation" id="js-primary-site-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container' => false, 'depth' => 2, 'walker' => new Primary_Walker_Nav_Menu ) ); ?>
	</div>