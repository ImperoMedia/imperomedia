<?php
/**
 * The template used for displaying page content in home-hero.php
 * Used to call text and button content. Image called in header.php
 *
 * @package Impero Media 2015
 */
?>

<section id="services">

	<div class="container">

		<h2>Services<span style="color: #bf1e2d; font-weight: 900;">+</span><span style="font-weight: 900">Skills</span></h2>

		<div class="row"><!--ROW ONE-->
			<div class="col-lg-3">
				<div class="module">
					<div class="service_item">

						<a href="<?php the_field('service_1-4_url'); ?>">
							<i class="fa <?php the_field('service_icon_1-4'); ?> fa-5x"></i></a>

						<a href="<?php the_field('service_1-4_url'); ?>">
							<h3><?php the_field('service_1-4'); ?></h3>
						</a>

						<div class="service_desc_box">
							<div class="service_desc_text">
								<?php the_field('service_desc_1-4'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.col-lg-3 -->

			<div class="col-lg-3">
				<div class="module">
					<div class="service_item">

						<a href="<?php the_field('service_2-4_url'); ?>">
							<i class="fa <?php the_field('service_icon_2-4'); ?> fa-5x"></i></a>

						<a href="<?php the_field('service_2-4_url'); ?>">
							<h3><?php the_field('service_2-4'); ?></h3>
						</a>
						
						<div class="service_desc_box">
							<div class="service_desc_text">
								<?php the_field('service_desc_2-4'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.col-lg-3 -->

			<div class="col-lg-3">
				<div class="module">
					<div class="service_item">
						<a href="<?php the_field('service_3-4_url'); ?>">
							<i class="fa <?php the_field('service_icon_3-4'); ?> fa-5x"></i></a>

						<a href="<?php the_field('service_3-4_url'); ?>">
							<h3><?php the_field('service_3-4'); ?></h3>
						</a>

						<div class="service_desc_box">
							<div class="service_desc_text">
								<?php the_field('service_desc_3-4'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.col-lg-3 -->

			<div class="col-lg-3">
				<div class="module">
					<div class="service_item">
						<a href="<?php the_field('service_4-4_url'); ?>">
							<i class="fa <?php the_field('service_icon_4-4'); ?> fa-5x"></i></a>

						<a href="<?php the_field('service_4-4_url'); ?>">
							<h3><?php the_field('service_4-4'); ?></h3>
						</a>
						
						<div class="service_desc_box">
							<div class="service_desc_text">
								<?php the_field('service_desc_4-4'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.col-lg-3 -->
		</div>
</div>

</section>