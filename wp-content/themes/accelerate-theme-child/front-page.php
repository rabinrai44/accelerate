<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page">
    <div class="container-grid">
        <div class="row">
        	<div class="col-12 site-content">
        		<?php while ( have_posts() ) : the_post(); ?>
        			<div class='homepage-hero'>
        			    <?php the_content(); ?>
        				<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
        			</div>
        		<?php endwhile; // end of the loop. ?>
        		
        	</div><!-- .col, .site-content -->
	    </div><!-- .row -->
	</div><!-- .container-grid -->
</section><!-- .home-page -->

<section class="featured-work">
    <div class="container-grid">
        <div class="row">
            <div class="site-content">
                
                <h2>Featured Work</h2>
                
                <ul class="homepage-featured-work">
                
                <?php query_posts( 'posts_per_page=3&post_type=case_studies&order=ASC' ); ?>
                
                    <?php while ( have_posts() ) : the_post(); 
                        
                        $image_1 = get_field("image_1");
                        $size = "medium";
                        ?>
                        <li class="col-4 single-featured-item">
                            <figure>
                                <?php echo wp_get_attachment_image( $image_1, $size ); ?>
                            </figure>
                            
                        <h3>
                            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
                        </h3>
                        </li><!-- .single-featured-work -->
                    
                    <?php endwhile; //end of the loop. ?>
                    <?php wp_reset_query(); // resets the altered query back to the origignal ?>
                    
                    </ul><!--- .homepage-featured-work -->
                
            </div><!-- .site-content -->
        </div><!-- .row -->
	</div><!-- .container-grid -->
</section><!-- .featured-work -->

<section class="our-services">
     <div class="container-grid">
        <div class="row">
            <div class="site-content">
                <div class="col-12">
                    <h2>Our Services</h2>
                </div>
                
                <?php query_posts( 'posts_per_page=4&post_type=our_services&order=ASC' ); ?>
                <?php while ( have_posts() ) : the_post();  
                    
                     $service_icon = get_field("service_icon");
                     $size = "full";
                
                ?>
                <div class="col-3">
                     <div class="service-item">
                    <p>
			        	<?php if ($service_icon) { ?>
			            <?php echo wp_get_attachment_image($service_icon, $size);
			                } ?>
                    </p>
                    <h6><?php the_title(); ?></h6>
                </div>
                </div>
                
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                
            </div>
        </div><!-- .row -->
	</div><!-- .container-grid -->
</section><!-- .our-services -->

<section class="recent-posts">
    <div class="container-grid">
        <div class="row">
            <div class="site-content">
                <div class="col-6 blog-post">
                  <h4>From the Blog</h4>
                  <?php while ( have_posts('posts_per_page=1') ) : the_post(); ?>
                   <!--loop content here -->
                   <h2><?php the_title(); ?></h2>
                   <?php the_excerpt(); ?>
                   <a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
                   
                   <?php endwhile; ?>
                   <?php wp_reset_query(); ?>
                </div>
                <div class="col-6 recent-post">
                    <h4>Recent Post</h4>
                     <?php while ( have_posts('posts_per_page=1') ) : the_post(); ?>
                   <!--loop content here -->
                   <h2><?php the_title(); ?></h2>
                   <?php the_excerpt(); ?>
                   <a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
                   
                   <?php endwhile; ?>
                   <?php wp_reset_query(); ?>
                </div>
            </div><!-- .site-content -->
        </div><!-- .row -->
	</div><!-- .container-grid -->
</section><!-- .recent-posts -->



<?php get_footer(); ?>