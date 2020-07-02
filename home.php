<?php
    session_start();
    require 'PHP/conexion.php';
    require 'PHP/function.php';
    include 'menu.php';
   
    if (!isset($_SESSION["id_usuario"]) && !isset($_COOKIE["Usuario"])) {
        # code...
        header("location: index.php");
  
      }else{
        if (isset($_SESSION["id_usuario"])) {
          # code...
          $IdUsuario = $_SESSION['id_usuario'];
        }
        else{
          $IdUsuario =  $_COOKIE["Usuario"] ;
        }
        $Sql = "SELECT Id, Usuario, Nombre FROM usuarios WHERE Id = '$IdUsuario'";
  
      $Resultado = $DB->query($Sql); $Row = $Resultado->fetch_assoc();
     } 
      ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cuenta</title>
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
    
  </body>
  </html>
