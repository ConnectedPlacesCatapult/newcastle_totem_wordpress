<?php
/**
 * The template for displaying map from Mapbox
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */
?>

<!-- MAP -->
<div class="map">
	<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.45.0/mapbox-gl.js'></script>
	<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.45.0/mapbox-gl.css' rel='stylesheet' />

	<div id="map" style="width: 100%; height: 990px;"></div>
	<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoidGhhcnRuZWxsIiwiYSI6Im9RUHozYjQifQ.Rk3QrG_ymHOt9Jndsq_8Yg';
	var map = new mapboxgl.Map({
	    container: 'map',
	    style: 'mapbox://styles/thartnell/cjh210gkj0quk2rqhgzwyi7cf',
	    center: [-1.605, 54.976],
	    zoom: 13,
	});
	</script>


	<!-- JOURNEY TIME -->
	<nav class="journey-time button-group">
		<button class="button"><i class="icon route_brisk"></i> 7 <abbr title="minutes">mins</abbr></button>
		<button class="button"><i class="icon route_curious"></i> 15 <abbr title="minutes">mins</abbr></button>
		<button class="button"><i class="icon route_leisure"></i> 20 <abbr title="minutes">mins</abbr></button>
	</nav><!-- .journey-time-->

</div><!-- .map -->