<?php
/**
 * Include Styles and Scripts
 *
 * @package WordPress
 * @subpackage themeName
 * @since themeTitle themeVersion
 */

/**
 * Register and enqueue some theme scripts and styles
 */
function themeName_scripts_styles() {

	// Scripts
	wp_enqueue_script( 'themeName', get_stylesheet_directory_uri() .'/inc/assets/js/themeName.js', array(), '1.0' , true );

	// Styles
	wp_enqueue_style( 'themeName', get_stylesheet_directory_uri() . '/inc/assets/css/themeName.css' );

	// Google Font include example
	// wp_enqueue_style( 'themeName-font', add_query_arg( 'family', 'Dosis:200,300,400,500,600,700,800', "//fonts.googleapis.com/css" ) );

	// Livereload for localhost only
	if ( strpos( home_url(), 'localhost' ) )
		wp_enqueue_script( 'livereload', '//localhost:35729/livereload.js' );
};
add_action('wp_enqueue_scripts', 'themeName_scripts_styles');

/**
 * Output header theme script variables
 */
function themeName_header_scripts() { ?>
	<script type="text/javascript">
		var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
	</script>
<?php }
add_action( 'wp_head', 'themeName_header_scripts' );