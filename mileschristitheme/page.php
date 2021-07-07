<?php get_header(); ?>

<?php if(have_posts()){
  while(have_posts()){
    the_post();?>
    <?php 
      if(has_post_thumbnail()){
     ?>
<header class="post-thumbnail mt-100 mb-100n">
  <?php the_post_thumbnail('large')?>
  <h1 class=""><?php the_title()?></h1>
</header>
     <?php   
      }
    ?>
<main class="mc-container mt-200">
      <div class="my-20 post-content">
        <?php if(!has_post_thumbnail()){?>
          <h1 class=""><?php the_title()?></h1>
        <?php
        }
        ?>
        <?php the_content()?>
      </div>
  <?php
    }
  }?>
</main>

<?php get_footer(); ?>