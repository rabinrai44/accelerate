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
	<div class="container-grid">
		<div class="row">
			<div class="col-6 site-content">
				<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
					
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container-grid -->
</section><!-- .home-page -->

<section class="about-page">
	<div class="container-grid">
		<div class="row">
		    <div class="col-6 site-content">
		        
		        <h2>Our Services</h2>
		        <p><?php the_content; ?></p>
		        
		    </div><!-- .col, .site-content -->
	    </div><!-- .row -->
    </div><!-- .container-grid -->
</section><!-- .about-page -->

<section class="our-services">
	<div class="container-grid">
		<div class="row">
		    <div class="site-content">
		        <p style="text-align: center; margin-bottom: 40px;">We take pride in our clients and the content we create for theme. <br> Here's a  brief overview of our offered services. </p>
		        
		        <div class="service">
		        	<div class="col-2 service-icon">
		        		<img src="<?php bloginfo('stylesheet_directory'); ?>/img/bullseye.png" alt="strategy">
		        	</div><!-- .service-icon -->
		        	<div class="col-4 service-content">
		        		<h3 class="sub-title">Strategy</h3>
		        		<p>
		        			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fermentum tortor sed quam vestibulum fermentum. Suspendisse finibus vulputate libero eget commodo. Cras vitae augue nec lacus mollis tincidunt. Nunc laoreet, libero eu tristique suscipit, lectus orci tempor 
		        		</p>
		        	</div><!-- .service-content -->
		        </div><!-- .service -->
		        
		         <div class="service">
		         	<div class="col-4 service-icon-right">
		        		<img src="<?php bloginfo('stylesheet_directory'); ?>/img/atom.png" alt="strategy">
		        	</div><!-- .service-icon -->
		        	<div class="col-2 service-content-left">
		        		<h3 class="sub-title">Influencer Mapping</h3>
		        		<p>
		        			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fermentum tortor sed quam vestibulum fermentum. Suspendisse finibus vulputate libero eget commodo. Cras vitae augue nec lacus mollis tincidunt. Nunc laoreet, libero eu tristique suscipit, lectus orci tempor 
		        		</p>
		        	</div><!-- .service-content -->
		        </div><!-- .service -->
		        
		         <div class="service">
		        	<div class="col-2 service-icon">
		        		<img src="<?php bloginfo('stylesheet_directory'); ?>/img/design.png" alt="strategy">
		        	</div><!-- .service-icon -->
		        	<div class="col-4 service-content">
		        		<h3 class="sub-title">Design &amp; Development</h3>
		        		<p>
		        			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fermentum tortor sed quam vestibulum fermentum. Suspendisse finibus vulputate libero eget commodo. Cras vitae augue nec lacus mollis tincidunt. Nunc laoreet, libero eu tristique suscipit, lectus orci tempor 
		        		</p>
		        	</div><!-- .service-content -->
		        </div><!-- .service -->
		        
		        <div class="col-6 accelerate-optin">
		        	<h2>
		        		Interested in working with us? &nbsp;&nbsp;&nbsp; <a href="#"><button class="btn-main">Contact Us</button></a>
		        	</h2>
		        </div>
		    </div><!-- .col, .site-content -->
	    </div><!-- .row -->
    </div><!-- .container-grid -->
</section><!-- .our-services -->


<?php get_footer(); ?>