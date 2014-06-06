<?php
/**
 * themeName theme template for the front page.
 *
 * @package WordPress
 * @subpackage themeName
 * @since themeTitle themeVersion
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="front-page-content"><?php the_content(); ?></div>
		<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>