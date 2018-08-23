<?php /* Template Name: Contacto */ ?>

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

<form class="form-horizontal" id="#caro">
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-8">
			<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
		</div>
	</div>
	<div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">Nombre</label>
		<div class="col-sm-8">
			<input type="nombre" class="form-control" id="inputPassword3" placeholder="Nombre">
		</div>
	</div>
	<div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">Mensaje</label>
		<div class="col-sm-8">
			<textarea type="text" class="form-control" rows="3" placeholder="Mensaje"></textarea> 
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8">
			<button type="submit" class="btn btn-default" id="button__submit">Sign in</button>
		</div>
	</div>
</form>

<?php get_template_part( 'partials/home-about' ); ?>

<?php get_footer();
