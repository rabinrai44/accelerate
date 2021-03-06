<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?>

		</div><!-- #main -->


		<footer id="colophon" class="footer" role="contentinfo">
			<div class="container-grid">
				<div class="row">
					<div class="footer-content">
						<div class="col-6 site-info">
							<div class="site-description">
							<p><?php bloginfo('description'); ?></p>
							<p>&copy; <?php bloginfo('title'); ?>, LLC
							</div>
						</div><!-- .col, .site-info -->
						<div class="col-6 social-media">
							<nav class="social-media-navbar" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
							</nav>
						</div><!-- .col, .social-media -->
					</div><!-- .footer-content -->
				</div><!-- .row -->
			</div><!-- .container-grid -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>