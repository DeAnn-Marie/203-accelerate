<?php
/**
 * The template for displaying About Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about-page">
		<div class-id="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$size = "full";
				$intro = get_field('intro');
				$about = get_field('about');
				$mission = get_field('mission');
				$image_1 = get_field('image_1');
				$service_1 = get_field('service_1');
				$info_1 = get_field('info_1');
				$image_2 = get_field('image_2');
				$service_2 = get_field('service_2');
				$info_2 = get_field('info_2');
				$image_3 = get_field('image_1');
				$service_3 = get_field('service_3');
				$info_3 = get_field('info_3');
				$image_4 = get_field('image_4');
				$service_4 = get_field('service_4');
				$info_4 = get_field('info_4');
			?> 

		<div class="hero-area">
			<h6><?php echo $intro; ?></h6>
		</div>
		<div class="mission-statement">
			<h5><?php echo $about; ?></h5>
				<p><?php echo $mission; ?></p>
		</div>
			
			

		<div class="services">
			<div class="strategy">
				<div class="content">	
					<h2><?php echo $service_1; ?></h2>
					<p><?php echo $info_1; ?></p>	
				</div>	
				<figure class="icon">
					<?php if($image_1) {
						echo wp_get_attachment_image( $image_1, $size ) ;
					} ?>
				</figure>
			</div>

			<div class="influencer">
				<div class="content">
					<h2><?php echo $service_2; ?></h2>
					<p><?php echo $info_2; ?></p>
				</div>	
					<figure class="icon">
						<?php if($image_2) {
							echo wp_get_attachment_image( $image_2, $size ) ;
						} ?>
					</figure>
			</div>
			<div class="social">
				<div class="content">
					<h2><?php echo $service_3; ?></h2>
					<p><?php echo $info_3; ?></p>
				</div>
					<figure class="icon">
						<?php if($image_3) {
							echo wp_get_attachment_image( $image_3, $size ) ;
							} ?>
					</figure>
			</div>
			<div class="design">
				<div class="content">
					<h2><?php echo $service_4; ?></h2>
					<p><?php echo $info_4; ?></p>
				</div>
					<figure class="icon">
						<?php if($image_4) {
							echo wp_get_attachment_image( $image_4, $size ) ;
						} ?>
					</figure>
			</div>
		</div>
			<div class="call-to-action">
				<div class="action-content">
					<h3>Interested in working with us?</h3>
				</div>
					<figure class="action">
						<a class="button" href="<?php echo site_url('/contact-us') ?>">Contact Us</a>
					</figure>
			</div>


	<?php endwhile; // end of the loop. ?>
</div><!-- .main-content -->

		

	</div><!-- #primary -->

<?php get_footer(); ?>
