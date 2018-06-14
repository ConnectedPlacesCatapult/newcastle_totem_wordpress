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

	/* API DATA IN JSON FORMAT */
	include( locate_template( 'template-parts/api-data/data-recommendations.php' ) );
	include( locate_template( 'template-parts/api-data/data-sensors.php' ) );
?>
		</div><!-- .content-main -->

		<!-- NAVBAR -->
		<nav class="navbar">

			<h1 class="show-for-sr">Navigation: Primary</h1>

	    	<ul>

	    		<li>
	    			<a href="<?php echo home_url( '/' ); ?>">
	    				<span>Home</span>
	    				<img src="<?php echo get_template_directory_uri() . '/img/icons/min/home.svg' ?>" width="50" height="50" class="icon">
	    			</a>
	    		</li>

	    		<li>
	    			<a href="<?php echo home_url( '/ili/' ); ?>">
	    				<span>Show me the way to</span>
	    				<img src="<?php echo get_template_directory_uri() . '/img/icons/min/category-' .  $tt_data_recommendations[0]->category . '.svg' ?>" width="50" height="50" class="icon <?php echo $tt_data_recommendations[0]->category; ?>">
	    			</a>
	    		</li>

	    		<li>
	    			<a href="<?php echo home_url( '/urban-observatory/' ); ?>">
	    				<span>Show me more data</span>
	    				<img src="<?php echo get_template_directory_uri() . '/img/logos/min/urbanobservatory-symbol.svg' ?>" width="50" height="50" class="icon">
	    			</a>
	    		</li>

	    		<li>
	    			<a href="<?php echo home_url( '/partner/' ); ?>" style="background-color: <?php the_field( 'tt_partner_colour', 'option' ); ?>">
	    				<span><?php the_field( 'tt_partner_name', 'option' ); ?></span>
	    				<img src="<?php the_field( 'tt_partner_symbol', 'option' ); ?>" width="50" height="50" class="icon">
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

	<?php
	echo '<div style="display: none;">Recommendation data <pre>';
	print_r($tt_data_recommendations);
	echo '</pre></div>';

	echo '<div style="display: none;">Sensor data <pre>';
	print_r($tt_data_sensors);
	echo '</pre></div>';
	?>

</body>
	
</html>