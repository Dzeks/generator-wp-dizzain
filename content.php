<?php
/**
 * Template for displaying one post on archive pages
 *
 * @package WordPress
 * @subpackage themeName
 * @since themeName themeVersion
 */
?><article <?php post_class(); ?>>
	<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'thumbnail' ) ); ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<div class="article-body">
		<?php the_content(); ?>
	</div>
</article>