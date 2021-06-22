<?php

// Custom
function init_template() {
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );

  register_nav_menus( 
    array(
      'top_menu' => 'Menú principal - En la parte superior',
    )
  );
}

// hook
add_action( 'after_setup_theme', 'init_template' );

// custom
function assets(){
  // CSS
  wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', '', '4.4.1', 'all' );
  wp_register_style( 'montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap', '', '1.0', 'all' );
  // Registramos primeros nuestras dpendencias ya que queremos que se carguen antes de los estilos
  wp_enqueue_style( 'styles', get_stylesheet_uri(), array('bootstrap', 'montserrat'), '1.0', 'all');

  // JS
  wp_register_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', '', '1.16.0', true );
  // jQuery comes embedded in wordpress, no need to add bootstrap jQuery as dependency.
  wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery', 'popper'), '4.4.1', true );
  wp_enqueue_script( 'custom_js', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true );
}

//hook
add_action( 'wp_enqueue_scripts', 'assets' );


// WIDGETS CREATION
// custom
function sidebar(){
  register_sidebar( 
    array(
      'name' => 'Pié de página',
      'id' => 'footer_id',
      'description' => 'Zona de widgets para pié de página',
      'before_title' => '<p>',
      'after_title' => '</p>',
      'before_widget' => '<div id="%1$s" class="%2$s">',
      'after_widget' => '</div>'
    )
  );
}
//hook
add_action( 'widgets_init', 'sidebar' );

function custom_type() {
  $labels = array(
    'name' => 'Label CPT',
    'singular_name' => 'Singular Label CPT', // Se muestra este mensaje cuando necesita mostrar un elemento en singular
    'menu_name' => 'Label CPT - name in admin', // name in admin
  );

  $args = array(
    'label' => 'Custom PT',
    'description' => 'This is the description of the CPT',
    'labels' => $labels,
    'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
    'public' => true, // Publicadas por defecto (false) o borrador (true)
    'show_in_menu' => true,
    'menu_position' => 2, // Posición en el menú de WP
    'menu_icon' => 'dashicons-cart',// se puede pasar una url a una imagen o utilizar los icons de WP
    'can_export' => true,
    'publicly_queryable' => true, // Para poder llamarlo con un loop personalizado
    'rewrite' => true,
    'show_in_rest' => true, // Agregarla a la API de WP
  );

  register_post_type( 'custom-type', $args );
}
add_action( 'init', 'custom_type' );

?>