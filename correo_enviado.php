<?php
 require 'php/conexion.php';
 require 'php/function.php';
 include 'menu.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
   
    <title>Correo_Enviado</title>
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
   





        <!--       Creacion del contenido del correo enviado-->
        <div class="row justify-content-sm-center mt-5">
        <div class="col-sm-6 mt-5" style="margin-top: 150px;">
            <p>si todos los daTos que usted ha proporcionado son correcto entonves verifique su correo electronico para poder modificar su contraseña
            <a class="btn btn-danger" href="https://mail.google.com" role="button"><i class="fab fa-google mr-5"></i>LOGIN WITH GOOGLE</a></p>
        </div>
        </div>
        










</body></html>
