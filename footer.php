<?php
/**
 * The template for displaying themeName theme footer.
 *
 * @package WordPress
 * @subpackage themeName
 * @since themeTitle themeVersion
 */
?>
	<div class="site-footer">
		<div class="copyright"><?php printf( get_themeName_option( 'site_copyright' ), date( 'Y' ) ); ?></div>
	</div>

<?php wp_footer(); ?>

</body>
</html>