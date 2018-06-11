<?php
/**
 * The template for displaying Urban Observatory: Locale
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */
?>

<!-- ORBIT -->
<div class="orbit orbit-large" role="region" aria-label="Local sensor data" data-timer-delay="10000" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">

	<!-- ORBIT WRAPPER -->
	<div class="orbit-wrapper">

		<!-- ORBIT CONTROLS -->
		<div class="orbit-controls">

			<button class="orbit-previous"><img src="<?php echo get_template_directory_uri() . '/img/icons/min/chevron.svg'; ?>" width="26" height="10" alt=""></button>
			<button class="orbit-next"><img src="<?php echo get_template_directory_uri() . '/img/icons/min/chevron.svg'; ?>" width="26" height="10" alt=""></button>

		</div><!-- .orbit-controls -->

		<!-- ORBIT CONTAINER -->
		<ul class="orbit-container">

			<!-- ORBIT SLIDE -->
			<li class="orbit-slide">

				<ul class="gallery-grid">

					<li class="locale-data label-data-locale navy">

						<a href="<?php echo home_url( '/urban-observatory-data-record/' ); ?>?sensor=xxxx">

							<h2><i class="icon icon-placeholder"></i> Slide 1</h2>
							<p>75.3dB</p>

						</a>

					</li>

					<li class="locale-data label-data-urban-obs blue">

						<a href="<?php echo home_url( '/urban-observatory-data-record/' ); ?>?sensor=xxxx">

							<h2><i class="icon icon-placeholder"></i> Data Name</h2>
							<p>75.3dB</p>
							
						</a>

					</li>

					<li class="locale-data label-data-urban-obs blue">

						<a href="<?php echo home_url( '/urban-observatory-data-record/' ); ?>?sensor=xxxx">

							<h2><i class="icon icon-placeholder"></i> Data Name</h2>
							<p>75.3dB</p>
							
						</a>

					</li>

					<li class="locale-data label-data-locale navy">

						<a href="<?php echo home_url( '/urban-observatory-data-record/' ); ?>?sensor=xxxx">

							<h2><i class="icon icon-placeholder"></i> Data Name</h2>
							<p>75.3dB</p>
							
						</a>

					</li>

				</ul>

			</li><!-- .orbit-slide -->

			<!-- ORBIT SLIDE -->
			<li class="orbit-slide">				

				<ul class="gallery-grid">

					<li class="locale-data label-data-locale navy">

						<a href="<?php echo home_url( '/urban-observatory-data-record/' ); ?>?sensor=xxxx">

							<h2><i class="icon icon-placeholder"></i> Slide 2</h2>
							<p>75.3dB</p>

						</a>

					</li>

					<li class="locale-data label-data-urban-obs blue">

						<a href="<?php echo home_url( '/urban-observatory-data-record/' ); ?>?sensor=xxxx">

							<h2><i class="icon icon-placeholder"></i> Data Name</h2>
							<p>75.3dB</p>
							
						</a>

					</li>

					<li class="locale-data label-data-urban-obs blue">

						<a href="<?php echo home_url( '/urban-observatory-data-record/' ); ?>?sensor=xxxx">

							<h2><i class="icon icon-placeholder"></i> Data Name</h2>
							<p>75.3dB</p>
							
						</a>

					</li>

					<li class="locale-data label-data-locale navy">

						<a href="<?php echo home_url( '/urban-observatory-data-record/' ); ?>?sensor=xxxx">

							<h2><i class="icon icon-placeholder"></i> Data Name</h2>
							<p>75.3dB</p>
							
						</a>

					</li>

				</ul>

			</li><!-- .orbit-slide -->

		</ul><!-- .orbit-container -->

	</div><!-- .orbit-wrapper -->

</div><!-- .orbit -->


<div class="grid-x">

	<div class="cell small-6">

		<ul class="key meta">
			<li class="label-data-locale">Data from current location</li>
			<li class="label-data-urban-obs">Data from other Urban Observatory sensors</li>
		</ul>

	</div>

	<div class="cell small-6">
		
		<p>
			<img src="<?php echo get_template_directory_uri() . '/img/min/image-placeholder.svg'; ?>" width="84" height="45" alt="UKCRIC">		
			<img src="<?php echo get_template_directory_uri() . '/img/min/image-placeholder.svg'; ?>" width="84" height="45" alt="Newcastle University">
		</p>

	</div>

</div>