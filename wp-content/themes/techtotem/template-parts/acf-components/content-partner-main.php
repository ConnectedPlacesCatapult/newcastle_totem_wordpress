<?php
/**
 * The template for displaying Partner: Page/Slide
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */
?>


<h2 class="section-label left" style="background-color: <?php the_field( 'tt_partner_colour', 'option' ); ?>">
	<img src="<?php the_field( 'tt_partner_logo', 'option' ); ?>" class="icon">
</h2>

<div class="gallery">

	<style type="text/css">
		.gallery .button { 
			border-color: <?php the_field( 'tt_partner_colour', 'option' ); ?>;
			color: <?php the_field( 'tt_partner_colour', 'option' ); ?>;
		}
	</style>


	<?php
	// what type of content?
	if( get_field( 'tt_partner_slide_content_type' , 'option' ) == 'simple' ) : 

		// simple content
		the_field( 'tt_partner_slide__wysiwyg', 'option' );

	elseif( get_field( 'tt_partner_teaser_content_type' , 'option' ) == 'complex' ) : 

		// simple content
		the_field( 'tt_partner_slide_code', 'option' );

	else : 

		echo '<p>Sorry, not content to display.</p>';

	endif;
	?>

</div>