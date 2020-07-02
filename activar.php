<?php 
  require 'PHP/conexion.php';
  require 'PHP/function.php';

    if (isset($_GET["Id"]) and isset($_GET['Val'])) {
      # code...
      $IdUsuario = $_GET['Id'];
      $Token = $_GET['Val'];
      $Mensaje = ValidaToken($IdUsuario, $Token);
    }

 ?>
 <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Activar Cuenta</title>
    <meta name="author" content="Alexander Ortiz">
    <meta name="description" content="Venta de Productos de gran varieda en todo lugar">
    <meta name="keywords" content="venta, productos, tienda online,">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="manifest" href="manifest.json">
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
    <div class="container">
        
                <h3>¡¡<?php echo $Mensaje; ?>  !!</h3>
                <p>Gracias
                    por Haber ingresado a nuestra pagina web ahora ya ha activado su cuenta ya puede iniciar sesión en nuestra pagina princial</p><br><br>
                <a href="login.php"><button type="button" class="Btn">Iniciar Sesión</button></a>
        


    </div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
