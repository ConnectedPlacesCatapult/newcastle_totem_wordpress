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

<style>
	.circle-map-icon{
	  width: 24px !important;
	  height: 24px !important;
	  margin-left: -12px;
	  margin-top: -12px;
	  border-radius: 18px;
	  border: 2px solid #E71D73;
	  text-align: center;
	  color: #fff;
	  background-color: #E71D73;
	  font-size: 16px;
	}
	.circle-map-icon-destination{
	  width: 24px !important;
	  height: 24px !important;
	  margin-left: -12px;
	  margin-top: -12px;
	  border-radius: 25px;
	  border: 2px solid #00B2B6;
	  text-align: center;
	  color: #fff;
	  background-color: #00B2B6;
	  font-size: 16px;
	}
	.my_polyline { 
	  stroke: #E71D73;
	  fill: none;
	  stroke-width: 7;  
	  -webkit-animation: fadein 1s; /* Safari, Chrome and Opera > 12.1 */
	  -moz-animation: fadein 1s; /* Firefox < 16 */
	  -ms-animation: fadein 1s; /* Internet Explorer */
	  -o-animation: fadein 1s; /* Opera < 12.1 */
	  animation: fadein 1s;
	}
	.leaflet-marker-icon,
	.leaflet-marker-shadow {
	  -webkit-animation: fadein 3s; /* Safari, Chrome and Opera > 12.1 */
	  -moz-animation: fadein 3s; /* Firefox < 16 */
	  -ms-animation: fadein 3s; /* Internet Explorer */
	  -o-animation: fadein 3s; /* Opera < 12.1 */
	  animation: fadein 3s;
	}

	@keyframes fadein {
	    from { opacity: 0; }
	    to   { opacity: 1; }
	}

	/* Firefox < 16 */
	@-moz-keyframes fadein {
	    from { opacity: 0; }
	    to   { opacity: 1; }
	}

	/* Safari, Chrome and Opera > 12.1 */
	@-webkit-keyframes fadein {
	    from { opacity: 0; }
	    to   { opacity: 1; }
	}

	/* Internet Explorer */
	@-ms-keyframes fadein {
	    from { opacity: 0; }
	    to   { opacity: 1; }
	}

	/* Opera < 12.1 */
	@-o-keyframes fadein {
	    from { opacity: 0; }
	    to   { opacity: 1; }
	}
</style>

