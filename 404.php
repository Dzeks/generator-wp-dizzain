<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage theme_name
 * @since theme_name 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area site-content">
		<div class="content" role="main">
			
			<div class="content404">
				<div class="inner404">
					<h1 class="orange color-red"><?php _e( '404 error', 'nys' ); ?></h1>
					<p class="t-c">
						<?php _e( 'Page doesn\'t exist or some other error occurred. Go to our <a href="'. home_url() .'">home page</a> or go back to <a href="'. wp_get_referer() .'">previous page</a>', 'nys' ); ?>
						<?php if ( $referer = wp_get_referer() ) _e( 'or go back to <a href="'. $referer .'">previous page</a>', 'nys' ); ?>
					</p>
				</div>				
			</div>
			
			<img src="<?php echo get_stylesheet_directory_uri() . '/images/404-img.jpg' ?>" alt="<?php bloginfo( 'name' ); ?>" class="img404" />

			<div class="clear"><!-- --></div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>