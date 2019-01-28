<?php
/**
 * The template for displaying ILI: Greeting
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */
?>


<p class="lead"><?php echo $recom_msg; ?></p>

<div class="greeting-icons">

	<img src="<?php echo get_template_directory_uri() . '/img/icons/min/map-path.svg'; ?>" width="507" height="173" class="map-path">

	<div class="cat-time">
		<img src="<?php echo get_template_directory_uri() . '/img/icons/min/category-' .  $tt_category . '.svg'; ?>" width="210" height="210" class="icon">
		<p>7 min walk</p>
	</div>

</div>

<p class="more"><a href="<?php echo home_url( '/ili/' ); ?>" class="button">More</a></p>