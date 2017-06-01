<?php
/**
 * Template Name: Page About
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

<section class="about-hero">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
			    <?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
		
	</div><!-- .container -->
</section><!-- .home-page -->

<section class="about-page">
    <div class="site-content">
        
        <h2>Our Services</h2>
        <p><?php the_content; ?></p>
   
        
    </div><!-- .site-content -->
</section><!-- .featured-work -->

<section class="our-services">
    <div class="site-content">
        <h2>Our Services</h2>
        <p>We take pride in our clients and the content we create for theme. <br> Here's a  brief overview of our offered services. </p>
        <div class="service">
        	<div class="service-icon">
        		
        	</div><!-- .service-icon -->
        	<div class="service-content">
        		
        	</div><!-- .service-content -->
        </div><!-- .service -->
        
        <div class="accelerate-optin">
        	<h2>Interested in working with us?</h2> <a href="#"><button class="btn-main">Contact Us</button></a>
        </div>
    </div><!-- .site-content -->
</section><!-- .our-services -->


<?php get_footer(); ?>