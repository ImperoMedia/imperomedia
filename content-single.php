<?php
/**
 * @package Impero Media 2015
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	
	<div class="service-img">
		<?php the_post_thumbnail( 'full' ); ?>	
	</div>
	
		<div class="entry-meta">
			<?php imperomedia15_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

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
		<?php imperomedia15_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
