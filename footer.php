<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Impero Media 2015
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
				Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<link type="text/plain" rel="author" href="http://imperomedia.com/humans.txt" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.fittext.js"></script>

<script>
  $("#title1").fitText(1, { minFontSize: '48px', maxFontSize: '100px' });
  $("#desc_text").fitText(1, { minFontSize: '12px', maxFontSize: '20px' });
</script>

<?php wp_footer(); ?>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</body>
</html>