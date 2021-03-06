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

<?php 
	$homepage_button = get_field('homepage_button');
 ?>

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/case-studies"><?php echo $homepage_button ?></a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<section class="featured-work">
	<div class="site-content">
		<h4>Featured Work</h4>
		<ul class="homepage-featured-work">
		<?php query_posts('posts_per_page=3&post_type=case_studies&order=ASC'); ?>
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
				$size = "medium";
			?>
			<li class="individual-featured-work">
				<figure>
					<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image_1, $size); ?> </a>
				</figure>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</li>
			<?php endwhile; ?>
		<?php wp_reset_query(); ?>
		</ul>
	</div>
</section>

<?php 
	$size = "full";
	$service_image_1 = get_field('image_1'); 
	$service_image_2 = get_field('image_2'); 
	$service_image_3 = get_field('image_3'); 
	$service_image_4 = get_field('image_4'); 
	$service_title_1 = get_field('service_title_1');
	$service_title_2 = get_field('service_title_2');
	$service_title_3 = get_field('service_title_3');
	$service_title_4 = get_field('service_title_4');
?>

<section class="our-services">
	<div class="site-content">
		<h4>Our Services</h4>
			<div>
				<div class="quarter-width">
					<?php echo wp_get_attachment_image( $service_image_1, $size ); ?>
					<h3><?php echo $service_title_1 ?></h3>
				</div>
				<div class="quarter-width">
					<?php echo wp_get_attachment_image( $service_image_2, $size ); ?>
					<h3><?php echo $service_title_2 ?></h3>
				</div>
				<div class="quarter-width">
					<?php echo wp_get_attachment_image( $service_image_3, $size ); ?>
					<h3><?php echo $service_title_3 ?></h3>
				</div>
				<div class="quarter-width">
					<?php echo wp_get_attachment_image( $service_image_4, $size ); ?>
					<h3><?php echo $service_title_4 ?></h3>
				</div>	


			</div>

	</div>
</section>

<section class="recent-posts">
	<div class="site-content">
		<div class="blog-post">
			<h4>From the Blog</h4>
			<?php query_posts('posts_per_page=1'); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
					<a class="read-more-link" href="<?php the_permalink(); ?>">Read more &rsaquo;</a>
				<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>
		<div class="twitter-feed">
			<h4>Recent Tweet</h4>
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div id="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
			<a class="read-more-link" href="http://twitter.com">Follow Us &rsaquo;</a>
		</div>
		<?php endif; ?>
	</div>
</section>



<?php get_footer(); ?>