<?php get_header(); ?>

<main class="container">
  <?php if(have_posts()){
    while(have_posts()){
      the_post();?>
    <h1 class="my-3"><?php the_title()?></h1>
    <p class="my-3"><?php the_content()?></p>
  <?php
    }
  }?>

  <div class="custom-types">
    <h2>Custom types</h2>
    <div class="row">
      <?php 
        $args = array(
          'post_type' => 'custom-type', // tipo de contenido que va a traer - el valor es el post-type-name que está en la función register_post_type()
          'post_per_page' => -1, // Cantidad de productos que va a traer (-1 = todos)
          'order' => 'ASC', // Por defecto los trae en orden de fecha, mostrando primero el más nuevo y al último el más viejo
          'order_by' => 'title', // Por defecto es 'date'
        );
        
        $custom_type = new WP_Query($args);

        if($custom_type->have_posts()){
          while($custom_type->have_posts()){
            $custom_type->the_post();
            ?>
              <div class="col-4">
                <figure>
                  <?php the_post_thumbnail( 'large' ); ?>
                </figure>
                <h4 class="my-3 text-center">
                  <a href="<?php the_permalink();?>">
                    <?php the_title()?>
                  </a>
                </h4>
              </div>

            <?php
          }
        }
      ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>