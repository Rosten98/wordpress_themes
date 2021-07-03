<?php get_header(); ?>

<?php if(have_posts()){
  while(have_posts()){
    the_post();?>
    <?php 
      if(has_post_thumbnail()){
     ?>
<header class="post-thumbnail mt-100 mb-100n">
  <?php the_post_thumbnail('large')?>
</header>
     <?php   
      }
    ?>
<main class="mc-container mt-200">
      <h1 class="my-20"><?php the_title()?></h1>
      <div class="my-20 post-content">
        <?php the_content()?>
      </div>
  <?php
    }
  }?>
</main>

<?php get_footer(); ?>