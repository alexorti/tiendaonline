
<?php
    include 'menu.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Empresas Existentes</title>
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

    <!--        Creacion del contenido de las categorias-->
    <section class="row Busqueda">
        <article class="col-md-6">
            <form action="">
                <input type="search" placeholder="Buscar">

            </form>
            <h4><a href="#"><i class='fas fa-chevron-left'></i>Transporte</a></h4>
        </article>
    </section>
    <!-- Swiper -->
    <section class="row">
        <div class="col-md-6 col-10 swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="categorias.html"><img src="images/servicios/Motorista.jpg"
                            alt="Mandaditos">

                    </a></div>
                <div class="swiper-slide"><a href="#"><img src="images/Inicio/salmon.jpg" alt="Comida">

                    </a></div>
                <div class="swiper-slide"><a href="#"><img src="images/Inicio/coffee.jpg" alt="Lapteos">

                    </a></div>
                <div class="swiper-slide"><a href="#"><img src="images/Inicio/pasador/frutas.jpg" alt="Mandaditos">

                    </a></div>
                <div class="swiper-slide"><a href="#"><img src="images/Inicio/Servicios.jpg" alt="Transporte">

                    </a></div>
                <div class="swiper-slide"><a href="#"><img src="images/Categorias/ropa.jpg" alt="Mandaditos">

                    </a></div>
                <div class="swiper-slide"><a href="#"><img src="images/Inicio/pasador/laptop_apple.jpg"
                            alt="Mandaditos">

                    </a></div>
                <div class="swiper-slide"><a href="#"><img src="images/Inicio/coffee.jpg" alt="Lapteos">

                    </a></div>
                <div class="swiper-slide"><a href="#"><img src="images/Inicio/pasador/frutas.jpg" alt="Mandaditos">

                    </a></div>
                <div class="swiper-slide"><a href="#"><img src="images/Inicio/Servicios.jpg" alt="Transporte">

                    </a></div>
                <div class="swiper-slide"><a href="#"><img src="images/Inicio/Servicios.jpg" alt="Transporte">

                    </a></div>
                <div class="swiper-slide"><a href="#"><img src="images/Inicio/Servicios.jpg" alt="Transporte">

                    </a></div>


            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!--Productos de  cada Seccion-->

    <section class="Empresas">
        <div class="row">
            <div class="col-md-6 col-lg-4 col-6">
                <a href="productos.php">
                    <div class="EncabezadoImg">
                        <img src="images/Perfil.jpg" alt="Perfil de Usuario">
                        <div>
                            <h5>Alexander Ortiz</h5>
                            <small>Empresa de bienes y sevicios</small>
                        </div>
                    </div>
                    <img src="images/Categorias/maquillaje.jpg" alt="">
                </a>
            </div>

            <div class="col-md-6 col-lg-4 col-6 ">
                <a href="productos.php">
                    <div class="EncabezadoImg">
                        <img src="images/Perfil.jpg" alt="Perfil de Usuario">
                        <div>
                            <h5>Alexander Ortiz</h5>
                            <small>Empresa de bienes y sevicios</small>
                        </div>
                    </div>
                    <img src="images/Categorias/ropa.jpg" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-6 ">
                <a href="productos.php">
                    <div class="EncabezadoImg">
                        <img src="images/Perfil.jpg" alt="Perfil de Usuario">
                        <div>
                            <h5>Alexander Ortiz</h5>
                            <small>Empresa de bienes y sevicios</small>
                        </div>
                    </div>
                    <img src="images/Categorias/ropa.jpg" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-6">
                <a href="productos.php">
                    <div class="EncabezadoImg">
                        <img src="images/Perfil.jpg" alt="Perfil de Usuario">
                        <div>
                            <h5>Alexander Ortiz</h5>
                            <small>Empresa de bienes y sevicios</small>
                        </div>
                    </div>
                    <img src="images/Categorias/maquillaje.jpg" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-6 ">
                <a href="productos.php">
                    <div class="EncabezadoImg">
                        <img src="images/Perfil.jpg" alt="Perfil de Usuario">
                        <div>
                            <h5>Alexander Ortiz</h5>
                            <small>Empresa de bienes y sevicios</small>
                        </div>
                    </div>
                    <img src="images/Categorias/ropa.jpg" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-6">
                <a href="productos.php">
                    <div class="EncabezadoImg">
                        <img src="images/Perfil.jpg" alt="Perfil de Usuario">
                        <div>
                            <h5>Alexander Ortiz</h5>
                            <small>Empresa de bienes y sevicios</small>
                        </div>
                    </div>
                    <img src="images/Categorias/maquillaje.jpg" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-6">
                <a href="productos.php">
                    <div class="EncabezadoImg">
                        <img src="images/Perfil.jpg" alt="Perfil de Usuario">
                        <div>
                            <h5>Alexander Ortiz</h5>
                            <small>Empresa de bienes y sevicios</small>
                        </div>
                    </div>
                    <img src="images/Categorias/maquillaje.jpg" alt="">
                </a>
            </div>

        </div>
    </section>








</body>

</html>
