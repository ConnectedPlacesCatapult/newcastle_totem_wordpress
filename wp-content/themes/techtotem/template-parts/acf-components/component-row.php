<?php
/**
 * The template for displaying ACF Flexible Content - Preformatted Component
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

// get dynamic content selected for this row
$tt_content_component = get_sub_field( 'tt_dynamic_content' );
//echo $tt_content_component;
?>

<div class="row <?php echo $tt_clr_palette . ' ' . $tt_content_component; ?>">
	<div class="inner grid-container">

		<?php include( locate_template( 'template-parts/acf-components/content-' . $tt_content_component . '.php' ) ); ?>

	</div><!-- .inner -->
</div><!-- .row -->