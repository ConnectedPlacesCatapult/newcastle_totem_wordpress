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


<h2 class="section-label left"><img src="<?php echo get_template_directory_uri() . '/img/logos/min/urbanobservatory-logo.svg'; ?>" width="203" height="31" alt="Urban Observatory"></h2>

<div class="card grid-x">

	<div class="cell large-6 large-offset-6">

		<a href="<?php echo home_url( '/urban-observatory/' ); ?>">

			<img src="<?php echo get_template_directory_uri() . '/img/icons/min/sensor-' . $tt_sensor_random_name . '.svg'; ?>" width="160" height="160" alt="">

			<div class="card-section">

				<h3><?php echo $tt_sensor_random_label; ?></h3>
				<p><?php echo $tt_sensor_random_tagline; ?></p>

			</div>

		</a>

	</div>

</div>