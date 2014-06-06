<?php
/**
 * Handle general theme aspects
 * -- Load assets
 * -- general options/meta
 * -- miscellaneous filters/functions
 *
 * @package WordPress
 * @subpackage themeName
 * @since themeTitle themeVersion
 *
 * @to-do must be singleton class
 */

class themeName_general {

	/**
	 * Add general filters and actions and load additional modules
	 */
	function __construct() {
		
		// Nice blog title
		add_filter( 'wp_title', array( $this, 'wp_title' ), 10, 2 );

		// Gallery is styled by theme css
		add_filter( 'use_default_gallery_style', '__return_false' );

		$this->include_modules();
	}

	/**
	 * Load general partials
	 * 
	 * @return void
	 */
	private function include_modules() {
		$include_path = get_template_directory() . '/inc/general/';

		require( $include_path . 'custom.php' );
		require( $include_path . 'options.php' );
		require( $include_path . 'script-style.php' );
		require( $include_path . 'meta.php' );
	}

	/**
	 * Creates a nicely formatted and more specific title element text
	 * for output in head of document, based on current view.
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep Optional separator.
	 * @return string Filtered title.
	 */
	function wp_title( $title, $sep ) {
		global $paged, $page;

		if ( is_feed() )
			return $title;

		// Add the site name.
		$title .= get_bloginfo( 'name' );

		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";

		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'themeDomain' ), max( $paged, $page ) );

		return $title;
	}
}
new themeName_general;