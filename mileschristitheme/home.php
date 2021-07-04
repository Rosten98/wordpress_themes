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
  <?php
    }
  }?>
</section>
</main>

<?php get_footer(); ?>