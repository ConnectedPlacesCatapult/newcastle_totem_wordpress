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
	  border-radius: 30px;
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
	  border-radius: 30px;
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

/*	.leaflet-marker-icon,
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
	}*/
</style>

<!-- MAP -->
<div class="map">

	<script src='https://api.mapbox.com/mapbox.js/v3.1.1/mapbox.js'></script>
	<script src='<?php echo get_template_directory_uri() . "/js/min/SnakeAnim.js"; ?>'></script>
	<script src='<?php echo get_template_directory_uri() . "/js/min/leaflet.markercluster-src.js"; ?>'></script>
	<script src='<?php echo get_template_directory_uri() . "/js/min/leaflet-gesture-handling.js"; ?>'></script>

	<link href='<?php echo get_template_directory_uri() . "/css/min/leaflet-gesture-handling"; ?>' rel='text/css' />
	<link href='<?php echo get_template_directory_uri() . "/css/min/MarkerCluster.css"; ?>' rel='stylesheet' />
	<link href='<?php echo get_template_directory_uri() . "/css/min/MarkerCluster.Default.css"; ?>' rel='stylesheet' />
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
		var map = L.mapbox.map('map', 'https://api.mapbox.com/v3/mapbox.dark.json', {gestureHandling: true}).setView([54.976,-1.605], 13);
		// var map = L.mapbox.map("map", {
		//     center: [54.976,-1.605],
		//     zoom: 13,
		//     gestureHandling: true
		// });
		L.mapbox.styleLayer('mapbox://styles/thartnell/cjikda40704fg2rnp6cm5vsl4').addTo(map);

		document.getElementsByClassName( 'leaflet-control-attribution' )[0].style.display = 'none';

		var markers = L.markerClusterGroup({
			maxClusterRadius: 20,
			iconCreateFunction: function (cluster) {
				var markers = cluster.getAllChildMarkers();
				return L.icon({ iconUrl: "<?php echo get_template_directory_uri() . '/img/icons/min/group.svg'; ?>",
					iconSize: [50, 50]});
			},
		//Disable all of the defaults:
		spiderfyOnMaxZoom: true, showCoverageOnHover: false, zoomToBoundsOnClick: true
		});

		var markerList = [];

		recommendation[0].properties[0].amenities.forEach(function(element) {
			if (element.category == 'tranquility'){

				var icon = L.marker([element.coordinates[1], element.coordinates[0]], {
					  icon: L.divIcon({
					      className: 'circle-map-icon',
					      html: element.counter.toString()
					  })
					});

				icon.bindPopup(element.name);
				
				jQuery('#' + element.category).append('<li>' + element.name + '</li>');
				markerList.push(icon);
			}

			else if (element.category == 'attractions'){
				
				var icon = L.marker([element.coordinates[1], element.coordinates[0]], {
					  icon: L.divIcon({
					      className: 'circle-map-icon',
					      html: element.counter.toString()
					  })
					});

				icon.bindPopup(element.name);
				
				jQuery('#' + element.category).append('<li>' + element.name + '</li>');
				markerList.push(icon);
			}

			else if (element.category == 'culture'){
				
				var icon = L.marker([element.coordinates[1], element.coordinates[0]], {
					  icon: L.divIcon({
					      className: 'circle-map-icon',
					      html: element.counter.toString()
					  })
					});

				icon.bindPopup(element.name);

				jQuery('#' + element.category).append('<li>' + element.name + '</li>');
				markerList.push(icon);
			}

			else if (element.category == 'food_drinks'){

				var icon = L.marker([element.coordinates[1], element.coordinates[0]], {
					  icon: L.divIcon({
					      className: 'circle-map-icon',
					      html: element.counter.toString()
					  })
					});

				icon.bindPopup(element.name);

				jQuery('#' + element.category).append('<li>' + element.name + '</li>');
				markerList.push(icon);
			}

			else if (element.category == 'event'){

				var icon = L.marker([element.coordinates[1], element.coordinates[0]], {
					  icon: L.divIcon({
					      className: 'circle-map-icon-destination',
					      html: element.counter.toString()
					  })
					});

				icon.bindPopup(element.name);

				jQuery('#' + element.category).append('<li>' + element.name + '</li>');
				markerList.push(icon);
			}

		});

		// Destination

		if (recommendation[0].category == 'food_drinks'){
		    var destination_icon = L.icon({
		        iconUrl: "<?php echo get_template_directory_uri() . '/img/icons/min/category-food_drinks.svg'; ?>",
		        iconSize: [75, 75], // size of the icon
		        iconAnchor:   [22, 94] // offset of the icon
		        });

			var marker = L.marker([recommendation[0].coordinates[1], recommendation[0].coordinates[0]],
				{icon: destination_icon}).addTo(map);
			markerList.push(marker);
		} 

		else if (recommendation[0].category == 'tranquility'){
		    var destination_icon = L.icon({
		        iconUrl: "<?php echo get_template_directory_uri() . '/img/icons/min/category-tranquility.svg'; ?>",
		        iconSize: [75, 75], 
		        iconAnchor:   [22, 94]
		        });

			var marker = L.marker([recommendation[0].coordinates[1], recommendation[0].coordinates[0]],
				{icon: destination_icon});			
			markerList.push(marker);
		} 

		else if (recommendation[0].category == 'culture'){
		    var destination_icon = L.icon({
		        iconUrl: "<?php echo get_template_directory_uri() . '/img/icons/min/category-culture.svg'; ?>",
		        iconSize: [75, 75], 
		        iconAnchor:   [22, 94]
		        });

			var marker = L.marker([recommendation[0].coordinates[1], recommendation[0].coordinates[0]],
				{icon: destination_icon}).addTo(map);	
			markerList.push(marker);
		} 

		else if (recommendation[0].category == 'attractions'){
		    var destination_icon = L.icon({
		        iconUrl: "<?php echo get_template_directory_uri() . '/img/icons/min/category-attractions.svg'; ?>",
		        iconSize: [75, 75], 
		        iconAnchor:   [22, 94]
		        });

			var marker = L.marker([recommendation[0].coordinates[1], recommendation[0].coordinates[0]],
				{icon: destination_icon}).addTo(map);		
			markerList.push(marker);
		} 

		else if (recommendation[0].category == 'event'){
		    var destination_icon = L.icon({
		        iconUrl: "<?php echo get_template_directory_uri() . '/img/icons/min/category-event.svg'; ?>",
		        iconSize: [75, 75], 
		        iconAnchor:   [22, 94]
		        });

			var marker = L.marker([recommendation[0].coordinates[1], recommendation[0].coordinates[0]],
				{icon: destination_icon}).addTo(map);
			markerList.push(marker);
		} 

		// Totem location

	 //    var totem_icon = L.icon({
	 //        iconUrl: "<?php echo get_template_directory_uri() . '/img/icons/min/category-tranquility.svg'; ?>",
	 //        iconSize: [100, 100], // size of the icon
	 //        });

		// var marker = L.marker([recommendation[0].totem_coords[1], recommendation[0].totem_coords[0]],
		// 	{icon: totem_icon}).addTo(map);
		
		var icon = L.marker([recommendation[0].totem_coords[1], recommendation[0].totem_coords[0]], {
			  icon: L.divIcon({
			      className: 'circle-map-icon-destination',
			      html: 'T'
			  })
			});
		markerList.push(icon);


		// Add Markers to clustergroup
		markers.addLayers(markerList);
		map.addLayer(markers);

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

			var zoom_level = (map.fitBounds([
			    [minlat, minlng],
			    [maxlat, maxlng]]
			  ).getZoom()).toString();

			  map.setZoom(zoom_level);	
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

			var zoom_level = (map.fitBounds([
			    [minlat, minlng+0.0005],
			    [maxlat, maxlng]]
			  ).getZoom()).toString();

			map.setZoom(zoom_level);

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