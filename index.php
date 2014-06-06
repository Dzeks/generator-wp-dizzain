<?php
/**
 * The main template file.
 * By default this template is used for all blog pages
 *
 * @package WordPress
 * @subpackage themeName
 * @since themeTitle themeVersion
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );

				endwhile;

			else :
				get_template_part( 'content', 'none' );
			endif;
		?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
