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
      <a href="./" class="logo-link">
        <img src=<?php echo get_template_directory_uri()."/assets/img/logo-white.png"?> alt="" height="60px" class="logo">
      </a>
      <div class="nav-icons">
        <!-- <span class="iconify search" data-inline="false" data-icon="akar-icons:search" id="search" style="color:white;"></span> -->
        <span class="iconify" data-inline="false" data-icon="akar-icons:text-align-right" id="ham-menu" onclick="openNav()"></span>
      </div>
      <div class="menu-mc-container">
        <span class="iconify cross" data-inline="false" data-icon="akar-icons:cross" id="menu-close" onclick="closeNav()"></span>
        <ul class="menu" id="menu">
          <li><a href=<?php echo home_url()?>>Inicio</a></li>
          <li><a href=<?php echo home_url().'/ejercicios-espirituales/'?>>Ejercicios Espirituales</a></li>
          <li><a href=<?php echo home_url().'/actividades/'?>>Actividades</a></li>
          <li><a href=<?php echo home_url().'/blog/'?>>Blog</a></li>
          <li><a href=<?php echo home_url().'/donaciones'?> onclick="closeNav()"><button>Donar ahora</button></a></li>
        </ul>
        <ul class="menu-desktop">
          <li><a href=<?php echo home_url()?>>Inicio</a></li>
          <li><a href=<?php echo home_url().'/ejercicios-espirituales/'?>>Ejercicios Espirituales</a></li>
          <li><a href=<?php echo home_url().'/actividades/'?>>Actividades</a></li>
          <li><a href=<?php echo home_url().'/blog/'?>>Blog</a></li>
          <li><a href=<?php echo home_url().'/donaciones'?>><button>Donar ahora</button></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header -->
  <header class="header-quote">
    <div class="box-helper"></div>
    <video width="100%" height="100%" autoplay muted loop>
      <source src="https://firebasestorage.googleapis.com/v0/b/donaciones-c7b9f.appspot.com/o/1VideoPagMC.mp4?alt=media&token=bd556641-3ff8-44fd-8935-52425b7e8fbe" type="video/mp4">
    Your browser does not support the video tag.
    </video>
  </header>
  <!-- What's Miles Christi -->
  <section class="what-is-mc" id="about">
    <div class="mc-container">
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
      <div class="videos videos-phone">
        <iframe width="100%" height="250" src="<?php echo get_option('ytv1');?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="100%" height="250" src="<?php echo get_option('ytv2');?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
      </div>
      <div class="videos videos-others">
        <iframe width="100%" height="400" src="<?php echo get_option('ytv1');?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="100%" height="400" src="<?php echo get_option('ytv2');?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
      </div>
    </div>
  </section>
  <!-- Proximos Ejercicios Espirituales -->
  <section class="mc-container upcoming-retreats">
    <h2 style="text-align:center">Próximos Ejercicios Espirituales</h2>
    <div class="container">
      <?php if (get_option('ret') != "none") { ?>
      <div class="mySlides">
        <a href="<?php echo get_option('lret')?>">
          <img src="<?php echo get_option('ret')?>" style="width:100%">
        </a>
      </div>
      <?php }?>
      <?php if (get_option('ret1') != "none") { ?>
      <div class="mySlides">
        <a href="<?php echo get_option('lret1')?>">
          <img src="<?php echo get_option('ret1')?>" style="width:100%">
        </a>
      </div>
      <?php }?>
      <?php if (get_option('ret2') != "none") { ?>
      <div class="mySlides">
        <a href="<?php echo get_option('lret2')?>">
          <img src="<?php echo get_option('ret2')?>" style="width:100%">
        </a>
      </div>
      <?php }?>
      <?php if (get_option('ret3') != "none") { ?>
      <div class="mySlides">
        <a href="<?php echo get_option('lret3')?>">
          <img src="<?php echo get_option('ret3')?>" style="width:100%">
        </a>
      </div>
      <?php }?>
      <?php if (get_option('ret4') != "none") { ?>
      <div class="mySlides">
        <a href="<?php echo get_option('lret4')?>">
          <img src="<?php echo get_option('ret4')?>" style="width:100%">
        </a>
      </div>
      <?php }?>
      
      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

      <div class="caption-container">
        <p id="caption"></p>
      </div>

      <div class="row">
        <?php if (get_option('ret') != "none") { ?>
        <div class="column">
          <img class="demo cursor" src="<?php echo get_option('ret')?>" style="width:100%" onclick="currentSlide(1)" alt="<?php echo get_option('tret')?>">
        </div>
        <?php }?>
        <?php if (get_option('ret1') != "none") { ?>
        <div class="column">
          <img class="demo cursor" src="<?php echo get_option('ret1')?>" style="width:100%" onclick="currentSlide(2)" alt="<?php echo get_option('tret1')?>">
        </div>
        <?php }?>
        <?php if (get_option('ret2') != "none") { ?>
        <div class="column">
          <img class="demo cursor" src="<?php echo get_option('ret2')?>" style="width:100%" onclick="currentSlide(3)" alt="<?php echo get_option('tret2')?>">
        </div>
        <?php }?>
        <?php if (get_option('ret3') != "none") { ?>
        <div class="column">
          <img class="demo cursor" src="<?php echo get_option('ret3')?>" style="width:100%" onclick="currentSlide(4)" alt="<?php echo get_option('tret3')?>">
        </div>
        <?php }?>
        <?php if (get_option('ret4') != "none") { ?>
        <div class="column">
          <img class="demo cursor" src="<?php echo get_option('ret4')?>" style="width:100%" onclick="currentSlide(5)" alt="<?php echo get_option('tret4')?>">
        </div>
        <?php }?>
      </div>
    </div>
  </section>
  <!-- Parresia -->
  <section class="mc-container parresia">
    <h2>Próximos eventos</h2>
    <?php if (get_option('evt') != "none") { ?>
    <div class="event">
      <img src=<?php echo get_option('evt')?> alt=<?php echo get_option('tevt')?>>
      <a href=<?php echo get_option('levt')?> target="_blank" referrerpolicy="no-referrer">
        <button>¡Inscribete ya!</button>
      </a> 
    </div>
    <br>
    <?php } ?>
    <div class="next-events">
      <?php if (get_option('evt1') != "none") { ?>
      <div class="event">
        <img src=<?php echo get_option('evt1')?> alt=<?php echo get_option('tevt1')?>>
        <a href=<?php echo get_option('levt1')?> target="_blank" referrerpolicy="no-referrer">
          <button>¡Inscribete ya!</button>
        </a> 
      </div>
      <br>
      <?php } ?>
      <?php if (get_option('evt2') != "none") { ?>
      <div class="event">
        <img src=<?php echo get_option('evt2')?> alt=<?php echo get_option('tevt2')?>>
        <a href=<?php echo get_option('levt2')?> target="_blank" referrerpolicy="no-referrer">
          <button>¡Inscribete ya!</button>
        </a> 
      </div>
      <?php } ?>
    </div>
  </section>
  <!-- Next Retreats -->
  <section class="retreats" id="retreats">
    <img src=<?php echo get_template_directory_uri()."/assets/img/ejercicios_espirituales.jpg"?> alt="" width="100%">
    <div class="retreats-filter"></div>
    <div class="mc-container retreats-text">
      <h3>
        Transforma tu amistad con Cristo en los Ejercicios Espirituales
      </h3>
      <a href=<?php echo home_url().'/ejercicios-espirituales'?>
      >
      <button>
        Próximas fechas
        <span class="iconify" data-inline="false" data-icon="akar-icons:arrow-right-thick"></span>
      </button>
    </a>
    </div>
  </section>
  <!-- Other resources -->
  <section class="mc-container" id="resources">
    <div class="bg-orange resource">
      <h3>
        Videos Espirituales
      </h3>
      <span class="iconify" data-inline="false" data-icon="akar-icons:airplay-video"></span>
      <p>Toma un par de minutos para acceder a nuestros videos en los que presentamos temas para todas las edades.</p>
      <a href="https://www.youtube.com/c/MilesChristiMX" target="_blank"><button>Ver todo</button></a>
    </div>
    <div class="bg-darkblue resource">
      <h3>
        Podcast - Historias Católicas
      </h3>
      <span class="iconify" data-inline="false" data-icon="akar-icons:headphone"></span>
      <p>Escucha nuestro podcast Historias Católicas, historias que inspiran y encienden en amor a Dios.</p>
      <a href="https://open.spotify.com/show/2dUq9h1RScXeh6hgjJe0pk" target="_blank"><button>Ver todo</button></a>
    </div>
    <div class="bg-green resource">
      <h3>
        Blog
      </h3>
      <span class="iconify" data-inline="false" data-icon="akar-icons:newspaper"></span>
      <p>Una lectura puede tener un gran impacto en tu fe, pásate por nuestro blog para ver qué hay de nuevo.</p>
      <a href=<?php echo home_url().'/blog'?>><button>Ver todo</button></a>
    </div>
  </section>
  <!-- Upcoming events -->
  
  <!-- Apostolados -->
  <!--<section class="apostolados">
    <h2>Eventos</h2>
    <div class="mc-container">
    </div>
  </section>-->

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