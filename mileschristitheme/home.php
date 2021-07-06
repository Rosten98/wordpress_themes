<?php get_header(); ?>

<main class="mc-container mt-200 mb-20">
<h1 class="my-20">Blog</h1>
<section class="blogposts">
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