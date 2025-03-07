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
add_action('admin_menu', 'add_youtube_admin');
add_action('admin_menu', 'add_events_admin');
add_action('admin_menu', 'add_retreats_admin');

function add_youtube_admin() {
  add_options_page('Youtube videos', 'Youtube videos', '8', 'youtube', 'youtubeVideos');
}

function add_events_admin(){
  add_options_page('Próximos Eventos', 'Próximos Eventos', '8', 'events', 'nextEvents');
}

function add_retreats_admin() {
  add_options_page('Ejercicios Espirituales', 'Ejercicios Espirituales', '8', 'retreats', 'nextRetreats');
}

function youtubeVideos() {
?>
  <style>
  </style>
	<div class='wrap'>
    <h1>Youtube Videos</h1>
    <form method="post" action="options.php">
    <?php wp_nonce_field('update-options') ?>
      <div>
        <div>
          <p><strong>Youtube video #1 URL</strong><br />
          <input type="text" name="ytv1" size="45" value="<?php echo get_option('ytv1'); ?>" /></p>
          <iframe width="300" height="200" src="<?php echo get_option('ytv1');?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div>
          <p><strong>Youtube video #2 URL</strong><br />
          <input type="text" name="ytv2" size="45" value="<?php echo get_option('ytv2'); ?>" /></p>
          <iframe width="300" height="200" src="<?php echo get_option('ytv2');?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

      <p><input type="submit" name="Submit" value="Actualizar videos"/></p>

      <input type="hidden" name="action" value="update" />
      <input type="hidden" name="page_options" value="ytv1,ytv2" />

    </form>
	</div>
	
<?php
}

function nextEvents(){
  ?>
	<div class='wrap'>
  <h1><strong>Proximos Eventos</strong></h1>
  <hr>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>

	<h3><strong>Evento principal:</strong></h3>
	<p>Imagen URL: <input type="text" name="evt" size="45" value="<?php echo get_option('evt'); ?>"/></p>
	<p>Texto Alt: <input type="text" name="tevt" size="45" value="<?php echo get_option('tevt'); ?>"/></p>
	<p>Link: <input type="text" name="levt" size="45" value="<?php echo get_option('levt'); ?>"/></p>
	<?php if(get_option('evt') != "none") { ?>
    <img src="<?php echo get_option('evt'); ?>" alt="" width="300">
  <?php } ?>
	<hr>
  <h3><strong>Evento secundario 1:</strong></h3>
	<p>Imagen URL: <input type="text" name="evt1" size="45" value="<?php echo get_option('evt1'); ?>"/></p>
	<p>Texto Alt: <input type="text" name="tevt1" size="45" value="<?php echo get_option('tevt1'); ?>"/></p>
	<p>Link: <input type="text" name="levt1" size="45" value="<?php echo get_option('levt1'); ?>"/></p>
	<?php if(get_option('evt1') != "none") { ?>
    <img src="<?php echo get_option('evt1'); ?>" alt="" width="300">
  <?php } ?>
  <hr>
  <h3><strong>Evento secundario 2:</strong></h3>
	<p>Imagen URL: <input type="text" name="evt2" size="45" value="<?php echo get_option('evt2'); ?>"/></p>
	<p>Texto Alt: <input type="text" name="tevt2" size="45" value="<?php echo get_option('tevt2'); ?>"/></p>
	<p>Link: <input type="text" name="levt2" size="45" value="<?php echo get_option('levt2'); ?>"/></p>
	<?php if(get_option('evt2') != "none") { ?>
    <img src="<?php echo get_option('evt2'); ?>" alt="" width="300">
  <?php } ?>
  <hr>

	<p><input type="submit" name="Submit" value="Actualizar Eventos"/></p>

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="evt,evt1,evt2,levt,levt1,levt2,tevt,tevt1,tevt2" />

	</form>
	</div>
	<?php
}

