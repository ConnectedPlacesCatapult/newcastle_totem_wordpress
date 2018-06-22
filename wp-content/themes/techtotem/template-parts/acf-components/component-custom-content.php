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

/* COLOUR PALETTE */
include( locate_template( 'template-parts/lib/lib-color-palette.php' ) );
?>

<div class="custom-content <?php echo $tt_row_clr; ?>">
	<div class="inner grid-container">

		<?php the_sub_field( 'tt_custom_content_copy' ); ?>

	</div><!-- .inner -->
</div><!-- .row -->