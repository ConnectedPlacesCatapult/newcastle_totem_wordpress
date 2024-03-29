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

	<div class="slider">
		<div class="inner grid-container">

			<!-- ORBIT -->
			<div class="orbit orbit-large" role="region" data-orbit data-auto-play="1" data-swipe="1" data-accessible="1">

				<!-- ORBIT WRAPPER -->
				<div class="orbit-wrapper">

					<!-- ORBIT CONTAINER -->
					<ul class="orbit-container">

						<?php
						while ( have_rows( 'tt_slider_slides' ) ) : the_row();
						?>

							<li class="orbit-slide">

								<?php
								/* COLOUR PALETTE */
								include( locate_template( 'template-parts/lib/lib-color-palette.php' ) );

								// get dynamic content selected for this row
								$tt_content_component = get_sub_field( 'tt_dynamic_content' );
								//echo $tt_content_component;
								?>

								<div class="row <?php echo $tt_row_clr . ' ' . $tt_content_component; ?>">
									<div class="inner grid-container">

										<?php include( locate_template( 'template-parts/acf-components/slide-' . $tt_content_component . '.php' ) ); ?>

									</div><!-- .inner -->
								</div><!-- .row -->

							</li>

						<?php endwhile; ?>

					</ul><!-- .orbit-container -->

				</div><!-- .orbit-wrapper -->

			</div><!-- .orbit -->

		</div><!-- .inner -->
	</div><!-- .slider -->

<?php endif;