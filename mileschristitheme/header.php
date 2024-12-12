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
      <img src=<?php echo get_template_directory_uri()."/assets/img/logo-white.png"?> alt="" height="60px" class="logo">
    </a>
    <div class="nav-icons">
      <!-- <span class="iconify search" data-inline="false" data-icon="akar-icons:search" id="search" style="color:white;"></span> -->
      <span class="iconify" data-inline="false" data-icon="akar-icons:text-align-right" id="ham-menu" onclick="openNav()"></span>
    </div>
    <div class="menu-mc-container">
      <span class="iconify cross" data-inline="false" data-icon="akar-icons:cross" id="menu-close" onclick="closeNav()"></span>
      <div class="menu" id="menu">
        <ul class="menu menu-ul" id="menu">
          <li><a href=<?php echo home_url()?>>Inicio</a></li>
          <li><a href=<?php echo home_url().'/ejercicios-espirituales/'?>>Ejercicios Espirituales</a></li>
          <li><a href=<?php echo home_url().'/actividades/'?>>Actividades</a></li>
          <li><a href=<?php echo home_url().'/blog/'?>>Blog</a></li>
        </ul>
        <ul><li><a href="<?php echo home_url().'/donaciones/'?>"><button class="donate">Donar ahora</button></a></li></ul>
      </div>
      <div class="menu-desktop">
        <ul class="menu-desktop">
          <li><a href=<?php echo home_url()?>>Inicio</a></li>
          <li><a href=<?php echo home_url().'/ejercicios-espirituales/'?>>Ejercicios Espirituales</a></li>
          <li><a href=<?php echo home_url().'/actividades/'?>>Actividades</a></li>
          <li><a href=<?php echo home_url().'/blog/'?>>Blog</a></li>
        </ul>
        <ul><li><a href="<?php echo home_url().'/donaciones/'?>"><button class="donate">Donar ahora</button></a></li></ul>
      </div>
    </div>
  </div>
</nav>