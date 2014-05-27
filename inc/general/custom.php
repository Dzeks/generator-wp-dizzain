<?php
/**
 * Non Grouped template available functions
 *
 * @package WordPress
 * @subpackage ThemeName
 * @since ThemeName ThemeVersion
 */

/* Enabling theme options */
function get_ThemeDomain_option( $key, $default = '' ) {
	return apply_filters( 'theme_option', $default, $key );
}
function ThemeDomain_option( $key, $default = '' ) {
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
function ThemeDomain_continue_reading_link() {
	return ( 'episode' == get_post_type() ) ? '' : ' <a class="continue-reading" href="'. esc_url( get_permalink() ) . '">' . __( 'Continue Reading &raquo;', 'ThemeDomain' ) .'</a>';
}