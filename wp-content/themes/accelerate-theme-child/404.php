<?php
/**
 * The template for displaying 404 page
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

	<div id="primary" class="error-page">
		<div class="main-content" role="main">
        
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                     <?php the_content(); ?>
                                
                    <?php endwhile; // end of the loop. ?>

                        <div class="error">
                            <div class="error-content">   
                                <h2>Sorry...we looked everywhere but could not find a clue to the page you were looking for</h2>
                                <h3>Allow us to heal the breach</h3><a class="button" href="<?php echo site_url('homepage') ?>">Homepage</a>
                                <h4>404 Page Not Found</h4> 
                            </div>
                        </div>
        </div> 
</div>  
​               
                    



				
			
		</div><!-- .main-content -->

		

	</div><!-- #primary -->

<?php get_footer(); ?>
