<?php get_header(); ?>

<?php if(have_posts()){
  while(have_posts()){
    the_post();?>
<header class="post-thumbnail mt-100">

  <?php the_post_thumbnail('large')?>
  </header>
<main class="mc-container">
      <h1 class="my-20"><?php the_title()?></h1>
      <div class="my-20 post-content">
        <?php the_content()?>
      </div>
  <?php
    }
  }?>
</main>

<?php get_footer(); ?>