<?php
/**
 * The template used for displaying page content in home-hero.php
 * Used to call text and button content. Image called in header.php
 *
 * @package Impero Media 2015
 */
?>

<section id="contact">
	<h2>Get<span style="font-size: 75%; color: #bf1e2d;">in</span><span style="font-weight: 900">Touch</span></h2>

	<div class="container">
		<div class="row">
			<div class="contact_left col-xs-12 col-sm-6">
				<?php echo do_shortcode( '[formidable id="6"]' ); ?>
			</div>

			<div class="contact_right col-xs-12 col-sm-6">
				<h3>Impero<span style="color: #bf1e2d; font-weight: 900;">Media</span><span style="font-size: 75%;">LLC</span></h3>
				<hr>
				<h4>Las Vegas, Nevada</h4>
				<hr>
				<p><i class="fa fa-envelope-o"></i> <a style="margin-left: 7px;" href="info@imperomedia.com">Email Us</a></p>
				<hr>
				<p><i class="fa fa-phone"></i> <a style="margin-left: 7px;" href="tel:+15555551212">702.530.8127</a></p>
				<hr>


			</div>
		</div>
	</div>

</section>
