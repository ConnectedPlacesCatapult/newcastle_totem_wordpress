<?php
/**
 * The template for displaying Urban Observatory: Locale
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */
?>

<!-- ORBIT -->
<div class="orbit orbit-large" role="region" aria-label="Local sensor data" data-timer-delay="10000" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">

	<!-- ORBIT WRAPPER -->
	<div class="orbit-wrapper">

		<!-- ORBIT CONTROLS -->
		<div class="orbit-controls">

			<button class="orbit-previous"><img src="<?php echo get_template_directory_uri() . '/img/icons/min/chevron.svg'; ?>" width="26" height="10" alt=""></button>
			<button class="orbit-next"><img src="<?php echo get_template_directory_uri() . '/img/icons/min/chevron.svg'; ?>" width="26" height="10" alt=""></button>

		</div><!-- .orbit-controls -->

		<!-- ORBIT CONTAINER -->
		<ul class="orbit-container">

			<?php
			/* GALLERY SHOWING DATA SENSORS */

				// Convert object into array
				function objectToArray($d) {

					if (is_object($d)) {
					    $d = get_object_vars($d); // gets the properties of the given object with get_object_vars function
					}

					if (is_array($d)) {
					    /*
					    * Return array converted to object
					    * Using __FUNCTION__ (Magic constant)
					    * for recursive call
					    */
					    return array_map(__FUNCTION__, $d);
					}
					else {	    
					    return $d; // return array
					}
				}
				$init = $tt_data_sensors;
				$tt_data_sensors_gallery = objectToArray($init);

				// split array into groups of 4 and keep original key
				$tt_data_sensors_gallery = array_chunk( $tt_data_sensors_gallery, 4, true);

				// Create the slides
				foreach($tt_data_sensors_gallery as $tt_data_sensors_gallery_slide) : 
				?>

					<!-- ORBIT SLIDE -->
					<li class="orbit-slide">

						<ul class="gallery-grid">
							<?php
							// Loop through each of the items in the array for the current slide
							foreach ($tt_data_sensors_gallery_slide as $key => $value) :

								// get the data sensor source
								if( $tt_data_sensors_gallery_slide[$key]["local"] == 1 ) : 
								 	$tt_label_data = 'locale';
								else : 
								 	$tt_label_data = 'urban-obs';
								endif;
								?>

								<li class="locale-data label-data-<?php echo $tt_label_data; ?>">

									<a href="<?php echo home_url( '/urban-observatory-data-record/' ); ?>?sensor=<?php echo $tt_data_sensors_gallery_slide[$key]["name"]; ?>">

										<img src="<?php echo get_template_directory_uri() . '/img/icons/min/sensor-' . $tt_data_sensors_gallery_slide[$key]["name"] . '.svg'; ?>" width="110" height="110" alt="">

										<h2><?php echo $tt_data_sensors_gallery_slide[$key]["label"]; ?></h2>

										<p><?php echo $tt_data_sensors_gallery_slide[$key]["reading"] . $tt_data_sensors_gallery_slide[$key]["unit"]; ?></p>

									</a>

								</li>

							<?php endforeach; ?>

						</ul>

					</li><!-- .orbit-slide -->

				<?php endforeach; ?>

		</ul><!-- .orbit-container -->

	</div><!-- .orbit-wrapper -->

</div><!-- .orbit -->


<div class="grid-x">

	<div class="cell small-6">

		<ul class="key meta">
			<li class="label-data-locale">Data from current location</li>
			<li class="label-data-urban-obs">Data from other Urban Observatory sensors</li>
		</ul>

	</div>

	<div class="cell small-6">
		
		<p>
			<img src="<?php echo get_template_directory_uri() . '/img/min/image-placeholder.svg'; ?>" width="84" height="45" alt="UKCRIC">		
			<img src="<?php echo get_template_directory_uri() . '/img/min/image-placeholder.svg'; ?>" width="84" height="45" alt="Newcastle University">
		</p>

	</div>

</div>