<?php
/**
 * The template part for displaying sensors
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */


/* API DATA IN JSON FORMAT */

	// get totem id
	$tt_totem_id = get_current_blog_id();

	// path to json file
	$tt_json_path = 'https://s3-eu-west-2.amazonaws.com/newcastle.tech.totem';

	// path to JSON file
	$tt_data_sensors_url = $tt_json_path . '/sensors-totem-' . $tt_totem_id . '.json';

	// put the contents of the files into variables
	$tt_data_sensors_contents = file_get_contents( $tt_data_sensors_url );

	// decode the JSON feed
	$tt_data_sensors = json_decode( $tt_data_sensors_contents, true );


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


/* RANDOM DATA SENSOR */

	// get random index from sensor data array
	$tt_data_sensor_randomise = array_rand($tt_data_sensors);

	// create var to hold randomly selected sensor data
	$tt_data_sensor_random = $tt_data_sensors[$tt_data_sensor_randomise];
	//echo '<pre>'; print_r($tt_data_sensor_random); echo '</pre>';
	//echo $tt_data_sensor_random["label"];

	// vars
	$tt_sensor_random_name = $tt_data_sensor_random["name"];
	$tt_sensor_random_label = $tt_data_sensor_random["label"];
	$tt_sensor_random_reading = $tt_data_sensor_random["reading"];
	$tt_sensor_random_unit = $tt_data_sensor_random["units"];
	$tt_sensor_random_updated =  date( "d M Y, h:ia", $tt_data_sensor_random["timestamp"]);
	$tt_sensor_random_tagline = $tt_data_sensor_random["tagline"];
	$tt_sensor_random_source = $tt_data_sensor_random["source"];