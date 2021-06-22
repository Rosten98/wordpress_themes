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
  <!-- Navigation -->
  <nav class="nav">
    <div class="mc-container inner-nav">
      <a href="./#" class="logo-link">
        <img src=<?php echo get_template_directory_uri()."./assets/img/logo-white.png"?> alt="" height="60px" class="logo">
      </a>
      <div class="nav-icons">
        <span class="iconify search" data-inline="false" data-icon="akar-icons:search" id="search" style="color:white;"></span>
        <span class="iconify" data-inline="false" data-icon="akar-icons:text-align-right" id="ham-menu" onclick="openNav()"></span>
      </div>
      <div class="menu-mc-container">
        <span class="iconify cross" data-inline="false" data-icon="akar-icons:cross" id="menu-close" onclick="closeNav()"></span>
        <ul class="menu" id="menu">
          <li><a href="#about" onclick="closeNav()">Nosotros</a></li>
          <li><a href="#retreats" onclick="closeNav()">Apostolados</a></li>
          <li><a href="#resources" onclick="closeNav()">Blog</a></li>
          <li><a href="#Donate" onclick="closeNav()"><button>Donar ahora</button></a></li>
        </ul>
        <ul class="menu-desktop">
          <li><a href="#about">Nosotros</a></li>
          <li><a href="#retreats">Apostolados</a></li>
          <li><a href="#resources">Blog</a></li>
          <li><a href="#Donate"><button>Donar ahora</button></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header -->
  <header class="header-quote">
    <div class="box-helper"></div>
    <video width="100%" height="100%" autoplay muted loop>
      <source src=<?php echo get_template_directory_uri()."./assets/main_video.mp4"?> type="video/mp4">
    Your browser does not support the video tag.
    </video>
    <h5 class="quote">
      Lorem ipsum dolor sit amet. 
      <br>
      <span>Quote</span>
    </h5>
  </header>
  <!-- What's Miles Christi -->
  <section class="mc-container what-is-mc" id="about">
    <h2>¿Qué es Miles Christi y qué ofrece?</h2>
    <p class="bg-green">
      Nuestros sacerdotes y hermanos buscan la santidad para la mayor gloria de Dios.
    </p>
    <p>
      La misión de nuestro Instituto es la <b>santificación de los laicos, particularmente de los jóvenes.</b>
    </p>
    <ul class="events">
      <li class="bg-orange">1. Dirección espiritual</li>
      <li class="bg-brown">2. Retiros Espirituales</li>
      <li class="bg-darkblue">3. Formación Católica</li>
    </ul>
    <div class="videos">
      <iframe width="100%" height="400" src="https://www.youtube.com/embed/udG5jrYDkok" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
      <iframe width="100%" height="400" src="https://www.youtube.com/embed/udG5jrYDkok" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
    </div>
  </section>
  <!-- Next Retreats -->
  <section class="retreats" id="retreats">
    <img src=<?php echo get_template_directory_uri()."./assets/img/ejercicios.jpg"?> alt="" width="100%">
    <div class="retreats-filter"></div>
    <div class="mc-container retreats-text">
      <h3>
        Transforma tu amistad con Cristo en los Ejercicios Espirituales
      </h3>
      <button>
        Próximas fechas
        <span class="iconify" data-inline="false" data-icon="akar-icons:arrow-right-thick"></span>
      </button>
    </div>
  </section>
  <!-- Other resources -->
  <section class="mc-container" id="resources">
    <div class="bg-orange resource">
      <h3>
        Videos Espirituales
      </h3>
      <span class="iconify" data-inline="false" data-icon="akar-icons:airplay-video"></span>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <button>Ver todo</button>
    </div>
    <div class="bg-darkblue resource">
      <h3>
        Podcast - Historias Católicas
      </h3>
      <span class="iconify" data-inline="false" data-icon="akar-icons:headphone"></span>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <button>Ver todo</button>
    </div>
    <div class="bg-green resource">
      <h3>
        Blog
      </h3>
      <span class="iconify" data-inline="false" data-icon="akar-icons:newspaper"></span>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <button>Ver todo</button>
    </div>
  </section>
  <!-- Upcoming events -->
  <section class="mc-container upcoming">
    <h2>Próximos Eventos</h2>
    <div>
      <div class="card">
        <div class="card-left">
          <h4>Curso de Biblia</h4>
          <p>Semanal</p>
        </div>
        <a><button>Saber más</button></a>
      </div>
      <div class="card">
        <div class="card-left">
          <h4>Ejercicios Espirituales</h4>
          <p>Hombres y Mujeres</p>
        </div>
        <a><button>Saber más</button></a>
      </div>
    </div>
  </section>
  <!-- Instagram -->
  <section class="instagram">
    <h4>Síguenos en Instagram</h4>
    <a href="https://www.instagram.com/mileschristimx/" target="_blank" class="button">
      <span class="iconify" data-inline="false" data-icon="akar-icons:instagram-fill" style="font-size: 20px;margin-right: 10px;margin-left: 0;"></span>
      <span class="follow">Seguir en Instagram</span>
    </a>
    <div class="mc-container"> 
      <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag" style="z-index: 0;">Powered by Curator.io</a></div>
    </div>
  </section>
  <!-- Footer -->
<?php get_footer(); ?>  