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

	    	<ul>

	    		<li>
	    			<a href="<?php echo home_url( '/' ); ?>">
	    				<span>Home</span>
	    				<object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/img/icons/min/home.svg' ?>" class="icon"></object>
	    			</a>
	    		</li>

	    		<li>
	    			<a href="<?php echo home_url( '/ili/' ); ?>">
	    				<span>Show me the way to</span>
	    				<object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/img/icons/min/icon-placeholder.svg' ?>" class="icon"></object>
	    			</a>
	    		</li>

	    		<li>
	    			<a href="<?php echo home_url( '/urban-observatory/' ); ?>">
	    				<span>Show me more data</span>
	    				<object type="image/svg+xml" data="<?php echo get_template_directory_uri() . '/img/logos/min/urbanobservatory-symbol.svg' ?>" class="icon"></object>
	    			</a>
	    		</li>

	    		<li>
	    			<a href="<?php echo home_url( '/parner/' ); ?>" style="background-color: <?php the_field( 'tt_partner_colour', 'option' ); ?>">
	    				<span><?php the_field( 'tt_partner_name', 'option' ); ?></span>
	    				<object type="image/svg+xml" data="<?php the_field( 'tt_partner_symbol', 'option' ); ?>" class="icon"></object>
	    			</a>
	    		</li>

	    	</ul>

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