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
	
	<div class="jumbotron">
		<h2>Portfolio</h2>
	    
	    <div class="row cards__varias">

	        <div class="col-sm-4 col-md-4">
	          <div class="thumbnail cardsdiv">
	            <img src="<?php echo get_template_directory_uri() ?>/assets/images/portimg1-01.png" alt="foto1">
	            <div class="caption">
	              <h3>Interface design</h3>
	              <h4>Design and usability the corporative web for Inmobiliaria Absal.</h4>
	              <p><a href="#" class="btn btn-default" role="button">Ver más</a></p>
	            </div>
	          </div>
	        </div>

	        <div class="col-sm-4 col-md-4">
	          <div class="thumbnail cardsdiv">
	            <img src="<?php echo get_template_directory_uri() ?>/assets/images/portimg2-01.png" alt="foto2">
	            <div class="caption">
	              <h3>Interface design</h3>
	              <h4>Design and the corporative web for Inmobiliaria CVP.</h4>
	              <p><a href="#" class="btn btn-default" role="button">Ver más</a></p>
	            </div>
	          </div>
	        </div>

	        <div class="col-sm-4 col-md-4">
	          <div class="thumbnail cardsdiv">
	            <img src="<?php echo get_template_directory_uri() ?>/assets/images/portimg1-01.png" alt="foto3">
	            <div class="caption">
	              <h3>Editorial design</h3>
	              <h4>Breve descripción de la foto (lugar, año, temática).</h4>
	              <p><a href="#" class="btn btn-default" role="button">Ver más</a></p>
	            </div>
	          </div>
	        </div>
		</div>
	</div>

	<div class="flexslider slider_portfolio">
		<ul class="slides">
			<li data-thumb="<?php echo get_template_directory_uri() ?>/assets/images/foto1c.jpg">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/foto1g.jpg" />
			</li>
			<li data-thumb="<?php echo get_template_directory_uri() ?>/assets/images/foto2c.jpg">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/foto2g.jpg" />
			</li>
			<li data-thumb="<?php echo get_template_directory_uri() ?>/assets/images/foto3c.jpg">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/foto3g.jpg" />
			</li>
			<li data-thumb="<?php echo get_template_directory_uri() ?>/assets/images/foto1c.jpg">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/foto1g.jpg" />
			</li>
		</ul>
	</div>

	<section>
		<h1 id="tittle__left">Like what you see? <br>Learn more about me, <br> <span>follow</span> me or <span>contact</span> me below.
		</h1>
	</section>

	<section class="jumbotron__about">
		<div class="row"> 
			<div class="col-md-offset-1 col-md-2">
				<img class="me" src="<?php echo get_template_directory_uri() ?>/assets/images/me.png" alt="me">
			</div>
			<div class="col-md-2 name">
				<h3>Carolina Cuevas Andreu</h3>
				<h4>A very pettit person with a very big spirit.</h4>
				<h4></h4>
			</div>
			<div class="col-md-2">
				<h4 class="bold">catecuevas@gmail.com</h4>
				<h4 class="bold">Instagram</h4>
				<h4 class="bold">Behance</h4>
			</div>
			<div class="col-md-offset-1 col-sm-2 col-md-2" id="map">
		</div>
	</section>

</section>

<?php get_footer();
