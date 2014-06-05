<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage themeName
 * @since themeName themeVersion
 */
?>

<div class="page-content">

	<?php if ( is_search() ) : ?>

	<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'themeDomain' ); ?></p>
	<?php get_search_form(); ?>

	<?php else : ?>

	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'themeName' ); ?></p>
	<?php get_search_form(); ?>

	<?php endif; ?>
</div><!-- .page-content -->
