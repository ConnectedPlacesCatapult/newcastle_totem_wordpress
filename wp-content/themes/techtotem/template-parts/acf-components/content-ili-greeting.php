<?php
/**
 * The template for displaying ILI: Greeting
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */


/* VARS */
$tt_recommed_cat_name = $tt_data_recommendations[0]->category;
$tt_recommend_msg = str_replace( '_', ' ', $tt_data_recommendations[0]->action_msg );
$tt_recommend_icn_path = get_template_directory_uri() . '/img/icons/min/category-' .  $tt_recommed_cat_name . '.svg';


/* SLIDER */
if( have_rows( 'tt_slider_slides' ) ) : ?>

	<p class="lead"><?php echo $tt_recommend_msg; ?></p>

	<img src="<?php echo get_template_directory_uri() . '/img/icons/min/map-path.svg'; ?>" width="507" height="173" class="map-path">

	<div class="cat-time">
		<img src="<?php echo $tt_recommend_icn_path; ?>" width="210" height="210" class="icon">
		<p>XX min walk</p>
	</div>

	<p class="more"><a href="<?php echo home_url( '/ili/' ); ?>" class="button">More</a></p>


<?php
/* REGULAR OL' ROW */
else : ?>

	<object type="image/svg+xml" data="<?php echo $tt_recommend_icn_path; ?>" width="110" height="110" class="icon"></object>

	<p class="lead <?php echo $tt_recommed_cat_name; ?>"><?php echo $tt_recommend_msg; ?></p>

<?php endif;