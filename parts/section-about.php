<?php
/**
 * The template used for displaying page content in home-hero.php
 * Used to call text and button content. Image called in header.php
 *
 * @package Impero Media 2015
 */
?>

<section id="about">

	<div class="container">

		<h2><?php bloginfo( 'description' ); ?></h2>

			<div class="about_box">

				<p><?php the_field('home_about_copy') ; ?></p>

			</div>

	</div>

</section>