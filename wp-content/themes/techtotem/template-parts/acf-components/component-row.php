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

/* COLOUR PALETTE */
include( locate_template( 'template-parts/lib/lib-color-palette.php' ) );

// get dynamic content selected for this row
$tt_content_component = get_sub_field( 'tt_dynamic_content' );
//echo $tt_content_component;
?>

<div class="row <?php echo $tt_row_clr . ' ' . $tt_content_component; ?>">
	<div class="inner grid-container">

		<?php include( locate_template( 'template-parts/acf-components/content-' . $tt_content_component . '.php' ) ); ?>

	</div><!-- .inner -->
</div><!-- .row -->