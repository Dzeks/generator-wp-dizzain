<?php
/**
 * The template for displaying NUK theme footer.
 *
 * @package WordPress
 * @subpackage NUK
 * @since NUK 1.0
 */
?>
	<?php if ( !is_front_page() ) get_theme_part( 'section', 'sign-up' ); ?>
	<div class="site-footer">
		<div class="row">
			<a href="#top" class="back-to-top" id="scroll-to-top"><?php _e( 'Back to top', 'nuk' ); ?> <!-- Smooth Back to top --></a>
			<div class="site-footer-navigation"  role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'nav-menu', 'container' => false, 'depth' => 1, 'link_after' => '<span class="icon"></span>' ) ); ?>
			</div>
			<div class="copyright"><?php printf( get_nuk_option( 'site_copyright' ), date( 'Y' ) ); ?></div>
			<?php get_theme_part( 'section', 'site-social' ) ?>
		</div>
	</div>

<?php wp_footer(); ?>

</body>
</html>