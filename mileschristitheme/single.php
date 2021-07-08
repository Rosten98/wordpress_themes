<?php get_header(); ?>

<?php if(have_posts()){
  while(have_posts()){
    the_post();
?>
<header class="post-thumbnail mt-100 mb-100n">
  <?php if(has_post_thumbnail()){
    the_post_thumbnail('large');
  } else { ?>
  <img src=<?php echo get_template_directory_uri()."/assets/img/entry.jpg"?> alt="">
  <?php } ?>
</header>
     
<main class="mc-container mt-200 mb-100">
      <h1 class="my-20"><?php the_title()?></h1>
      <div class="my-20 post-content">
        <?php the_content()?>
      </div>
  <?php
    }
  }?>
</main>

<?php get_footer(); ?>