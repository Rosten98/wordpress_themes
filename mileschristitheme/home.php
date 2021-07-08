<?php get_header(); ?>

<header class="post-thumbnail mt-100 mb-100n">
  <img src=<?php echo get_template_directory_uri()."/assets/img/blog.jpg"?> alt="">
  <h1 class="">Blog de Miles Christi</h1>
</header>

<main class="mc-container mt-200 mb-20">
  <section class="blogposts">
    <?php if(have_posts()){
      while(have_posts()){
        ?>
    <div class="blogpost">
    <?php
        the_post();
        if(has_post_thumbnail()){
          the_post_thumbnail('small');
        } else { ?>
    <img src=<?php echo get_template_directory_uri()."/assets/img/entry.jpg"?> alt="">
    <?php }
    ?>
    <div class="blogpost-content">
    <span><?php the_date()?></span>
    <h3 style="margin: 10px auto"><?php the_title()?></h3>
    <div class="">
      <?php the_excerpt()?>
    </div>
    <?php the_shortlink( 'Leer artículo')?>
    </div>
    </div>
    <?php }
    ?>
    </section>
    <section class="blogposts-pagination">
      <div class="previous">
        <?php  previous_posts_link( 'Anterior' );?>
      </div>
      <div class="next">
        <?php next_posts_link('Siguiente'); ?>
      </div>
  </section>
  <?php }?>
</main>

<?php get_footer(); ?>