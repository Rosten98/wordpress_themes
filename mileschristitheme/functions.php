<?php 

function init_template() {
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );

  register_nav_menus( 
    array(
      'top_menu' => 'main_menu',
      'bottom_menu' => 'other_links',
    )
  );
}
add_action( 'after_setup_theme', 'init_template' );

function assets(){
  // CSS
  // wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', '', '4.4.1', 'all' );
  // wp_register_style( 'montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap', '', '1.0', 'all' );
  wp_enqueue_style( 'styles', get_stylesheet_uri(), null, '1.0', 'all');
  // JS
  // wp_register_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', '', '1.16.0', true );
  // wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery', 'popper'), '4.4.1', true );
  wp_enqueue_script( 'index_js', get_template_directory_uri().'/assets/js/index.js', '', '1.0', true );
}

//hook
add_action( 'wp_enqueue_scripts', 'assets' );

?>