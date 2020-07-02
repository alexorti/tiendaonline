
<?php
include 'menu.php';

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>Productos en Oferta</title>
    <meta name="application-name" content="Tienda en Linea" />
    <meta name="author" content="Alexander Ortiz" />
    <meta
      name="description"
      content="Venta de Productos de gran varieda en todo lugar"
    />
    <meta name="keywords" content="venta, productos, tienda online," />
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
    
      <!--        Creacion del contenido de los productos por cada empresa existente-->

      <section class="row justify-content-md-center ProductoEmpresa">
        <article class="col-md-6 col-12 Banner">
          <img src="images/banner.jpg" alt="Banner de Empresa" />
          <div class="Efe"></div>
          <div class="Empre">
            <div>
              <img src="images/Perfil.jpg" alt="" />
            </div>
            <div>
              <h4>Pupusas Paquita</h4>
              <small>Desayunos calientes, almuerso</small>
              <small>Quinta Av Ahuachpán Casa #515</small>
            </div>
          </div>
        </article>
      </section>

      <!--    Modificar despues la api de whatsapp-->
      <section class="row Celular justify-content-sm-center">
        <article class="col-md-6">
          <a href="#"><i class="fab fa-whatsapp-square"></i>6633-2365</a>
        </article>
      </section>

      <section class="row justify-content-md-center CuadroBusqueda">
        <article class="col-md-6 justify-content-center">
          <form action="">
            <input type="text" placeholder="Buscar" />
            <button type="submit" class="btn">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </article>
      </section>

      <div class="Servi">
        <section class="row">
          <article class="col-lg-6 col-12 mb-4">
            <div>
              <img
                src="images/productos/pupusas.jpg"
                alt="servicios o productos"
              />
            </div>
            <div>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
                itaque ex quasi aspernatur, ea debitis
              </p>
              <span>$1.24</span>
              <form action="">
                <input type="number" placeholder="1" />
                <button type="submit" class="btn">Agregar</button>
              </form>
            </div>
          </article>
          <article class="col-lg-6 col-12 mb-4">
            <div>
              <img
                src="images/productos/pupusas.jpg"
                alt="servicios o productos"
              />
            </div>
            <div>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
                itaque ex quasi aspernatur, ea debitis
              </p>
              <span>$1.24</span>
              <form action="">
                <input type="number" placeholder="1" />
                <button type="submit" class="btn">Agregar</button>
              </form>
            </div>
          </article>
          <article class="col-lg-6 col-12 mb-4">
            <div>
              <img
                src="images/productos/pupusas.jpg"
                alt="servicios o productos"
              />
            </div>
            <div>
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
                itaque ex quasi aspernatur, ea debitis
              </p>
              <span>$1.24</span>
              <form action="">
                <input type="number" placeholder="1" />
                <button type="submit" class="btn">Agregar</button>
              </form>
            </div>
          </article>
        </section>
      </div>

      
  </body>
</html>

