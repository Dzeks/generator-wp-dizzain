<?php
/**
 * themeName theme setup
 *
 * @package WordPress
 * @subpackage themeName
 * @since themeTitle themeVersion
 */

/**
 * Set up theme defaults and registers support for various WordPress features.
 *
 */
add_action( 'after_setup_theme', 'themeName_setup' );
function themeName_setup() {

	/**
	 * Require theme core files
	 */

	// Shared theme utilities (options|meta-boxes|utils...)
	require( get_template_directory().'/inc/shared.php' );

	// General Settings and functions ( include theme scripts and styles )
	require( get_template_directory().'/inc/general.php' );

	/**
	 * Setup vital theme settings
	 */

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// Enable thumbnails
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menus() in one location.
	register_nav_menus(array(
		'primary' => __( 'Primary navigation', 'themeDomain' )
	));

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );

	// Add necessary image sizes
	// add_image_size( 'gimmeTheName', 1038, 576, true );
}

/**
 * Register our sidebars and widgetized areas.
 *
 * @since themeName themeVersion
 */
function themeName_widgets_init() {

	register_sidebar( array(
		'name' => 'Main Sidebar',
		'id' => 'sidebar-1',
		'description' => __( 'Main theme sidebar.', 'themeDomain' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'themeName_widgets_init' );