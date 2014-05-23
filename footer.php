<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cornerstone
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'cs' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'cs' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'cs' ), 'cornerstone', '<a href="http://andrewbacon.net" rel="designer">Andrew Bacon</a>' ); ?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
