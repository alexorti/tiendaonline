<?php 

require 'php/conexion.php';
require 'php/function.php';
include 'menu.php';

$User_Id = $DB->real_escape_string($_POST['User_Id']);
$Token = $DB->real_escape_string($_POST['Token']);
$Contraseña_1 = $DB->real_escape_string($_POST['Contraseña_1']);
$Contraseña_2 = $DB->real_escape_string($_POST['Contraseña_2']);

  if (ValidaContraseña($Contraseña_1, $Contraseña_2)) {
    # code...
    $Contra_Hash = HashPassword($Contraseña_1);
    if (CambioContraseña($Contra_Hash, $User_Id, $Token)) {
      # code...
      $Mensaje = "Se ha Guardado y Se realizado el cambio de contraseña";
    }
    else{
      $Mensaje = "Error al modificar contraseña";
    }
  }else{
    $Mensaje = "Las contraseñas no cohinciden, Realice nuevamente el Proceso desde cero";
  }

 ?>
 <?php
 
?>

<!DOCTYPE html>
<html lang="es">

<head>
   
    <title>Verificacion de la contraseña</title>
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
        <div class="row justify-content-sm-center">
        <div class="col-sm-6">
        <h3><?php echo $Mensaje; ?></h3>
            <p>Inicie sesion para poder verificar si su cambio se realizo correctamente <a href="login.php">Iniciar Sesion</a></p>
        </div>
        </div>
        










</body></html>
