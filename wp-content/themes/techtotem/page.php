<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */


/* HEADER */
get_header();

	/* API DATA IN JSON FORMAT */
	include( locate_template( 'template-parts/api-data/data-recommendations.php' ) );
	include( locate_template( 'template-parts/api-data/data-sensors.php' ) );


	/* LOOP */
	while ( have_posts() ) : the_post();
	?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="show-for-sr">
				<?php the_title( $before = '<h1>', $after = '</h1>', $echo = true ); ?>
			</header>

			<div class="content">

				<!-- TIME & TEMP -->
				<section class="time-temp">

					<time id="clock"></time>
					<p><?php echo round( $tt_data_recommendations[0]->properties[0]->two_hour_temperature_forecast ); ?>&deg;C</p>

				</section><!-- .time-temp -->

				<?php
				/* THE CONTENT */
				/* Not using this; using ACF Pro instead */
				//the_content();

				/* ACF PRO: FLEXIBLE CONTENT */
				if( have_rows( 'tt_component' ) ) : 

					while ( have_rows( 'tt_component' ) ) : the_row();

						// slider
						if ( get_row_layout() == 'tt_slider' ) : 

							include( locate_template( 'template-parts/acf-components/component-slider.php' ) );

						// preformatted components
						elseif ( get_row_layout() == 'tt_row' ) : 

							include( locate_template( 'template-parts/acf-components/component-row.php' ) );

						// custom content
						elseif ( get_row_layout() == 'tt_custom_content' ) : 

							include( locate_template( 'template-parts/acf-components/component-custom-content.php' ) );

						endif;

					endwhile;

				endif;
				?>

			</div>

		</article>
	  
	<?php endwhile; ?>

<?php
/* FOOTER */
get_footer();