<?php
/**
 * The template for displaying NUK theme footer.
 *
 * @package WordPress
 * @subpackage ThemeName
 * @since ThemeName ThemeVersion
 */
?>
	<div class="site-footer">
		<div class="copyright"><?php printf( get_ThemeDomain_option( 'site_copyright' ), date( 'Y' ) ); ?></div>
	</div>

<?php wp_footer(); ?>

</body>
</html>