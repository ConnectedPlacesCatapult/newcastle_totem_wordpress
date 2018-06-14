<?php
/**
 * The template for displaying Locale
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */
?>

<h2 class="badge fuschia">Walk Curator</h2>

<!-- MAP CONTAINER -->
<aside class="map-container">

	<?php
	/* MAP */
	include( locate_template( 'template-parts/acf-components/content-locale-map.php' ) );
	?>

	<!-- MAP KEY -->
	<div class="map-key grid-x">

		<div class="cell small-3">

			<h2>
				<img src="<?php echo get_template_directory_uri() . '/img/icons/min/category-tranquility.svg'; ?>" width="41" height="41" class="icon">
				Tranquility
			</h2>

			<ol class="listing">

				<li>Name lorem ipsum dolor sit amet lorem ipsum dolor</li>
				<li>Name lorem ipsum dolor sit amet lorem ipsum dolor</li>

			</ol>

		</div>

		<div class="cell small-3">

			<h2>
				<img src="<?php echo get_template_directory_uri() . '/img/icons/min/category-food_drinks.svg'; ?>" width="41" height="41" class="icon">
				Food & Drink
			</h2>

			<ol class="listing">

				<li>Name lorem ipsum dolor sit amet lorem ipsum dolor</li>
				<li>Name lorem ipsum dolor sit amet lorem ipsum dolor</li>

			</ol>

		</div>

		<div class="cell small-3">

			<h2>
				<img src="<?php echo get_template_directory_uri() . '/img/icons/min/category-attractions.svg'; ?>" width="41" height="41" class="icon">
				Attractions
			</h2>

			<ol class="listing">

				<li>Name lorem ipsum dolor sit amet lorem ipsum dolor</li>
				<li>Name lorem ipsum dolor sit amet lorem ipsum dolor</li>

			</ol>

		</div>

		<div class="cell small-3">

			<h2>
				<img src="<?php echo get_template_directory_uri() . '/img/icons/min/category-culture.svg'; ?>" width="41" height="41" class="icon">
				Culture
			</h2>

			<ol class="listing">

				<li>Name lorem ipsum dolor sit amet lorem ipsum dolor</li>
				<li>Name lorem ipsum dolor sit amet lorem ipsum dolor</li>

			</ol>

		</div>

	</div><!-- .key -->

</aside><!-- .map-container -->

<!-- CALLOUT CONTAINER -->
<div class="callout-container">

	<!-- WEATHER -->
	<aside class="callout weather <?php echo $tt_data_recommendations[0]->properties[0]->two_hour_weather_forecast; ?>">
		<h2>1 hour forecast</h2>
		<img src="<?php echo get_template_directory_uri() . '/img/icons/min/weather-' .  $tt_data_recommendations[0]->properties[0]->two_hour_weather_forecast . '.svg' ?>" width="175" height="195" class="icon">
		<p><?php echo round( $tt_data_recommendations[0]->properties[0]->two_hour_rain_forecast ); ?>% chance of rain</p>
	</aside><!-- .weather -->

	<!-- EVENTS -->
	<div class="events callout gray">
		<h2>
			<img src="<?php echo get_template_directory_uri() . '/img/icons/min/category-event.svg' ?>" width="65" height="65" class="icon">
			Local Events
		</h2>

		<!-- ORBIT -->
		<div class="orbit orbit-small" role="region" aria-label="Local events" data-orbit>

			<!-- ORBIT WRAPPER -->
			<div class="orbit-wrapper">

				<!-- ORBIT CONTROLS -->
				<div class="orbit-controls">

					<button class="orbit-previous"><img src="<?php echo get_template_directory_uri() . '/img/icons/min/chevron.svg'; ?>" width="19" height="10" alt=""></button>
					<button class="orbit-next"><img src="<?php echo get_template_directory_uri() . '/img/icons/min/chevron.svg'; ?>" width="19" height="10" alt=""></button>

				</div><!-- .orbit-controls -->

				<!-- ORBIT CONTAINER -->
				<ul class="orbit-container">

					<!-- ORBIT SLIDE -->
					<li class="orbit-slide">

						<ol class="listing">
							<li>

								<aside>

									<header>

										<h1>Name lorem ipsum dolor sit amet lorem ipsum dolor amet lorem ipsum dolor</h1>

										<p class="meta">Tag; tag</p>

									</header>

									<div>
										<p>
											First line of address only which may end up over two lines<br>
											Postcode
										</p>
									</div>

									<footer>

										<p>XX:XX - XX:XX</p>

										<p>Cost</p>

									</footer>

								</aside>
								
							</li>
							<li>

								<aside>

									<header>

										<h1>Name lorem ipsum dolor sit amet lorem ipsum dolor amet lorem ipsum dolor</h1>

										<p class="meta">Tag; tag</p>

									</header>

									<div>
										<p>
											First line of address only which may end up over two lines<br>
											Postcode
										</p>
									</div>

									<footer>

										<p>XX:XX - XX:XX</p>

										<p>Cost</p>

									</footer>

								</aside>
								
							</li>
							<li>

								<aside>

									<header>

										<h1>Name lorem ipsum dolor sit amet lorem ipsum dolor amet lorem ipsum dolor</h1>

										<p class="meta">Tag; tag</p>

									</header>

									<div>
										<p>
											First line of address only which may end up over two lines<br>
											Postcode
										</p>
									</div>

									<footer>

										<p>XX:XX - XX:XX</p>

										<p>Cost</p>

									</footer>

								</aside>
								
							</li>
						</ol>

					</li><!-- .orbit-slide -->

					<!-- ORBIT SLIDE -->
					<li class="orbit-slide">

						<ol class="listing">
							<li>

								<aside>

									<header>

										<h1>Name lorem ipsum dolor sit amet lorem ipsum dolor amet lorem ipsum dolor</h1>

										<p class="meta">Tag; tag</p>

									</header>

									<div>
										<p>
											First line of address only which may end up over two lines<br>
											Postcode
										</p>
									</div>

									<footer>

										<p>XX:XX - XX:XX</p>

										<p>Cost</p>

									</footer>

								</aside>
								
							</li>
							<li>

								<aside>

									<header>

										<h1>Name lorem ipsum dolor sit amet lorem ipsum dolor amet lorem ipsum dolor</h1>

										<p class="meta">Tag; tag</p>

									</header>

									<div>
										<p>
											First line of address only which may end up over two lines<br>
											Postcode
										</p>
									</div>

									<footer>

										<p>XX:XX - XX:XX</p>

										<p>Cost</p>

									</footer>

								</aside>
								
							</li>
							<li>

								<aside>

									<header>

										<h1>Name lorem ipsum dolor sit amet lorem ipsum dolor amet lorem ipsum dolor</h1>

										<p class="meta">Tag; tag</p>

									</header>

									<div>
										<p>
											First line of address only which may end up over two lines<br>
											Postcode
										</p>
									</div>

									<footer>

										<p>XX:XX - XX:XX</p>

										<p>Cost</p>

									</footer>

								</aside>
								
							</li>
						</ol>

					</li><!-- .orbit-slide -->

				</ul><!-- .orbit-container -->

			</div><!-- .orbit-wrapper -->

		</div><!-- .orbit -->

	</div><!-- .events -->

</div><!-- .callout-container -->