<?php
/**
 * The template used for displaying page content in home-hero.php
 * Used to call text and button content. Image called in header.php
 *
 * @package Impero Media 2015
 */
?>

<section id="intro">

	<div class="container">

		<div class="hero_content animated fadeIn">

			<div class="intro_headline"><h2><?php the_field ('intro_headline') ; ?></h2>

			<div class="intro_content">

				<h3><?php the_field ('intro_sub_headline_1') ; ?></h3>

				<h4><?php the_field ('intro_sub_headline_2') ; ?></h4>

			</div>

			<a href="<?php the_field ('intro_btn_1_link') ; ?>" class="btn dark"><?php the_field ('intro_btn_1_copy') ; ?></a>

			<a href="<?php the_field ('intro_btn_2_link') ; ?>" class="btn red"><?php the_field ('intro_btn_2_copy') ; ?></a>

		</div>

	</div>

</section>