<?php
/**
 * Non Grouped template available functions
 *
 * @package WordPress
 * @subpackage themeName
 * @since themeName themeVersion
 */

/* Enabling theme options */
function get_themeNameSpace_option( $key, $default = '' ) {
	return apply_filters( 'theme_option', $default, $key );
}
function themeNameSpace_option( $key, $default = '' ) {
	echo apply_filters( 'theme_option', $default, $key );
}

/* =Reading
-------------------------------------------------------------- */

/**
 * Set global var for excerpt lenght
 *
 * @param int $length of excerpt
 */
function set_excerpt_length($length) {
	$GLOBALS['excerpt_length'] = absint($length);
}

/**
 * Set global var for comment lenght
 *
 * @param int $length of content
 */
function set_comment_length($length) {
	$GLOBALS['comment_length'] = $length;
}

/**
 * Returns a "Continue Reading" link for excerpts
 */
function themeNameSpace_continue_reading_link() {
	return ( 'episode' == get_post_type() ) ? '' : ' <a class="continue-reading" href="'. esc_url( get_permalink() ) . '">' . __( 'Continue Reading &raquo;', 'themeDomain' ) .'</a>';
}