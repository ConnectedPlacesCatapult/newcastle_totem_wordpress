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

	<!-- MAP KEY -->
	<div class="map-key grid-x">

		<div class="cell small-3">

			<h2>
				<img src="<?php echo get_template_directory_uri() . '/img/icons/min/category-tranquility.svg'; ?>" width="41" height="41" class="icon">
				Tranquility
			</h2>

			<ol class="listing" id="tranquility"></ol>

		</div>

		<div class="cell small-3">

			<h2>
				<img src="<?php echo get_template_directory_uri() . '/img/icons/min/category-attractions.svg'; ?>" width="41" height="41" class="icon">
				Attractions
			</h2>

			<ol class="listing" id="attractions"></ol>

		</div>

		<div class="cell small-3">

			<h2>
				<img src="<?php echo get_template_directory_uri() . '/img/icons/min/category-culture.svg'; ?>" width="41" height="41" class="icon">
				Culture
			</h2>

			<ol class="listing" id="culture"></ol>

		</div>

		<div class="cell small-3">

			<h2>
				<img src="<?php echo get_template_directory_uri() . '/img/icons/min/category-food_drinks.svg'; ?>" width="41" height="41" class="icon">
				Food & Drink
			</h2>

			<ol class="listing" id="food_drinks"></ol>

		</div>

		<div class="cell small-12">
			<p class="tiny">Data source: DarkSky, EventBrite, GooglePlaces, Meetup, Foursquare and OpenStreetMap.</p>
		</div>

	</div><!-- .key -->
	
	<?php
	/* MAP */
	include( locate_template( 'template-parts/acf-components/content-locale-map.php' ) );
	?>

</aside><!-- .map-container -->

<!-- CALLOUT CONTAINER -->
<div class="callout-container">

	<!-- WEATHER -->
	<aside class="callout weather <?php echo $weather_forecast; ?>">
		<h2>1 hour forecast</h2>
		<img src="<?php echo get_template_directory_uri() . '/img/icons/min/weather-' .  $weather_forecast . '.svg' ?>" width="175" height="195" class="icon">
		<p><?php echo $rain_forecast; ?>% chance of rain</p>
	</aside><!-- .weather -->	
	
	<?php
	/* EVENTS */
	include( locate_template( 'template-parts/acf-components/content-locale-events.php' ) );
	?>

</div><!-- .callout-container -->