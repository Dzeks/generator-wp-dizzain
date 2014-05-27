<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage ThemeName
 * @since ThemeName ThemeVersion
 */

get_header(); ?>

	<div id="primary" class="content-area site-content">
		<div class="content" role="main">
			<div class="content404">
				<h1 class="orange color-red"><?php _e( '404 error', 'ThemeDomain' ); ?></h1>
				<?php get_search_form(); ?>	
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>