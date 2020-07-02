<?php 

require 'PHP/conexion.php';
require 'PHP/function.php';
///Retomamos La Sesion con la cula hemos entrado
session_start();
///Eliminamos las variables de Sesion
$_SESSION = array();
//Eliminamos la cookie del usuario que identifcaba a esa sesión, verifcando "si existía"
if (ini_get("session.use_cookies")==true) {
	$parametros = session_get_cookie_params();
	setcookie(session_name(), '', time()-99999,
	$parametros["path"], $parametros["domain"],
	$parametros["secure"], $parametros["httponly"]);
}
///Destruyo los cokies creados para el usuario
	unset($_COOKIE["Usuario"]);
	$_COOKIE["Usuario"] == null;
	setcookie("Usuario",false);
	setcookie("Nombre",false);

//Eliminando el archivo de ejecucion de la sesion
session_destroy();

///Regresando al archivo de inisio de sesion
header("location: index.php");

 ?>
