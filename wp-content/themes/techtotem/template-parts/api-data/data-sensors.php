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
	$tt_json_path = 'https://s3-eu-west-1.amazonaws.com/southside.tech.totem';

	// path to JSON file
	$tt_data_sensors_url = $tt_json_path . '/sensors-totem-' . $tt_totem_id . '.json';

	// put the contents of the files into variables
	$tt_data_sensors_contents = file_get_contents( $tt_data_sensors_url );

	// decode the JSON feed
	$tt_data_sensors = json_decode( $tt_data_sensors_contents, true );