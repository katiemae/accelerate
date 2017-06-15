<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<?php 
	$our_services_description = get_field('our_services_description');
	$size = "full";
	$image_1 = get_field('image_1'); 
	$image_2 = get_field('image_2'); 
	$image_3 = get_field('image_3'); 
	$image_4 = get_field('image_4'); 
	$service_title_1 = get_field('service_title_1');
	$service_title_2 = get_field('service_title_2');
	$service_title_3 = get_field('service_title_3');
	$service_title_4 = get_field('service_title_4');
	$service_description_1 = get_field('service_description_1');
	$service_description_2 = get_field('service_description_2');
	$service_description_3 = get_field('service_description_3');
	$service_description_4 = get_field('service_description_4');
	$contact_button = get_field('contact_button');

?>



<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section>

<section class="services">
	<div class="site-content" "services-content">
		<div class="services-intro">
			<h4>Our Services</h4>
			<p><?php echo $our_services_description ?></p>
		</div>

		<div class="service-block">
			<figure class="service-icon left-service-icon">
				<?php echo wp_get_attachment_image( $image_1, $size ); ?>
			</figure>
			<div class="service-text right-service-text">
				<h3><?php echo $service_title_1 ?></h3>
				<p><?php echo $service_description_1 ?></p>
			</div>
		</div>

		<div class="service-block">
			<div class="service-text left-service-text">
				<h3><?php echo $service_title_2 ?></h3>
				<p><?php echo $service_description_2 ?></p>
			</div>
			<figure class="service-icon right-service-icon">
				<?php echo wp_get_attachment_image( $image_2, $size ); ?>
			</figure>			
		</div>

		<div class="service-block">
			<figure class="service-icon left-service-icon">
				<?php echo wp_get_attachment_image( $image_3, $size ); ?>
			</figure>
			<div class="service-text right-service-text">
				<h3><?php echo $service_title_3 ?></h3>
				<p><?php echo $service_description_3 ?></p>
			</div>			
		</div>		

		<div class="service-block">
			<div class="service-text left-service-text">
				<h3><?php echo $service_title_4 ?></h3>
				<p><?php echo $service_description_4 ?></p>
			</div>
			<figure class="service-icon right-service-icon">
				<?php echo wp_get_attachment_image( $image_4, $size ); ?>
			</figure>
		</div>
	</div>
</section>

<section class="contact-us">
	<div class="site-content" id="about-page-contact">
		<div class="about-contact-text">
			<h4>Interested in working with us?</h4>
			<a href="http://localhost:8888/accelerate/contact-us/" class="button contact-us-button">
				<?php echo $contact_button ?>
			</a>
		</div>
	</div>

</section>



<?php get_footer(); ?>