<!-- MAP -->
<div class="map">

	<script src='https://api.mapbox.com/mapbox.js/v3.1.1/mapbox.js'></script>
	<script src='<?php echo get_template_directory_uri() . "/js/min/SnakeAnim.js"; ?>'></script>
	<link href='https://api.mapbox.com/mapbox.js/v3.1.1/mapbox.css' rel='stylesheet' />

	<!-- JOURNEY TIME -->
	<nav class="journey-time button-group">

		<button class="button" id="route_direct">
			<img src="<?php echo get_template_directory_uri() . '/img/icons/min/map-route-direct.svg' ?>" width="160" height="50" class="icon"> 
			<span>7 <abbr title="minutes">mins</abbr></span>
		</button>
		<button class="button" id="route_leisure">
			<img src="<?php echo get_template_directory_uri() . '/img/icons/min/map-route-leisure.svg' ?>" width="160" height="50" class="icon"> 
			<span>15 <abbr title="minutes">mins</abbr></span>
		</button>
		<button class="button" id="route_curious">
			<img src="<?php echo get_template_directory_uri() . '/img/icons/min/map-route-curious.svg' ?>" width="160" height="50" class="icon"> 
			<span>20 <abbr title="minutes">mins</abbr></span>
		</button>

	</nav><!-- .journey-time-->

	<!-- Mapbox -->
	<div id="map" style="width: 100%; height: 990px;"></div>

		<script>
		// Get the json data
		var recommendation = <?php echo json_encode( $tt_data_recommendations ); ?>;

		L.mapbox.accessToken = 'pk.eyJ1IjoidGhhcnRuZWxsIiwiYSI6Im9RUHozYjQifQ.Rk3QrG_ymHOt9Jndsq_8Yg';
		var map = L.mapbox.map('map').setView([54.976,-1.605], 13);
		L.mapbox.styleLayer('mapbox://styles/thartnell/cjikda40704fg2rnp6cm5vsl4').addTo(map);

		// In case we are using the icons
	    // var tranquility_icon = L.icon({
	    //     iconUrl: "<?php //echo get_template_directory_uri() . '/img/icons/min/category-tranquility.svg'; ?>",
	    //     iconSize: [38, 95], // size of the icon
	    //     });

		var icon_counter = 1;
		recommendation[0].properties[0].amenities.forEach(function(element) {
			if (element.category == 'tranquility'){

				// In case we are using the icons
				// var marker = L.marker([element.coordinates[1], element.coordinates[0]],
				// 	{icon: tranquility_icon}).addTo(map);

				var icon = L.marker([element.coordinates[1], element.coordinates[0]], {
					  icon: L.divIcon({
					      className: 'circle-map-icon',
					      html: icon_counter.toString()
					  })
					}).addTo(map);

				icon.bindPopup(element.name);
				
				jQuery('#' + element.category).append('<li>' + element.name + '</li>');

				icon_counter = icon_counter +1;
			}

			else if (element.category == 'attractions'){
				
				var icon = L.marker([element.coordinates[1], element.coordinates[0]], {
					  icon: L.divIcon({
					      className: 'circle-map-icon',
					      html: icon_counter.toString()
					  })
					}).addTo(map);

				icon.bindPopup(element.name);
				
				jQuery('#' + element.category).append('<li>' + element.name + '</li>');

				icon_counter = icon_counter +1;
			}

			else if (element.category == 'culture'){
				
				var icon = L.marker([element.coordinates[1], element.coordinates[0]], {
					  icon: L.divIcon({
					      className: 'circle-map-icon',
					      html: icon_counter.toString()
					  })
					}).addTo(map);

				icon.bindPopup(element.name);

				jQuery('#' + element.category).append('<li>' + element.name + '</li>');

				icon_counter = icon_counter +1;
			}

			else if (element.category == 'food_drinks'){

				var icon = L.marker([element.coordinates[1], element.coordinates[0]], {
					  icon: L.divIcon({
					      className: 'circle-map-icon',
					      html: icon_counter.toString()
					  })
					}).addTo(map);

				icon.bindPopup(element.name);

				jQuery('#' + element.category).append('<li>' + element.name + '</li>');
				
				icon_counter = icon_counter +1;
			}

		});

		// Destination
		var icon = L.marker([recommendation[0].coordinates[1], recommendation[0].coordinates[0]], {
			  icon: L.divIcon({
			      className: 'circle-map-icon-destination',
			      html: '1'
			  })
			}).addTo(map);
		icon.bindPopup(recommendation[0].name);

		// Totem location
		var icon = L.marker([recommendation[0].totem_coords[1], recommendation[0].totem_coords[0]], {
			  icon: L.divIcon({
			      className: 'circle-map-icon-destination',
			      html: 'T'
			  })
			}).addTo(map);

		zoomToAmenities();

		// Button handlers
		var button_class = document.getElementsByClassName("button");

		var ButtonHandler = function() {
		    var route_id = this.getAttribute("id");
		    var polylinePoints = [];

			var polyline = L.polyline([]);

		    if (route_id == 'route_direct'){
		    	clearMap();
		    	recommendation[0].properties[0].route_direct.forEach(function(element) {		
	        	polylinePoints.push(new L.LatLng(element[0], element[1]));
				}); 
				var polyline = L.polyline(polylinePoints, { className: 'my_polyline', snakingSpeed: 200 }).addTo(map).snakeIn();
           		zoomToPolyline(polylinePoints);
		    }
		    else if (route_id == 'route_leisure'){
		    	clearMap();
		    	recommendation[0].properties[0].route_leisure.forEach(function(element) {		
	        	polylinePoints.push(new L.LatLng(element[0], element[1]));
				}); 
				var polyline = L.polyline(polylinePoints, { className: 'my_polyline', snakingSpeed: 300 }).addTo(map).snakeIn();
           		zoomToPolyline(polylinePoints);
		    }
		    else if (route_id == 'route_curious'){
		    	clearMap();
		    	recommendation[0].properties[0].route_curious.forEach(function(element) {		
	        	polylinePoints.push(new L.LatLng(element[0], element[1]));
				}); 
				var polyline = L.polyline(polylinePoints, { className: 'my_polyline', snakingSpeed: 300 }).addTo(map).snakeIn();
           		zoomToPolyline(polylinePoints);
		    }
		};

		for (var i = 0; i < button_class.length; i++) {
		    button_class[i].addEventListener('click', ButtonHandler, false);
		}


		function zoomToAmenities(){
			var lats = []; var lons = []; 
			recommendation[0].properties[0].amenities.forEach(function(element) {
			lats.push(element.coordinates[1]);
			lons.push(element.coordinates[0]);	
			});
			// calc the min and max lng and lat
			var minlat = Math.min.apply(null, lats),
			  maxlat = Math.max.apply(null, lats);
			var minlng = Math.min.apply(null, lons),
			  maxlng = Math.max.apply(null, lons);

			// totem point 
			var point = L.latLng(recommendation[0].totem_coords[1], recommendation[0].totem_coords[0]);

			var zoom_level = (map.fitBounds([
			    [minlat, minlng],
			    [maxlat, maxlng]]
			  ).getZoom()-1.1 ).toString();	
		}

		// Gets the extend of route and adjusts the zoom level
		function zoomToPolyline(polylinePoints){
			var lats = []; var lons = []; 
			polylinePoints.forEach(function(element) {
				lats.push(element.lat);
				lons.push(element.lng);
				});
			
			// calc the min and max lng and lat
			var minlat = Math.min.apply(null, lats),
			  maxlat = Math.max.apply(null, lats);
			var minlng = Math.min.apply(null, lons),
			  maxlng = Math.max.apply(null, lons);

			// totem point 
			var point = L.latLng(recommendation[0].totem_coords[1], recommendation[0].totem_coords[0]);

			var zoom_level = (map.fitBounds([
			    [minlat, minlng],
			    [maxlat, maxlng]]
			  ).getZoom()-1.1 ).toString();	

		}

		// Clears map when replotting route
		function clearMap(){
		    for(i in map._layers){        
		        if(map._layers[i]._path != undefined)
		        {
		            try{
		                map.removeLayer(map._layers[i]);
		            }
		            catch(e){
		                console.log("problem with " + e + map._layers[i]);
		            }
		        }
		    }
		}

		
		</script>


</div><!-- .map -->