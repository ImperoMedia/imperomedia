<?php
/**
 * The template used for displaying page content in home-hero.php
 * Used to call text and button content. Image called in header.php
 *
 * @package Impero Media 2015
 */
?>
<section id="work">
	<h2>Our<span style="font-weight: 900">Work</span></h2>
	<div class="container">

		<div class="row"><!--ROW ONE-->

			<!--BLR-->
			<div class="col-xs-12 col-sm-6 col-med-4 col-lg-4">
				<div class="view view-tenth">
					<img class="img-responsive" src="<?php the_field('image_1-1'); ?>">
					<div class="mask">
					<h3><?php the_field('port_1-1'); ?></h3>
					<p><?php the_field('port_desc_1-1'); ?></p>
					<a href="<?php the_field('port_link_1-1'); ?>" class="info">View Portfolio</a>
					</div>
				</div>
			</div>

			<!--Chunkysquare-->
			<div class="col-xs-12 col-sm-6 col-med-4 col-lg-4">
				<div class="view view-tenth">
					<img class="img-responsive" src="<?php the_field('image_2-1'); ?>">
					<div class="mask">
						<h3><?php the_field('port_2-1'); ?></h3>
						<p><?php the_field('port_desc_2-1'); ?></p>
						<a href="<?php the_field('port_link_2-1'); ?>" class="info">View Case Study</a>
					</div>
				</div>
			</div>

			<!--Ana Studios-->
			<div class="col-xs-12 col-sm-6 col-med-4 col-lg-4">
				<div class="view view-tenth">
					<img class="img-responsive" src="<?php the_field('image_3-1'); ?>">
					<div class="mask">
						<h3><?php the_field('port_3-1'); ?></h3>
						<p><?php the_field('port_desc_3-1'); ?></p>
						<a href="<?php the_field('port_link_3-1'); ?>" class="info">View Portfolio</a>
					</div>
				</div>
			</div>

			<!--Basies-->
			<div class="col-xs-12 col-sm-6 col-med-4 col-lg-4">
				<div class="view view-tenth">
					<img class="img-responsive" src="<?php the_field('image_1-2'); ?>">
					<div class="mask">
						<h3><?php the_field('port_1-2'); ?></h3>
						<p><?php the_field('port_desc_1-2'); ?></p>
						<a href="<?php the_field('port_link_1-2'); ?>" class="info">View Portfolio</a>
					</div>
				</div>
			</div>

			<!--TOT-->
			<div class="col-xs-12 col-sm-6 col-med-4 col-lg-4">
				<div class="view view-tenth">
					<img class="img-responsive" src="<?php the_field('image_2-2'); ?>">
					<div class="mask">
						<h3><?php the_field('port_2-2'); ?></h3>
						<p><?php the_field('port_desc_2-2'); ?></p>
						<a href="<?php the_field('port_link_2-2'); ?>" class="info">View Portfolio</a>
					</div>
				</div>
			</div>

			<!--Ambulatory-->
			<div class="col-xs-12 col-sm-6 col-med-4 col-lg-4">
				<div class="view view-tenth">
					<img class="img-responsive" src="<?php the_field('image_3-2'); ?>">
					<div class="mask">
						<h3><?php the_field('port_3-2'); ?></h3>
						<p><?php the_field('port_desc_3-2'); ?></p>
						<a href="<?php the_field('port_link_3-2'); ?>" class="info">View Portfolio</a>
					</div>
				</div>
			</div>
			<!-- /.col-lg-4 -->  
		</div>
	</div>
</section>