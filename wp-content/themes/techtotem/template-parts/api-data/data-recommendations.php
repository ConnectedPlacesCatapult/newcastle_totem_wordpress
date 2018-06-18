<?php
/**
 * The template part for displaying recommendations
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
	$tt_data_recommendations_url = $tt_json_path . '/recommendation-totem-' . $tt_totem_id . '.json';

	// put the contents of the files into variables
	$tt_data_recommendations_contents = file_get_contents( $tt_data_recommendations_url );

	// decode the JSON feed
	$tt_data_recommendations = json_decode( $tt_data_recommendations_contents );


/* VARS */

	// recommendation message
	$recom_msg = str_replace( '_', '<br>', $tt_data_recommendations[0]->action_msg );

	// weather forecast
	$weather_forecast = $tt_data_recommendations[0]->properties[0]->two_hour_weather_forecast;
	$rain_forecast = round( $tt_data_recommendations[0]->properties[0]->two_hour_rain_forecast );

	// categories
	$tt_category = strtolower( str_replace( ' ', '-', $tt_data_recommendations[0]->category ) );

	// sub-categories
	$tt_category_sub = strtolower( str_replace( ' ', '-', $tt_data_recommendations[0]->properties[0]->subcategory ) );

	// amenities
	$tt_amenities =  $tt_data_recommendations[0]->properties[0]->amenities;