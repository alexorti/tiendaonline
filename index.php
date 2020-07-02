<?php
    require 'menu.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Tienda En Linea</title>
  <!-- <link rel="manifest" href="manifest.json"> -->
  <!-- Como se vera la url en android -->
  <meta name="theme-color" content="rgb(246, 173, 18)" />
  <!-- Ios permite hacer todas las modificaciones a IOS   -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <link rel="apple-touch-icon" href="images/favicons/Logo.jpg" />
  <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png" />

  <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png" />
  <!-- MOdificacion del Splash de pantalla -->
  <!---Modifcaciones del splash screen---->

  <!-- iPhone X (1125px x 2436px) -->
  <link rel="apple-touch-startup-image" media="(device-width:375px) and (device-height: 812px) and(-webkit-device-pixelratio:3)" href="images/favicons/Logo.jpg" />
  <!-- iPhone 8, 7, 6s, 6 (750px x 1334px) -->
  <link rel="apple-touch-startup-image" media="(device-width:
375px) and (device-height: 667px) and (-webkit-device-pixelratio:
2)" href="images/favicons/Logo.jpg" />
  <!-- iPhone 8 Plus, 7 Plus, 6s Plus, 6 Plus (1242px x
2208px) -->
  <link rel="apple-touch-startup-image" media="(device-width:
414px) and (device-height: 736px) and (-webkit-device-pixelratio:
3)" href="images/favicons/Logo.jpg">
  <!-- iPhone 5 (640px x 1136px) -->
  <link rel="apple-touch-startup-image" media="(device-width:
320px) and (device-height: 568px) and (-webkit-device-pixelratio:
2)" href="images/favicons/Logo.jpg">
<meta name="apple-mobile-web-app-status-bar-style"
content="black-translucent">
<!---Permite agregar el nombre a la aplicaciòn---->
<meta name="apple-mobile-web-app-title" content="TiendaOnLine">
</head>

<body>
  <!--        Creacion del contenido del index-->

  <section class="row ContenidoInicio">
    <article class="row">
      <div class="col-md-4 col-6 Imagen">
        <a href="categoria.php"><img src="images/servicios/Motorista.jpg" alt="Mandaditos" />
          <h5 class="text-center">Mandaditos</h5>
        </a>
        <span>1 negocios</span>
      </div>
      <div class="col-md-4 col-6 Imagen">
        <a href="categoria.php"><img src="images/Inicio/salmon.jpg" alt="Comida" />
          <h5 class="text-center">Comida</h5>
        </a>
        <span>1 negocios</span>
      </div>
      <div class="col-md-4 col-6 Imagen">
        <a href="categoria.php"><img src="images/Inicio/coffee.jpg" alt="Lapteos" />
          <h5 class="text-center">Lácteos</h5>
        </a>
        <span>1 negocios</span>
      </div>
      <div class="col-md-4 col-6 Imagen">
        <a href="categoria.php"><img src="images/Inicio/pasador/frutas.jpg" alt="Mandaditos" />
          <h5 class="text-center">Supermercado</h5>
        </a>
        <span>1 negocios</span>
      </div>
      <div class="col-md-4 col-6 Imagen">
        <a href="categoria.php"><img src="images/Inicio/Servicios.jpg" alt="Transporte" />
          <h5 class="text-center">Transporte</h5>
        </a>
        <span>1 negocios</span>
      </div>
      <div class="col-md-4 col-6 Imagen">
        <a href="categoria.php"><img src="images/Categorias/ropa.jpg" alt="Mandaditos" />
          <h5 class="text-center">Educación</h5>
        </a>
        <span class="text-center">1 negocios</span>
      </div>
      <div class="col-md-4 col-6 Imagen">
        <a href="categoria.php"><img src="images/Inicio/pasador/laptop_apple.jpg" alt="Mandaditos" />
          <h5 class="text-center">Otros Servicios</h5>
        </a>
        <span>1 negocios</span>
      </div>
    </article>
  </section>
</body>

</html>