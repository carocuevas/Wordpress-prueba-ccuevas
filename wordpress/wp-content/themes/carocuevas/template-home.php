<?php /* Template Name: Home */ ?>

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

<section>
	<?php get_template_part( 'partials/home-portafolio' ); ?>
	<?php get_template_part( 'partials/home-gallery' ); ?>
	<?php get_template_part( 'partials/home-about' ); ?>
</section>

<?php get_footer();
