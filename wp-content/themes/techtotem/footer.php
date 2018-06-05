<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */
?>
		</div><!-- .content-main -->

		<!-- NAVBAR -->
		<nav class="navbar">

			<h1 class="show-for-sr">Navigation: Primary</h1>
	    	<?php
	    	wp_nav_menu(
	        	array(
	        		'theme_location'=>'primary',
	        		'menu' => 'Primary',
	        		'container_class' => '',
	        		'container' => '',
	        		'menu_class' => '',
	        		'link_before' => '<span>',
	        		'link_after' => '</span> <i class="icon"></i>',
	        		'item_spacing' => 'discard',
	        	)
	        );
	        ?>

		</nav><!-- .navbar -->

	</div><!-- .wrapper -->

	<?php
	/* WORDPRESS FOOTER
	 * Do not remove. Needed by WordPress and plugins to insert scripts
	 * into the footer
	 */
	wp_footer();
	?>

</body>
	
</html>