<?php
/**
 * The template for displaying the list of events
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */

?>


<!-- EVENTS -->
<div class="events callout gray">
	<h2>
		<img src="<?php echo get_template_directory_uri() . '/img/icons/min/category-event.svg' ?>" width="65" height="65" class="icon">
		Local Events
	</h2>

	<!-- ORBIT -->
	<div class="orbit orbit-small" role="region" aria-label="Local events" data-orbit data-auto-play="0" data-swipe="1" data-accessible="1">

		<!-- ORBIT WRAPPER -->
		<div class="orbit-wrapper">

			<!-- ORBIT CONTAINER -->
			<ul class="orbit-container">

				<?php
				/* GET ALL EVENTS */

					// create array to hold only events
					$tt_events = array();

					// get amenities from array
					$tt_amenities = $tt_data_recommendations[0]->properties[0]->amenities;
					$tt_amenities = objectToArray($tt_amenities);
					//echo '<pre>'; print_r($tt_amenities); echo '</pre>';

					// loop through results to get only "events"
					foreach ( $tt_amenities as $key => $value ) :

						// iterate through amenities and add all events to $tt_events
						if( $tt_amenities[$key]['category'] == 'event' ) : 

							// push each event into the events array
							array_push( $tt_events, $tt_amenities[$key] );
							?>

						<?php
						endif;

					endforeach;

					//echo '<pre>'; print_r($tt_events); echo '</pre>';

				/* CREATE THE CAROUSEL SLIDES */

					// split events array into groups of 3 (the number required for each carousel slide)
					$tt_events = array_chunk( $tt_events, 3 );

					// create the slides
					foreach($tt_events as $tt_event) : ?>
						<!-- ORBIT SLIDE -->
						<li class="orbit-slide">

							<ol class="listing">

								<?php
								/* ADD EACH EVENT */

									// Loop through each of the items in the array for the current slide
									foreach ($tt_event as $key => $value) : 

										// vars
										$tt_event_counter = $tt_event[$key]['counter'];
										$tt_event_title = $tt_event[$key]['name'];
										$tt_event_address = $tt_event[$key]['address'];
										$tt_event_tag = $tt_event[$key]['properties'][0]['subcategory'];
										$tt_event_date = date( "d M Y, h:ia", strtotime( $tt_event[$key]['properties'][0]['start'] ) );
										?>
							
										<li>
											<span class="counter"><?php echo $tt_event_counter; ?></span>
											<aside>
												<header>
													<h1><?php echo $tt_event_title; ?></h1>
													<p class="meta"><?php echo $tt_event_tag; ?></p>
												</header>

												<div>
													<p><?php echo $tt_event_address; ?></p>
												</div>

												<footer>
													<p><?php echo $tt_event_date; ?></p>
													<!--p>Cost</p-->
												</footer>
											</aside>											
										</li>

									<?php endforeach; ?>

							</ol>

						</li><!-- .orbit-slide -->
						
					<?php endforeach; ?>

			</ul><!-- .orbit-container -->

			<?php
			/* ORBIT CONTROLS - Show if more than 1 slide */
			if ( count( $tt_events ) > 1) : ?>

				<!-- ORBIT CONTROLS -->
				<div class="orbit-controls">

					<button class="orbit-previous"><img src="<?php echo get_template_directory_uri() . '/img/icons/min/chevron.svg'; ?>" width="14" height="5" alt=""></button>
					<button class="orbit-next"><img src="<?php echo get_template_directory_uri() . '/img/icons/min/chevron.svg'; ?>" width="14" height="5" alt=""></button>

				</div><!-- .orbit-controls -->

			<?php endif; ?>

		</div><!-- .orbit-wrapper -->

	</div><!-- .orbit -->

</div><!-- .events -->