<?php
  $loop = new WP_Query(array(
      'post_type' => 'portafolio',
      'posts_per_page' => -1
  ));
?>

<div class="jumbotron">
	
	<h2>Portfolio</h2>
    
    <div class="row cards__varias">

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-sm-4 col-md-4">
          <div class="thumbnail cardsdiv">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/portimg1-01.png" alt="foto1">
            <div class="caption">
              <h3><?php the_title(); ?></h3>
              <h4>Design and usability the corporative web for Inmobiliaria Absal.</h4>
              <p><a href="<?php the_permalink(); ?>" class="btn btn-default" role="button">Ver más</a></p>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>


	</div>
	
</div>