<?php
/**
 * The template for displaying themeName theme footer.
 *
 * @package WordPress
 * @subpackage themeName
 * @since themeName themeVersion
 */
?>
	<div class="site-footer">
		<div class="copyright"><?php printf( get_themeNameSpace_option( 'site_copyright' ), date( 'Y' ) ); ?></div>
	</div>

<?php wp_footer(); ?>

</body>
</html>