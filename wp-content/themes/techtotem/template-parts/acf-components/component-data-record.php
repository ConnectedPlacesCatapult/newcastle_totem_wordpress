<?php
/**
 * The template for displaying individual Urban Observatory data records
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */

// Get requested data sensor
if( isset( $_GET["sensor"] ) ) {

	$tt_get_data_sensor = $_GET["sensor"];

	$tt_sensor_single_name = $tt_data_sensors[$tt_get_data_sensor]["name"];
	$tt_sensor_single_label = $tt_data_sensors[$tt_get_data_sensor]["label"];
	$tt_sensor_single_reading = $tt_data_sensors[$tt_get_data_sensor]["reading"];
	$tt_sensor_single_unit = $tt_data_sensors[$tt_get_data_sensor]["units"];
	$tt_sensor_single_description = $tt_data_sensors[$tt_get_data_sensor]["description"];

	// get the data sensor source
	if( $tt_data_sensors[$tt_get_data_sensor]["local"] == 1 ) : 
	 	$tt_sensor_single_source = 'locale';
	else : 
	 	$tt_sensor_single_source = 'urban-obs';
	endif;

	// graph - where needed, map our data point to Urban Obs' one so that we can get the corresponding graph
	if( $tt_get_data_sensor === 'solar' ) :
		
		$tt_get_data_sensor = 'solar-radiation';
		
	elseif( $tt_get_data_sensor === 'wind' ) :
		
		$tt_get_data_sensor = 'wind-speed';
		//
	endif;
}
else {
	$tt_get_data_sensor = NULL;
}
//echo '<pre>'; print_r($tt_data_sensors[$tt_get_data_sensor]); echo '</pre>';

if( $tt_get_data_sensor !== NULL ) :
?>

	<div class="row white data-record">
		<div class="inner grid-container">

			<div class="grid-x grid-margin-x">

				<div class="cell large-5">

					<div class="locale-data label-data-<?php echo $tt_sensor_single_source; ?>">

						<a href="#">
							<img src="<?php echo get_template_directory_uri() . '/img/icons/min/sensor-' . $tt_sensor_single_name . '.svg'; ?>" width="110" height="110" alt="">
							<h2><?php echo $tt_sensor_single_label; ?></h2>
							<p><?php echo $tt_sensor_single_reading . $tt_sensor_single_unit; ?></p>
						</a>

					</div>

				</div>

				<div class="cell large-7">
					<h2><?php echo $tt_sensor_single_label; ?></h2>
					<p><?php echo $tt_sensor_single_description; ?></p>
				</div>

				<div class="sensor-graph cell large-12">
					<h2>Title</h2>
					<p><img src="http://uoweb3.ncl.ac.uk/tools/svg/variables/<?php echo $tt_get_data_sensor; ?>.svg"></p>
				</div>

				<div class="cell small-6">

					<ul class="key meta">
						<li class="label-data-locale">Data from current location</li>
						<li class="label-data-urban-obs">Data from other Urban Observatory sensors</li>
					</ul>

				</div>

				<div class="cell small-6">
					
					<p>
						<img src="<?php echo get_template_directory_uri() . '/img/logos/min/ukcric-logo.svg'; ?>" width="84" height="45" alt="UKCRIC">		
						<img src="<?php echo get_template_directory_uri() . '/img/logos/min/newcastleuni-logo.svg'; ?>" width="84" height="45" alt="Newcastle University">
					</p>

				</div>

			</div>

		</div><!-- .inner -->
	</div><!-- .row -->

<?php endif; ?>