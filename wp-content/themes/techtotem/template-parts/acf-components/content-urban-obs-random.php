<?php
/**
 * The template for displaying Urban Observatory: Random Data
 *
 * @package TechTotem
 * @subpackage TechTotem_Theme
 * @since 1.0
 * @version 1.0
 */


/* SLIDER */
if( have_rows( 'tt_slider_slides' ) ) : ?>

	<div class="card">

		<div class="cell">

			<a href="#">

				<img src="<?php echo get_template_directory_uri() . '/img/icons/min/icon-placeholder.svg'; ?>" width="220" height="220" alt="">

				<div class="card-section">

					<h3>Lorem ipsum</h3>

					<p>Lorem ipsum dolor sit</p>

					<p class="meta">Last updated 10 minutes ago*</p>

					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

					<p class="more"><a href="<?php echo home_url( '/urban-observatory/' ); ?>" class="button">More</a></p>

					<p class="meta">* Source: Urban Observatory sensors inside this totem.</p>

				</div>

			</a>

		</div>

	</div>


<?php
/* REGULAR OL' ROW */
else : ?>

	<h2 class="section-label left"><img src="<?php echo get_template_directory_uri() . '/img/logos/min/urbanobservatory-logo.svg'; ?>" width="203" height="31" alt="Urban Observatory"></h2>

	<div class="card grid-x">

		<div class="cell large-6 large-offset-6">

			<a href="#">

				<img src="<?php echo get_template_directory_uri() . '/img/icons/min/icon-placeholder.svg'; ?>" width="160" height="160" alt="">

				<div class="card-section">

					<h3>Lorem ipsum</h3>
					<p>Lorem ipsum dolor sit</p>

				</div>

			</a>

		</div>

	</div>

<?php endif;