<?php
/**
 * The template part for displaying the colour palette
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */

/* COLOUR PALETTE */

	// reset var
	$tt_clr_palette = '';

	/* Get colour palette */
	$tt_clr_palette = get_sub_field( 'tt_colour_scheme' );

	/* Partner colour scheme */
	if( $tt_clr_palette == 'partner' ) : 

		$tt_row_clr = 'partner-clr';
		echo '<style type="text/css">.partner-clr { background-color: ' . get_field( 'tt_partner_colour', 'option' ) . '; }</style>';

	/* Random colour scheme */
	elseif( $tt_clr_palette == 'random' ) : 
		
		// get the acf field
		$tt_clr_palette_field_key = 'field_5b11205f3792d';
		$tt_clr_palette_field = get_field_object( $tt_clr_palette_field_key );

		// create array to hold the colour values
		$tt_clr_palette = array();

		if( $tt_clr_palette_field ) : 

			foreach( $tt_clr_palette_field['choices'] as $key => $value ) : 
				array_push( $tt_clr_palette, $key );
			endforeach;

		endif;

		// remove unnecessary indexes from array (this is such a dirty way to do this. soz.)
		array_shift( $tt_clr_palette ); // Choose colour scheme
		array_shift( $tt_clr_palette ); // Partner's brand colour
		array_shift( $tt_clr_palette ); // Random
		array_shift( $tt_clr_palette ); // White
		//echo '<pre>'; print_r($tt_clr_palette); echo '<pre>';

		// randomly choose a colour
		$tt_clr_palette_random = array_rand( $tt_clr_palette, 1 );
		$tt_row_clr = $tt_clr_palette[$tt_clr_palette_random];

	/* Specific colour scheme */
	else : 

		$tt_row_clr = get_sub_field( 'tt_colour_scheme' );

	endif;