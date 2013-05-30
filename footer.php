<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package doughnut
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer d_wrap type_footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'doughnut_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'dough' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'dough' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'dough' ), 'Doughnut', '<a href="http://usefulparadigm.com/" rel="designer">UsefulParadigm</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>