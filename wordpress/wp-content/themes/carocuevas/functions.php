<?php 

# Images

add_theme_support('post-thumbnails');
add_post_type_support( 'blog', 'portafolio' ); 

# Post types

function create_posttype() {
  
  register_post_type( 'blog',
    array(
      'labels' => array(
        'name' => __( 'Blog' ),
        'singular_name' => __( 'Blog' )
      ),
      'supports' => array('title', 'editor', 'thumbnail'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'blog'),
    )
  );

  register_post_type( 'portafolio',
    array(
      'labels' => array(
        'name' => __( 'Portafolios' ),
        'singular_name' => __( 'Portafolios' )
      ),
      'supports' => array('title', 'editor', 'thumbnail'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'portafolio'),
    )
  );

}

add_action( 'init', 'create_posttype' );




show_admin_bar(false);
