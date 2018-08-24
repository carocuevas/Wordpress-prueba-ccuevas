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
	    'post_type' => 'blog',
	    'posts_per_page' => -1
	));
?>

<section>
	<div class="container">
		<h1>Acá van las entradas <br> de <span>reportajes</span> interesantes.</h1>
		<div class="row">
			
			<div class="left__column col-md-7">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="card">
					<h2><?php the_title(); ?></h2>
					<h5><?php echo get_the_date(); ?></h5>
					<img src="<?php echo the_post_thumbnail_url( 'large' );  ?> " alt="<?php the_title(); ?>">
					<?php the_excerpt(); ?>
					<br>
					<p><a href="<?php the_permalink(); ?>" class="btn btn-default" role="button">Ver más</a></p>
				</div>
				<?php endwhile; wp_reset_query(); ?>
			</div>

			<div class="right__column col-md-4">
				<div class="card">
					<h2>About Me</h2>
					<img class="me blog__img" src="<?php echo get_template_directory_uri() ?>/assets/images/me.png" alt="me">
					<p>Soy una aspirante a UX, diseñadora a tiempo (casi) completo y fanática de las historias.</p>
				</div>
				<div class="card">
					<h3>Popular Post</h3>
					<div class="blog__img"></div><br>
					<a href="singleblog.html" class="btn btn-default" role="button">Ver más</a>
					<div class="blog__img"></div><br>
					<a href="singleblog.html" class="btn btn-default" role="button">Ver más</a>
					<div class="blog__img"></div>
					<a href="singleblog.html" class="btn btn-default" role="button">Ver más</a>
				</div>
				<div class="card">
					<h3>Follow Me</h3>
					<p>Some text..</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();
