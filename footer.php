<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Museum_Ground
 */

?>

	</div><!-- #content -->

	<div class="footer-wrapper">
		<footer id="footer-sidebar" class="widget-area">
			<div id="footer-sidebar1">
				<?php
					if(is_active_sidebar('footer-sidebar-1')){
						dynamic_sidebar('footer-sidebar-1');
					}
				?>
			</div>
		</footer>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<div class="container">
					<span class="copyright">©<?php echo date(Y);?> The Museum Ground. All rights reserved. Developed by <a href="www.pentamint.com">Pentamint</a></span>
				</div><!-- .row -->
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- .footer-wrapper -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
