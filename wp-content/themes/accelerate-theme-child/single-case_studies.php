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
    	        $image_1 = get_field("image_1");
    	        $image_2 = get_field("image_2");
    	        $image_3 = get_field("image_3");
    	        $size = "full";
	        
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
	        	<?php if ($image_1) { ?>
	            
	            <?php echo wp_get_attachment_image($image_1, $size); ?>
	            <?php } ?>
	            	<?php if ($image_2) { ?>
	            
	            <?php echo wp_get_attachment_image($image_2, $size); ?>
	            <?php } ?>
	            
	            	<?php if ($image_3) { ?>
	            
	            <?php echo wp_get_attachment_image($image_3, $size); ?>
	            <?php } ?>
	            
	        </div>
	        
	        <?php endwhile; // end of the loop ?>
	    </div><!-- #content -->
	</div><!-- #primary -->
<?php
get_footer();