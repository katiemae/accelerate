<?php
/**
 * The template for displaying the 404 page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="page-404">
	<div id="primary" class="site-content">
		<div id="content" role="main" class="content-404">
			<div id="width-404">
				<div class="image-404">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map.png"/>
				</div>
				<div class="text-404">
					<h1>Whoops, Took a Wrong Turn...</h1>
					<p>Sorry, this page no longer exists, never existed, or has been moved. We feel like complete jerks for totally misleading you.</p>
					<p>Feel free to take a look around our <a href="">blog</a> or some of our featured <a href="">work</a>.</p>
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
</section>

<?php get_footer(); ?>