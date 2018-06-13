<?php
/**
 * The template for displaying Partner: Teaser
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */
?>

<h2 class="section-label right" style="background-color: <?php the_field( 'tt_partner_colour', 'option' ); ?>">
	<img src="<?php the_field( 'tt_partner_logo', 'option' ); ?>" class="icon">
</h2>

<?php
// what type of content?
if( get_field( 'tt_partner_teaser_content_type' , 'option' ) == 'simple' ) : 

	// simple content
	the_field( 'tt_partner_teaser_wysiwyg', 'option' );

elseif( get_field( 'tt_partner_teaser_content_type' , 'option' ) == 'complex' ) : 

	// simple content
	the_field( 'tt_partner_teaser_code', 'option' );

else : 

	echo '<p>Sorry, not content to display.</p>';

endif;