<?php
/**
 * The template for displaying ACF Flexible Content - Custom Content
 *
 * @link https://www.advancedcustomfields.com/resources/flexible-content/
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */

// get colour palette
$tt_clr_palette = get_sub_field( 'tt_colour_scheme' );

// get colour palette
$tt_clr_palette = get_sub_field( 'tt_colour_scheme' );
if( $tt_clr_palette !== 'partner' ) : 
	$tt_row_clr = get_sub_field( 'tt_colour_scheme' );
else :
	$tt_row_clr = 'partner-clr';
	echo '<style type="text/css">.partner-clr { background-color: ' . get_field( 'tt_partner_colour', 'option' ) . '; }</style>';
endif;
?>

<div class="custom-content <?php echo $tt_row_clr; ?>">
	<div class="inner grid-container">

		<?php the_sub_field( 'tt_custom_content_copy' ); ?>

	</div><!-- .inner -->
</div><!-- .row -->