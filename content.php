<?php
/**
 * Template for displayin one post on archive pages
 *
 * @package WordPress
 * @subpackage ThemeName
 * @since ThemeName ThemeVersion
 */
?><article <?php post_class(); ?>>
	<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'thumbnail' ) ); ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<div class="article-body">
		<?php the_content(); ?>
	</div>
</article>