<?php
/**
 * Sue Mathys theme template for the front page.
 *
 * @package WordPress
 * @subpackage ThemeName
 * @since ThemeName ThemeVersion
 */

get_header(); ?>
	<?php get_theme_part( 'front', 'slider' ); ?>

	<?php get_theme_part( 'section', 'sign-up' ); ?>

	<?php get_theme_part( 'front', 'carousel' ); ?>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="front-page-content"><?php the_content(); ?></div>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php get_theme_part( 'front', 'reviews' ); ?>
<?php get_footer(); ?>