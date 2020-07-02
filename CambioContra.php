<?php
 require 'php/conexion.php';
 require 'php/function.php';
 include 'menu.php';
 $Errors = array();
 if (empty($_GET['User_Id'])) {
    # code...
    header('location: login.php');
}
if (empty($_GET['Token'])) {
    # code...
    header('location: login.php');
}
    $User_Id = $DB->real_escape_string($_GET['User_Id']);
	$Token = $DB->real_escape_string($_GET['Token']);

	if (!VerificaTokenPass($User_Id, $Token)) {
		# code...
		echo "No se pudieron verficar los Datos solicitados o el enlace ya expiro favor solicitar un nuevo cambio de sesion";
		exit;
	}
    
?>

<!DOCTYPE html>
<html lang="es">

<head>
   
    <title>Cambio de Contraseña</title>
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
   





        <!--       Creacion del contenido del Logins-->
        <section class="row justify-content-center Login ml-2 mr-2">
            <article class="col-md-4">
               <h3 class="text-center">Cambio de Contraseña</h3>
                <form action="guardar.php" method="POST" autocomplete="off">
                <input type="hidden" id="User_Id" name="User_Id" value="<?php echo $User_Id;  ?>"> 
                       <input type="hidden" id="Token" name="Token" value="<?php echo $Token;  ?>"> 
                    <div class="form-group mt-3">
                        
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contraseña"name="Contraseña_1">
                        
                    </div>
                    <div class="form-group mt-5">
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Repetir Contraseña" name="Contraseña_2">
                    </div>
                    </small></a>
                    <div class="d-flex justify-content-between">
                        <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
                    </div>
                    <button type="submit" class="btn">Iniciar</button>
                    </div>
                </form>
                <?php echo Errores($Errors); ?>
                <p class="text-center mt-4">Aun no tienes una cuenta?</p>
                <p class="text-center"><a href="#" >Registrate ahora</a></p>
                <a class="btn btn-primary btn-block" href="#" role="button">
<i class="fab fa-facebook-f"></i>LOGIN CON FACEBOOK</a>
                <a class="btn  btn-block go" href="#" role="button"><i class="fab fa-google"></i>LOGIN CON GOOGLE</a>
                <p class="mt-3 text-center">Al usar ésta aplicación, tú aceptas los <a href="#">Términos de uso</a> y <a href="#">Política de privacidad</a></p>
            </article>
        </section>










</body></html>
