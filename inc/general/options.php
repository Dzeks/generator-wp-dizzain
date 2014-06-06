<?php
/**
 * Populate product meta boxes
 *
 * @package WordPress
 * @subpackage themeName
 * @since themeName themeVersion
 */

add_filter( 'populate_theme_options', 'themeName_populate_general_options' );
function themeName_populate_general_options( $settings = array() ) {

	$settings['sections'][] = array(
		'title' => __( 'General', 'themeDomain' ),
		'id'    => 'general_settings'
	);

 	$settings['settings'][] = array(
		'id'    => 'site_copyright',
		'label' => __( 'Copyright', 'themeDomain' ),
		'type'  => 'textarea-simple',
		'section' => 'general_settings',
		'desc' => __( 'To dynamically replace year use %s.' )
	);

	return $settings;
}