<?php
/**
 * Template Name: Front Page
 *
 * @package Impero Media 2015
 */

get_header(); ?>

				<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'section', 'intro' );
							get_template_part( 'section', 'about' ); 
							get_template_part( 'section', 'work' );
							get_template_part( 'section', 'services' ); 
							get_template_part( 'section', 'contact' );
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

<?php get_footer(); ?>