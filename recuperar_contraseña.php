<?php
 require 'php/conexion.php';
 require 'php/function.php';
include 'menu.php';
 $Errors = array();
    if(!empty($_POST)){
        $Email = $DB->real_escape_string($_POST['Usuario']);
        
        if (!IsEmail($Email)) {
			# code...
			//$Errors[] = "Debe de llenar todos los campos";
			array_push($Errors, "Debe Ingresar un Correo Electronico Valido");
        }
        if(EmailExiste($Email)){
            $User_Id = GetValor('Id', 'Correo', $Email);
			$Nombre = GetValor('Nombre','Correo',$Email);
            $Token = GeneraTokenContra($User_Id); 
            $url = 'http://'.$_SERVER["SERVER_NAME"].'/TiendaOnLine/CambioContra.php?User_Id='.$User_Id.'&Token='.$Token;
			$Asunto = 'Recuperar Contraseña en el sistema';
            $Cuerpo = "Hola $Nombre: <br> <br> Se ha solitado un reinicio de contraseña. <br> <br> Para restaurar la contraseña, visita la siguiente dirección para <a href='$url'>Cambiar Contraseña</a>";
            if (EnviarEmail($Email, $Nombre, $Asunto, $Cuerpo)) {
				# code...
				include 'correo_enviado.php';
				exit;
			}else{
				$Errors[] = "Error al enviar el email";
			}

        }
        else{
			$Errors[]= "No existe el correo Electronico";
		}
            
    }
 
?>

<!DOCTYPE html>
<html lang="es">

<head>
   
    <title>Recupera Contraseña</title>
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
               <h3 class="text-center">Recuperar Contraseña</h3>
                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" autocomplete="off">
                    <div class="form-group mt-3">
                        
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo Electronico"name="Usuario">
                        
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
                    </div>
                    <button type="submit" class="btn ">Enviar</button>
                    </div>
                </form>
                <?php echo Errores($Errors); ?>
                <p class="text-center mt-4">Aun no tienes una cuenta?</p>
                <p class="text-center"><a href="register.php" >Registrate ahora</a></p>
                
            </article>
        </section>










</body></html>
