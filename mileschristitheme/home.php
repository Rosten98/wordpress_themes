<?php get_header(); ?>

<main class="mc-container mt-200">
<?php if(have_posts()){
  while(have_posts()){
    ?>
<div class="blogpost">
<?php
    the_post();
    if(has_post_thumbnail()){
      the_post_thumbnail('small');
    }
  ?>
<h3 class="my-20"><?php the_title()?></h3>
<div class="my-20 post-content">
  <?php the_content()?>
</div>
  <?php the_date()?>
  <?php the_shortlink( 'Leer artículo')?>
</div>
  <?php
    }
  }?>
</main>

<?php get_footer(); ?>