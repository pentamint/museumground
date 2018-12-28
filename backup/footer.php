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

	<div id="footer-sidebar" class="secondary">
		<div id="footer-sidebar1">
			<?php
				if(is_active_sidebar('footer-sidebar-1')){
					dynamic_sidebar('footer-sidebar-1');
				}
			?>
		</div>
		<div id="footer-sidebar2">
			<?php
				if(is_active_sidebar('footer-sidebar-2')){
					dynamic_sidebar('footer-sidebar-2');
				}
			?>
		</div>
		<div id="footer-sidebar3">
			<?php
				if(is_active_sidebar('footer-sidebar-3')){
					dynamic_sidebar('footer-sidebar-3');
			}
			?>
		</div>
		<div id="footer-sidebar4">
			<?php
				if(is_active_sidebar('footer-sidebar-4')){
					dynamic_sidebar('footer-sidebar-4');
			}
			?>
		</div>
	</div>

	<footer id="colophon" class="site-footer">
		<div class="site-info container">
			<div class="row">
				<div class="col col1">
					<span class="copyright">©<?php echo date(Y);?> The Museum Ground. All rights reserved. Developed by <a href="www.pentamint.com">Pentamint</a></span>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
