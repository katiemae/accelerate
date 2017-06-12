<?php
/**
 * The template for displaying the about page
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
			<figure class="service-icon left-service-icon">
				<img src="http://localhost:8888/accelerate/wp-content/uploads/2017/06/bullseye-icon.jpg">
			</figure>
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
			<figure class="service-icon right-service-icon">
				<img src="http://localhost:8888/accelerate/wp-content/uploads/2017/06/atom-icon.jpg">
			</figure>			
		</div>

		<div class="service-block">
			<figure class="service-icon left-service-icon">
				<img src="http://localhost:8888/accelerate/wp-content/uploads/2017/06/like-icon.jpg">
			</figure>
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
			<figure class="service-icon right-service-icon">
				<img src="http://localhost:8888/accelerate/wp-content/uploads/2017/06/magicwand-icon.jpg">
			</figure>
		</div>
	</div>
</section>

<section class="contact-us">
	<div class="site-content" id="about-page-contact">
		<div class="about-contact-text">
			<h4>Interested in working with us?</h4>
			<a href="http://localhost:8888/accelerate/contact-us/" class="button contact-us-button">
				Contact Us
			</a>
		</div>
	</div>

</section>



<?php get_footer(); ?>