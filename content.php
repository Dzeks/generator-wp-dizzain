<?php
/**
 * Template for displayin one post on archive pages
 *
 * @package WordPress
 * @subpackage theme_name
 * @since theme_name 1.0
 */
?><article <?php post_class(); ?>>
	<?php the_post_thumbnail( 'medium', array( 'class' => 'thumbnail' ) ); ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<div class="article-body">
		<?php the_content(); ?>
	</div>
</article>