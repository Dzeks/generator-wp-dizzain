<?php
/**
 * General meta boxes
 *
 * @package WordPress
 * @subpackage ThemeName
 * @since ThemeName ThemeVersion
 */

add_filter( 'populate_theme_meta_boxes', 'ThemeDomain_populate_meta_boxes' );
function ThemeDomain_populate_meta_boxes( $meta_boxes = array() ) {

	$prefix = 'page_';
	$meta_boxes[] = array(
		'id'       => 'page_meta',
		'title'    => __( 'Attributes', 'ThemeDomain' ),
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
						'label'       => __( 'Hide Title', 'ThemeDomain' ),
					),
				)
			),
		)
	);

	return $meta_boxes;
}
