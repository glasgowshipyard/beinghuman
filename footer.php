<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Being_Human
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="copyright">Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></div>
			<div class"made-by"><?php printf( esc_html__( 'Hand Built by %2$s.', 'beinghuman' ), 'beinghuman', '<a href="http://glasgowshipyard.com" rel="designer">Glasgow Shipyard</a>' ); ?></div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>