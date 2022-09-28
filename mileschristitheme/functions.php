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

//Custom Theme Settings
add_action('admin_menu', 'add_gcf_interface');

function add_gcf_interface() {
	add_options_page('Links a videos de Youtube', 'Links a videos de Youtube', '8', 'functions', 'editglobalcustomfields');
}

function editglobalcustomfields() {
	?>
	<div class='wrap'>
	<h2>Global Custom Fields</h2>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>

	<p><strong>Youtube video #1 URL</strong><br />
	<input type="text" name="ytv1" size="45" value="<?php echo get_option('ytv1'); ?>" /></p>
  <iframe width="300" height="200" src="<?php echo get_option('ytv1');?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	
	<p><strong>Youtube video #2 URL</strong><br />
	<input type="text" name="ytv2" size="45" value="<?php echo get_option('ytv2'); ?>" /></p>
  <iframe width="300" height="200" src="<?php echo get_option('ytv2');?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	<p><input type="submit" name="Submit" value="Update Options" /></p>

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="ytv1,ytv2" />

	</form>
	</div>
	<?php
}

?>