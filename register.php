<?php
    require 'php/conexion.php';
    require 'php/function.php';
    include 'menu.php';
    $Errors = array();
    /* recibiendo las variables del registro */

    if (!empty($_POST)) {
        # code...
        $Nombre = $DB->real_escape_string($_POST['Nombre']);
        $Correo = $DB->real_escape_string($_POST['Correo']);
        $Usuario = $DB->real_escape_string($_POST['Usuario']);
        $Telefono = $DB->real_escape_string($_POST['Telefono']);
        $Direccion = $DB->real_escape_string($_POST['Direccion']);
        $Contraseña_1 = $DB->real_escape_string($_POST['Contraseña_1']);
        $Contraseña_2 = $DB->real_escape_string($_POST['Contraseña_2']);
        $Activo = 0;
        $Tipo_Usuario = 2;
    

        if(EspacioVacios($Nombre,$Correo,$Usuario,$Telefono,$Direccion,$Contraseña_1,$Contraseña_2)){
            array_push($Errors, "Debe de Llenar todos los espacios");
        }
        if (!IsEmail($Correo)) {

			array_push($Errors,"Direccion de Correo invalida");
        }
        if (strlen($Contraseña_1)<8) {
			# code...
			array_push($Errors,"La clave debe de tener almenos 8 caracteres");
        }
        if (!ValidaContraseña($Contraseña_1, $Contraseña_2)) {
			# code...
			array_push($Errors,"Las Contraseñas no coinciden");
        }
        if (UsuarioExiste($Usuario)) {
			# code...
			array_push($Errors, "EL nombre de usuario $Usuario ya existe");
        }
        if (EmailExiste($Correo)) {
			# code...
			array_push($Errors, "El correo electronico $Correo ya existe");
        }
        /* Verificando si no existe ningun error para poder meter los datos a la base de datos */

        if(count($Errors)==0){
            $Contra_Hash = HashPassword($Contraseña_1);
            $Token = GeneraToken();
            $Registrando = RegistrarUsuario($Nombre,$Correo,$Usuario,$Telefono,$Direccion,$Contra_Hash,$Activo,$Token,$Tipo_Usuario);
            if ($Registrando>0) {
                # si todo el registro funciona entonces le enviare un correo para activar la cuenta mediante phpmailer
                $Url = 'http://'.$_SERVER["SERVER_NAME"].'/TiendaOnline/activar.php?Id='.$Registrando.'&Val='.$Token;
					$Asunto = 'Activar Cuenta - Tienda En Linea';

					$Cuerpo = "Estimado $Nombre: <br/> <br/> Para continuar con el proceso de Registro, es indispensable dar clic en el siguiente enlace <a href='$Url'>Activar Cuenta </a>";

					if (EnviarEmail($Correo, $Nombre, $Asunto, $Cuerpo)) {
						# code...
						include 'endregister.php';
						exit;
					}
					else{
						$Errors[] = "Error al enviar Email";
                    }
            }
            else {
                # code...
                $Errors[] ="Error al registrar ";
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    
    <title>Registrarse</title>
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
                <h3 class="text-center">Registrarse</h3>
                <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" autocomplete="off">
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="Nombre"placeholder="Escribe Tu Nombre" value="<?php if(isset($Nombre)) echo $Nombre; ?>">

                    </div>
                    <div class="form-group mt-3">

                        <input type="email" class="form-control" id="exampleInputEmail1" name="Correo" placeholder="Cual es tu Email" value="<?php if(isset($Correo)) echo $Correo; ?>">

                    </div>
                    <div class="form-group mt-3">

                        <input type="text" class="form-control" name="Usuario" placeholder="Elige un nombre de usuario" value="<?php if(isset($Usuario)) echo $Usuario; ?>">

                    </div>
                    <div class="form-group mt-3">

                        <input type="text" class="form-control" name="Telefono" placeholder="Numero de Celular" value="<?php if(isset($Telefono)) echo $Telefono; ?>">

                    </div>
                    <div class="form-group mt-3">

                        <input type="text" class="form-control" name="Direccion"placeholder="Dirección" value="<?php if(isset($Direccion)) echo $Direccion; ?>">

                    </div>
                    <div class="form-group ">
                        <input type="password" class="form-control" name="Contraseña_1"placeholder="Contraseña_1">
                    </div>
                    <div class="form-group ">
                        <input type="password" class="form-control" name="Contraseña_2"
                            placeholder="Repita su Contraseña">
                    </div>
                    <button type="submit" class="btn btn-block Regis">Registrarse</button>

                </form>
                <?php echo Errores($Errors); ?>
                <p class="text-center mt-4">Ya tienes una cuenta?</p>
                <p class="text-center"><a href="login.php">Iniciar Sesion</a></p>
                <a class="btn btn-primary btn-block" href="#" role="button">
                    <i class="fab fa-facebook-f"></i>LOGIN CON FACEBOOK</a>
                <a class="btn  btn-block go" href="#" role="button"><i class="fab fa-google"></i>LOGIN CON GOOGLE</a>
                <p class="mt-3 text-center">Al usar ésta aplicación, tú aceptas los <a href="#">Términos de uso</a> y <a
                        href="#">Política de privacidad</a></p>
            </article>
        </section>










        
</body>

</html>