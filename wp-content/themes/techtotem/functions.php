<?php
/**
 * Tech Totem Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 */

function ttotem_theme_activation() {


	/* ******************************************************************************* */


	/* SCRIPTS AND STYLES */
	function ttotem_assets() {

		if ( ! is_admin() ) {

			/* DEREGISTER STYLES/SCRIPTS ON FRONTEND
			 * eg. wp_dequeue_style( 'style_handle' );
			 * eg. wp_dequeue_script( 'script_handle' );
			 */
			//wp_dequeue_script( 'jquery' );

			/* STYLES */
			wp_enqueue_style( 'ttotem_css_all_gfonts', '//fonts.googleapis.com/css?family=Nunito+Sans:400,600,800', array(), '', 'all' );
			wp_enqueue_style( 'ttotem_theme', get_template_directory_uri() . '/style.css', array(), '', 'all' );
			wp_enqueue_style( 'ttotem_app', get_template_directory_uri() . '/css/app.css', array(), '', 'all' );

			/* SCRIPTS */
			wp_enqueue_script( 'jquery' );
			wp_enqueue_script( 'ttotem_whatinput', get_template_directory_uri() . '/node_modules/what-input/dist/what-input.min.js', array(), '', true );
			wp_enqueue_script( 'ttotem_foundation', get_template_directory_uri() . '/node_modules/foundation-sites/dist/js/foundation.min.js', array( 'ttotem_whatinput' ), '', true );
			wp_enqueue_script( 'ttotem_app', get_template_directory_uri() . '/js/min/app.min.js', array( 'ttotem_foundation' ), '', true );

			/* REDIRECT TO SCREENSAVER */
			function tt_screensaver() {

				if (! is_page( array( 'screensaver', 'style-guide' ) ) ) : 
				?>
					<script type="text/javascript">
						window.setTimeout(function(){
							window.location.href = "<?php echo home_url( '/screensaver/' ); ?>";
						}, 600000); // redirect after 10 mins
					</script>
				<?php
				endif;

			}
			add_action('wp_footer', 'tt_screensaver');

		}
	}
	add_action( 'wp_enqueue_scripts', 'ttotem_assets' );


	/* ******************************************************************************* */


	/* WORDPRESS: STANDARD THEME SETTINGS
	 * Add/remove features
	 */

		/* HTML5 */
		add_theme_support( 'html5' );	

		/* TITLE TAG */
		add_theme_support( 'title-tag' );

		/* FEATURED IMAGES
		 * Gives us the ability to give posts featured images
		 */
		add_theme_support( 'post-thumbnails' );

		/* CONTENT WIDTH */
		if ( ! isset( $content_width ) ) {
			$content_width = 1080;
		}

		/* MEDIUM LARGE IMAGES
		 * Stop WP generating medium large images
		 */
		remove_image_size( 'medium-large' );


	/* ******************************************************************************* */


	/* CUSTOM THEME SETTINGS (HOOKS AND FILTERS)
	 * Custom features for this theme
	 */

		/* QUERY STRINGS
		 * Remove query strings from asset paths for site optimisation.
		*/
		function ttotem_removeQueryString( $src ) {
			$parts = explode( '?ver', $src );
			return $parts[0];
		}
		add_filter( 'script_loader_src', 'ttotem_removeQueryString', 15, 1 );
		add_filter( 'style_loader_src', 'ttotem_removeQueryString', 15, 1 );

		/* CLEAN UP HEADER
		 * Remove the unwanted <meta> links
		 */
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'wp_shortlink_wp_head' );

		/**
		 * PARTNER CUSTOM SETTINGS
		 * Uses ACF Pro options feature
		 *
		 * @link https://www.advancedcustomfields.com/resources/options-page/
		 */
		if( function_exists( 'acf_add_options_page' ) ) {

			acf_add_options_page(
				array(
					'page_title' 	=> 'Partner settings for this Tech Totem',
					'menu_title'	=> 'Totem Partner',
					'menu_slug' 	=> 'partner-settings',
					'capability'	=> 'edit_posts',
					'redirect'		=> true,
					'icon_url' 		=> 'dashicons-id-alt',
				)
			);
	
		}

		/* PAGE SLUG IN BODY CLASS */
		function ttotem_add_slug_body_class( $classes ) {
			global $post;
			if ( isset( $post ) ) {
				$classes[] = $post->post_type . '-' . $post->post_name;
			}
			return $classes;
		}
		add_filter( 'body_class', 'ttotem_add_slug_body_class' );


} // end theme activation
add_action( 'init', 'ttotem_theme_activation' );