function nextRetreats(){
  ?>
	<div class='wrap'>
  <h1><strong>Proximos Ejercicios Espirituales</strong></h1>
  <hr>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>

	<h3><strong>EE 1:</strong></h3>
	<p>Imagen URL: <input type="text" name="ret" size="45" value="<?php echo get_option('ret'); ?>"/></p>
	<p>Texto Alt: <input type="text" name="tret" size="45" value="<?php echo get_option('tret'); ?>"/></p>
	<p>Link: <input type="text" name="lret" size="45" value="<?php echo get_option('lret'); ?>"/></p>
	<?php if(get_option('ret') != "none") { ?>
    <img src="<?php echo get_option('ret'); ?>" alt="" width="300">
  <?php } ?>
	<hr>
	
  <h3><strong>EE 2:</strong></h3>
	<p>Imagen URL: <input type="text" name="ret1" size="45" value="<?php echo get_option('ret1'); ?>"/></p>
	<p>Texto Alt: <input type="text" name="tret1" size="45" value="<?php echo get_option('tret1'); ?>"/></p>
	<p>Link: <input type="text" name="lret1" size="45" value="<?php echo get_option('lret1'); ?>"/></p>
	<?php if(get_option('ret1') != "none") { ?>
    <img src="<?php echo get_option('ret1'); ?>" alt="" width="300">
  <?php } ?>
	<hr>
  
  <h3><strong>EE 3:</strong></h3>
	<p>Imagen URL: <input type="text" name="ret2" size="45" value="<?php echo get_option('ret2'); ?>"/></p>
	<p>Texto Alt: <input type="text" name="tret2" size="45" value="<?php echo get_option('tret2'); ?>"/></p>
	<p>Link: <input type="text" name="lret2" size="45" value="<?php echo get_option('lret2'); ?>"/></p>
	<?php if(get_option('ret2') != "none") { ?>
    <img src="<?php echo get_option('ret2'); ?>" alt="" width="300">
  <?php } ?>
	<hr>
  
  <h3><strong>EE 4:</strong></h3>
	<p>Imagen URL: <input type="text" name="ret3" size="45" value="<?php echo get_option('ret3'); ?>"/></p>
	<p>Texto Alt: <input type="text" name="tret3" size="45" value="<?php echo get_option('tret3'); ?>"/></p>
	<p>Link: <input type="text" name="lret3" size="45" value="<?php echo get_option('lret3'); ?>"/></p>
	<?php if(get_option('ret3') != "none") { ?>
    <img src="<?php echo get_option('ret3'); ?>" alt="" width="300">
  <?php } ?>
	<hr>
  
  <h3><strong>EE 5:</strong></h3>
	<p>Imagen URL: <input type="text" name="ret4" size="45" value="<?php echo get_option('ret4'); ?>"/></p>
	<p>Texto Alt: <input type="text" name="tret4" size="45" value="<?php echo get_option('tret4'); ?>"/></p>
	<p>Link: <input type="text" name="lret4" size="45" value="<?php echo get_option('lret4'); ?>"/></p>
	<?php if(get_option('ret4') != "none") { ?>
    <img src="<?php echo get_option('ret4'); ?>" alt="" width="300">
  <?php } ?>
	<hr>

  <h3><strong>EE 6:</strong></h3>
	<p>Imagen URL: <input type="text" name="ret5" size="45" value="<?php echo get_option('ret5'); ?>"/></p>
	<p>Texto Alt: <input type="text" name="tret5" size="45" value="<?php echo get_option('tret5'); ?>"/></p>
	<p>Link: <input type="text" name="lret5" size="45" value="<?php echo get_option('lret5'); ?>"/></p>
	<?php if(get_option('ret5') != "none") { ?>
    <img src="<?php echo get_option('ret5'); ?>" alt="" width="300">
  <?php } ?>
	<hr>

	<p><input type="submit" name="Submit" value="Actualizar Eventos"/></p>

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="ret,lret,tret,ret1,lret1,tret1,ret2,lret2,tret2,ret3,lret3,tret3,ret4,lret4,tret4,ret5,lret5,tret5" />

	</form>
	</div>
	<?php
}
?>