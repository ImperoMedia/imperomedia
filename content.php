<?php
/**
 * @package Impero Media 2015
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="blog_meta">
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<h3><span style="font-weight: 600;">AUTHOR:</span> <span style="font-weight: 300; font-style: italic;"><?php the_author(); ?></span></h3>
			<h3><span style="font-weight: 600;">POSTED:</span> <span style="font-weight: 300; font-style: italic;"><?php the_time('jS F Y') ?></span></h3>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</div>

	<div class="blog_content">

		<div class="entry-content">
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'imperomedia15' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'imperomedia15' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<hr style="margin: 50px 0;">

	</div>
</article><!-- #post-## -->