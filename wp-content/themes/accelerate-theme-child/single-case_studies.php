<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
	    <div id="content" role="main">
	        <?php while ( have_posts() ) : the_post(); ?>
	        
	        <h1>This is my case Studies </h1>
	        
	        <?php the_content(); ?>
	        <?php endwhile; // end of the loop ?>
	    </div><!-- #content -->
	</div><!-- #primary -->
<?php
get_footer();