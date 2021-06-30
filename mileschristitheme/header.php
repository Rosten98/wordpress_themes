<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miles Christi</title>
  <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
  <?php wp_head(); ?>
</head>
<body>


<nav class="nav">
  <div class="mc-container inner-nav">
    <a href=<?php echo home_url()?> class="logo-link">
      <img src=<?php echo get_template_directory_uri()."./assets/img/logo-white.png"?> alt="" height="60px" class="logo">
    </a>
    <div class="nav-icons">
      <span class="iconify search" data-inline="false" data-icon="akar-icons:search" id="search" style="color:white;"></span>
      <span class="iconify" data-inline="false" data-icon="akar-icons:text-align-right" id="ham-menu" onclick="openNav()"></span>
    </div>
    <div class="menu-mc-container">
      <span class="iconify cross" data-inline="false" data-icon="akar-icons:cross" id="menu-close" onclick="closeNav()"></span>
      <div class="menu" id="menu">
       <?php wp_nav_menu(
          array(
            'theme_location' => 'top_menu',
            'menu_class' => 'menu menu-ul', // class for wp 'ul' element
            'container_class' => 'menu-container', // class for wp 'container' element
            'menu_id' => 'menu',
            'container' => false,
            )
        ); ?>
        <ul><li><a href="#Donate"><button class="donate">Donar ahora</button></a></li></ul>
      </div>
      <div class="menu-desktop">
        <?php wp_nav_menu(
          array(
            'theme_location' => 'top_menu',
            'menu_class' => 'menu-desktop', // class for wp 'ul' element
            'container_class' => 'menu-container', // class for wp 'container' element
            )
        ); ?>
        <ul><li><a href="#Donate"><button class="donate">Donar ahora</button></a></li></ul>
      </div>
    </div>
  </div>
</nav>