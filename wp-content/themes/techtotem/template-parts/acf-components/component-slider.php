<?php
/**
 * The template for displaying ACF Flexible Content - Slider Component
 *
 * @link https://www.advancedcustomfields.com/resources/flexible-content/
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */
?>

<div class="slider <?php echo $tt_clr_palette; ?>">
	<div class="inner grid-container">

		<!-- ORBIT -->
		<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>

			<!-- ORBIT WRAPPER -->
			<div class="orbit-wrapper">

				<!-- ORBIT CONTAINER -->
				<ul class="orbit-container">

					<li class="orbit-slide">
						<img class="orbit-image" src="https://placehold.it/1200x600/999?text=Slide-1" alt="Space">
					</li>

					<li class="orbit-slide">
						<figure class="orbit-figure">
							<img class="orbit-image" src="https://placehold.it/1200x600/888?text=Slide-2" alt="Space">
							<figcaption class="orbit-caption">Lets Rocket!</figcaption>
						</figure>
					</li>

					<li class="orbit-slide">
						<figure class="orbit-figure">
							<img class="orbit-image" src="https://placehold.it/1200x600/777?text=Slide-3" alt="Space">
							<figcaption class="orbit-caption">Encapsulating</figcaption>
						</figure>
					</li>

					<li class="orbit-slide">
						<figure class="orbit-figure">
							<img class="orbit-image" src="https://placehold.it/1200x600/666&text=Slide-4" alt="Space">
							<figcaption class="orbit-caption">Outta This World</figcaption>
						</figure>
					</li>

				</ul><!-- .orbit-container -->

			</div><!-- .orbit-wrapper -->

		</div><!-- .orbit -->

	</div><!-- .inner -->
</div><!-- .slider -->