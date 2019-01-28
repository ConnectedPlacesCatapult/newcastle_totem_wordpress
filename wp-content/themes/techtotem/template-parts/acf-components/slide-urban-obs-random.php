<?php
/**
 * The template for displaying Urban Observatory: Random Data
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */


	
?>


<div class="card">

	<div class="cell">

		<img src="<?php echo get_template_directory_uri() . '/img/icons/min/sensor-' . $tt_sensor_random_name . '.svg'; ?>" width="220" height="220" alt="">

		<div class="card-section">

			<h3><?php echo $tt_sensor_random_label; ?></h3>

			<p><?php echo $tt_sensor_random_reading . $tt_sensor_random_unit; ?></p>

			<p class="meta">Last updated <?php echo $tt_sensor_random_updated; ?>*</p>

			<p class="lead"><?php echo $tt_sensor_random_tagline; ?></p>

			<p class="more"><a href="<?php echo home_url( '/urban-observatory/' ); ?>" class="button">More</a></p>

			<p class="meta">* Source: <?php echo $tt_sensor_random_source; ?></p>

		</div>

	</div>

</div>