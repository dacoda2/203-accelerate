<?php
/* Template Name: About*/

get_header(); ?>


	<div id="primary" class="home-page service-content">
		
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		
	</div><!-- #primary -->

<section class="our-services" >
	<div class="site-content" id="services-main-content">
        <h3>Our Services</h3>
        <p>We take pride in our clients and the content we create for them.</p>
		<p>Here's a brief overview of our offered services.</p>
        
        <ul class="list-services">
		    <?php query_posts('posts_per_page=4&post_type=services'); ?>
                <?php while ( have_posts() ) : the_post(); 
                    $services = get_field('services');
                    $service_description = get_field('service_description');
                    $image1 = get_field ("image1");           
                    $size = "medium";
                ?>
            
                    <li class="individual-service">
                        <div class="individual-service-description">
			                <h2><?php echo $services; ?></h2>
                            <?php echo $service_description; ?>                    
                        </div> 

                        <div class="individual-service-image">
                            <?php if($image1) { 
	                        echo wp_get_attachment_image( $image1, $size );
                            } ?>
                        </div>                
                    </li>         
			    <?php endwhile; // end of the loop. ?>
            <?php wp_reset_query(); ?>
        </ul>                    
    </div>   
</section>
<section>
	<div class="site-content">
    
		<div class="invite">            
			<h3>Interested in working with us?</h3>
            <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
            
        </div>
	</div>
</section>

<?php get_footer(); ?>