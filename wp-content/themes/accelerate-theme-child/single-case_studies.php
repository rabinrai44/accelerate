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
	        <?php while ( have_posts() ) : the_post();
	        
    	        $services = get_field("services");
    	        $client    = get_field("client");
    	        $site_link = get_field("site_link");
    	        $image1 = get_field("image_1");
    	        $image2 = get_field("image_2");
    	        $image3 = get_field("image_3");
	        
	         ?>
	        
	       
	        <article class="case-study">
	            <aside class="case-study-sidebar">
	                <h2><?php echo $services; ?></h2>
	                <h5><?php echo $client; ?></h5>
	                
	                <?php the_content(); ?>
	                
	                <h6><a href="<?php echo $site_link; ?>">Site Link</a></h6>
	            </aside>
	        </article>
	        <div class="case-study-images">
	            
	            <img src="<?php echo $image1; ?>" alt="" />
	            <img src="<?php echo $image2; ?>" alt="" />
	            <img src="<?php echo $image3; ?>" alt="" />
	            
	        </div>
	        
	        <?php endwhile; // end of the loop ?>
	    </div><!-- #content -->
	</div><!-- #primary -->
<?php
get_footer();