<?php
/**
 * The template used for displaying page content in home-hero.php
 * Used to call text and button content. Image called in header.php
 *
 * @package Impero Media 2015
 */
?>

<section id="cases">

	<div class="case_top_container">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="case_who_img">
			<img src="<?php the_field('case_img_main'); ?>" />
		</div>

		<header class="entry-header">
			<h1><?php the_field('client_name'); ?></h1>
			<h2>A Case Study</h2>
			<hr>
		</header><!-- .entry-header -->
			<h3><?php the_field('case_subheadline'); ?></h2>
			<hr>
	</div>

	<div id="page-primary" class="content-area">
		<div class="case_content">
			<div class"case_who_container">
				<div class"case_who_details">
					<h3>Who?</h3>
					<h4>Who was the client and what was the scope of the project?</h4>
					<p><?php the_field('case_who'); ?></p>
					<hr>
				</div>

				
			</div>

			<div class"case_more_container">
				<div class"case_more_details">
					<h3>What?</h3>
					<h4>What are the technical aspects of the site? What is the core software and what kind of code/software/etc. is in there?</h4>
					<p><?php the_field('case_what'); ?></p>
					<hr>
					<h3>How?</h3>
					<h4>What was the workflow and process for how this site was built?</h4>
					<p><?php the_field('case_how'); ?></p>
					<hr>
					<h3>Why?</h3>
					<h4>Were there any big decisions that had to be made?</h4>
					<p><?php the_field('case_why'); ?></p>
					<hr>
					<h3>When?</h3>
					<h4>When did we work on this?</h4>
					<p><?php the_field('case_when'); ?></p>
					<hr>
				</div>

				<img src="<?php the_field('case_img_inner'); ?>" />
				<img src="<?php the_field('case_img_bonus'); ?>" />

			</div>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'imperomedia15' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->


		<footer class="entry-footer">
			
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->

</section>