<?php
/**
 * Populate product meta boxes
 *
 * @package WordPress
 * @subpackage ThemeName
 * @since ThemeName ThemeVersion
 */

add_filter( 'populate_theme_options', 'ThemeDomain_populate_general_options' );
function ThemeDomain_populate_general_options( $settings = array() ) {

	$settings['sections'][] = array(
		'title' => __( 'General', 'ThemeDomain' ),
		'id'    => 'general_settings'
	);

 	$settings['settings'][] = array(
		'id'    => 'site_copyright',
		'label' => __( 'Copyright', 'ThemeDomain' ),
		'type'  => 'textarea-simple',
		'section' => 'general_settings',
		'desc' => __( 'To dynamically replace year use %s.' )
	);

	return $settings;
}