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

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container"> 
	<div class="row"> 
		<div class="col-lg-12"> 
			<h2><?php the_title(); ?></h2>
			<div>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
<?php endwhile; endif; ?>


<?php get_footer();
