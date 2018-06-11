<?php
/**
 * The template for displaying ACF Flexible Content - Slider Component
 *
 * @link https://www.advancedcustomfields.com/resources/flexible-content/
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */


if( have_rows( 'tt_slider_slides' ) ) : 
?>	

	<div class="slider <?php echo $tt_clr_palette; ?>">
		<div class="inner grid-container">

			<!-- ORBIT -->
			<div class="orbit orbit-large" role="region" aria-label="Favorite Space Pictures" data-orbit data-auto-play="0" data-swipe="1" data-accessible="1">

				<!-- ORBIT WRAPPER -->
				<div class="orbit-wrapper">

					<!-- ORBIT CONTAINER -->
					<ul class="orbit-container">

						<?php
						while ( have_rows( 'tt_slider_slides' ) ) : the_row();

							// get dynamic content selected for this row
							$tt_content_component = get_sub_field( 'tt_dynamic_content' );
							?>

							<li class="orbit-slide">

								<?php include( locate_template( 'template-parts/acf-components/component-row.php' ) ); ?>

							</li>

						<?php endwhile; ?>

					</ul><!-- .orbit-container -->

				</div><!-- .orbit-wrapper -->

			</div><!-- .orbit -->

		</div><!-- .inner -->
	</div><!-- .slider -->

<?php endif;