<?php
/**
 * Include Styles and Scripts
 *
 * @package WordPress
 * @subpackage ThemeName
 * @since ThemeName ThemeVersion
 */

/**
 * Register and enqueue some theme scripts and styles
 *
 * @since ThemeVersion
 */
function ThemeDomain_scripts_styles() {

	// Scripts
	wp_enqueue_script( 'ThemeDomain', get_stylesheet_directory_uri() .'/inc/assets/js/ThemeDomain.js', array(), '1.0' , true );

	// Styles
	wp_enqueue_style( 'ThemeDomain', get_stylesheet_directory_uri() . '/inc/assets/css/ThemeDomain.css' );

	// Google Font include example
	// wp_enqueue_style( 'ThemeDomain-font', add_query_arg( 'family', 'Dosis:200,300,400,500,600,700,800', "//fonts.googleapis.com/css" ) );
};
add_action('wp_enqueue_scripts', 'ThemeDomain_scripts_styles');

/**
 * Output header theme script variables
 */
function ThemeDomain_header_scripts() { ?>
	<script type="text/javascript">
		var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
	</script>
<?php }
add_action( 'wp_head', 'ThemeDomain_header_scripts' );