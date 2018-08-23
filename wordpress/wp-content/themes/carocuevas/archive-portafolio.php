<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php
	$loop = new WP_Query(array(
	    'post_type' => 'portafolio',
	    'posts_per_page' => -1
	));
?>

<main>
	<div class="container">
    	<div class="row cards__varias">
	    	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	        <div class="col-sm-4 col-md-4">
	          <div class="thumbnail cardsdiv__portolio">
	            <img src="<?php echo get_template_directory_uri() ?>/assets/images/portimg1-01.png" alt="foto1">
	            <div class="caption">
	              <h3 id="h3__center"><?php the_title(); ?></h3>
	              <p><a href="<?php the_permalink(); ?>" class="btn btn-default" role="button">Ver más</a></p>
	            </div>
	          </div>
	        </div>
	        <?php endwhile; wp_reset_query(); ?>
		</div>	
	</div>
</main>

<?php get_footer();
