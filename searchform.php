<?php
/**
 * The template for displaying search forms
 *
 * @package WordPress
 * @subpackage themeName
 * @since themeTitle themeVersion
 */
?>
<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="searchitem"><?php _e( 'Search For:', 'themeDomain' ) ?></label>
	<input type="text" class="field" id="searchitem" name="s" value="<?php the_search_query(); ?>" placeholder="<?php _e( 'Search', 'themeDomain' ); ?>" />
</form>