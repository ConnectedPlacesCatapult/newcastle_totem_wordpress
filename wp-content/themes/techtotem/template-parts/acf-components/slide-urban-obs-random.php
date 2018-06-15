<?php
/**
 * The template for displaying Urban Observatory: Random Data
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */


// get random index from sensor data array
$tt_data_sensor_randomise = array_rand($tt_data_sensors);

// create var to hold randomly selected sensor data
$tt_data_sensor_random = $tt_data_sensors[$tt_data_sensor_randomise];
//echo '<pre>'; print_r($tt_data_sensor_random); echo '</pre>';
//echo $tt_data_sensor_random["label"];

// last updated
$tt_data_sensor_random_lastupdated =  date( "d M Y, h:ia", $tt_data_sensor_random["timestamp"]);	
?>


<div class="card">

	<div class="cell">

		<img src="<?php echo get_template_directory_uri() . '/img/icons/min/sensor-' . $tt_data_sensor_random["name"] . '.svg'; ?>" width="220" height="220" alt="">

		<div class="card-section">

			<h3><?php echo $tt_data_sensor_random["label"]; ?></h3>

			<p><?php echo $tt_data_sensor_random["reading"] . $tt_data_sensor_random["unit"]; ?></p>

			<p class="meta">Last updated <?php echo $tt_data_sensor_random_lastupdated; ?>*</p>

			<p class="lead"><?php echo $tt_data_sensor_random["tagline"]; ?></p>

			<p class="more"><a href="<?php echo home_url( '/urban-observatory/' ); ?>" class="button">More</a></p>

			<p class="meta">* <?php echo $tt_data_sensor_random["source"]; ?></p>

		</div>

	</div>

</div>