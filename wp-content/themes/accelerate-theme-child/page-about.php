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
			<p>We take pride in our clients and the content we create for them.</p>
			<p>Here's a brief overview of our offered services.</p>
		</div>

		<div class="service-block">
			<div class="service-icon left-service-icon">
				<img src="http://localhost:8888/accelerate/wp-content/uploads/2017/06/bullseye-icon.jpg">
			</div>
			<div class="service-text right-service-text">
				<h3>Content Strategy</h3>
				<p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground round t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tongue ball tip corned beef turkey. Leberkas shoulder pork chop doner venison meatball pig chicken spare.</p>
			</div>
		</div>

		<div class="service-block">
			<div class="service-text left-service-text">
				<h3>Influencer Mapping</h3>
				<p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground round t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tongue ball tip corned beef turkey. Leberkas shoulder pork chop doner venison meatball pig chicken spare.</p>
			</div>
			<div class="service-icon right-service-icon">
				<img src="http://localhost:8888/accelerate/wp-content/uploads/2017/06/atom-icon.jpg">
			</div>			
		</div>

		<div class="service-block">
			<div class="service-icon left-service-icon">
				<img src="http://localhost:8888/accelerate/wp-content/uploads/2017/06/like-icon.jpg">
			</div>
			<div class="service-text right-service-text">
				<h3>Social Media Strategy</h3>
				<p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground round t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tongue ball tip corned beef turkey. Leberkas shoulder pork chop doner venison meatball pig chicken spare.</p>
			</div>			
		</div>		

		<div class="service-block">
			<div class="service-text left-service-text">
				<h3>Design and Development</h3>
				<p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground round t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tongue ball tip corned beef turkey. Leberkas shoulder pork chop doner venison meatball pig chicken spare.</p>
			</div>
			<div class="service-icon right-service-icon">
				<img src="http://localhost:8888/accelerate/wp-content/uploads/2017/06/magicwand-icon.jpg">
			</div>
		</div>
	</div>
</section>

<section class="contact-us">
	<div class="site-content">
		<div class="about-contact">
			<h4>Interested in working with us?</h4>
			<a href="">
					<div class="button">
					Contact Us
				</div>
			</a>
		</div>
	</div>

</section>



<?php get_footer(); ?>