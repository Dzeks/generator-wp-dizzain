<?php
/**
 * General meta boxes
 *
 * @package WordPress
 * @subpackage themeName
 * @since themeTitle themeVersion
 */

add_filter( 'populate_theme_meta_boxes', 'themeName_populate_meta_boxes' );
function themeName_populate_meta_boxes( $meta_boxes = array() ) {

	$prefix = 'page_';
	$meta_boxes[] = array(
		'id'       => 'page_meta',
		'title'    => __( 'Attributes', 'themeDomain' ),
		'pages'    => array( 'page' ),
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => array(

			array(
				'id' => $prefix . 'hide_title',
				'type' => 'checkbox',
				'choices'     => array( 
					array(
						'value'       => '1',
						'label'       => __( 'Hide Title', 'themeDomain' ),
					),
				)
			),
		)
	);

	return $meta_boxes;
}