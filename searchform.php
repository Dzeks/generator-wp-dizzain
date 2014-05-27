<?php
/**
 * The template for displaying search forms
 *
 * @package WordPress
 * @subpackage ThemeName
 * @since ThemeName ThemeVersion
 */
?>
	<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="searchitem"><?php _e( 'Search For:', 'nuk' ) ?></label>
		<input type="text" class="field" id="searchitem" name="s" value="<?php the_search_query(); ?>" placeholder="<?php _e( 'Find a product…', 'nuk' ); ?>" />
		<button class="button button-secondary"><i class="sprite-search"></i></button>
		<span class="clear-input" data-for="#searchitem"></span>
	</form>
