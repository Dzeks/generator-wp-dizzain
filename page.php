<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage themeName
 * @since themeName themeVersion
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>