<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 */

get_header(); ?>

	<div id="primary" class="content-area">
	    <div class="container-grid">
    		<div id="content page-404" class="row site-content" role="main">
    			<div class="page-wrapper">
    			    <div class="col-3">
    			        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/404.png" alt="404">
    			    </div>
    				<div class="col-6 page-content-404">
    					<h3><?php _e( 'Whoops, Took a Wrong Turn…', 'accelerate-theme-child' ); ?></h3>
    					<p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.<br>

Feel free to take a look around our <a href="<?php bloginfo('url'); ?>"><span class="primary-text">blog</span></a> or some of our featured <a href="<?php bloginfo('home-url'); ?>"> <span class="primary-text">work</span></a>. </p>
    				</div><!-- .page-content -->
    				<div class="col-3"></div>
    			</div><!-- .page-wrapper -->
    
    		</div><!-- #content -->
	    </div><!-- .container-grid -->
	</div><!-- #primary -->

<?php get_footer(); ?>