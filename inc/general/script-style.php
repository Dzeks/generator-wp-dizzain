<?php
/**
 * Include Styles and Scripts
 *
 * @package WordPress
 * @subpackage themeName
 * @since themeName themeVersion
 */

/**
 * Register and enqueue some theme scripts and styles
 */
function ThemeDomain_scripts_styles() {

	// Scripts
	wp_enqueue_script( 'themeNameSpace', get_stylesheet_directory_uri() .'/inc/assets/js/themeNameSpace.js', array(), '1.0' , true );

	// Styles
	wp_enqueue_style( 'themeNameSpace', get_stylesheet_directory_uri() . '/inc/assets/css/themeNameSpace.css' );

	// Google Font include example
	// wp_enqueue_style( 'themeNameSpace-font', add_query_arg( 'family', 'Dosis:200,300,400,500,600,700,800', "//fonts.googleapis.com/css" ) );
};
add_action('wp_enqueue_scripts', 'themeNameSpace_scripts_styles');

/**
 * Output header theme script variables
 */
function themeNameSpace_header_scripts() { ?>
	<script type="text/javascript">
		var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
	</script>
<?php }
add_action( 'wp_head', 'themeNameSpace_header_scripts' );