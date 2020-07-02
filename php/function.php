<?php
/* Creacion de las funciones administratoras del sistemas */

/* VErificacion de los espacios vacios */

function EspacioVacios($Nombre,$Correo, $Usuario,$Telefono,$Direccion,$Contraseña_1,$Contraseña_2){
    if ((strlen(trim($Nombre)) == 0) || (strlen(trim($Correo)) ==0 ) || (strlen(trim($Usuario)) ==0) || (strlen(trim($Telefono)) == 0) ||(strlen(trim($Direccion)) == 0) ||(strlen(trim($Contraseña_1)) ==0) ||(strlen(trim($Contraseña_2)) == 0)) {
        return true;
    }
    else
    {
        return false;
    }
};

/* Verificacion de si existe el Correo$Correo */

function IsEmail($Correo){
    if (filter_var($Correo, FILTER_VALIDATE_EMAIL)) {
        # code...
        return true;
    }
    else{
        return false;
    }
};
/* Verificacion si coninciden las contraseñas*/
function ValidaContraseña($Contraseña_1, $Contraseña_2){
    if (strcmp($Contraseña_1,$Contraseña_2) !== 0) {
        # code...
        return false;
    }
    else
    {
    return true;
   }

 };

 /* Verficacion si el nombre de usuario existe */
 function UsuarioExiste($Usuario){
    global $DB;
    $Consulta = $DB->prepare("SELECT ID FROM usuarios  WHERE Usuario = ? LIMIT 1");
    $Consulta->bind_param("s",$Usuario);
    $Consulta->execute();
    $Consulta->store_result();
    $Num = $Consulta->num_rows;
    $Consulta->close();

    if ($Num > 0) {
        # code...
        return true;

    }
    else{
        return false;
    }
};

/*verificacion de si el correo electro existe en la base de dato */
function EmailExiste($Email){
    global $DB;

    $Consulta = $DB->prepare("SELECT Id FROM usuarios WHERE Correo = ? LIMIT 1");
    $Consulta->bind_param("s", $Email);
    $Consulta->execute();
    $Consulta->store_result();
    $Num = $Consulta->num_rows;
    $Consulta ->close();

    if ($Num > 0) {
        # code...
        return true;
    }
    else{
        return false;
    }
    
};
/* Estableciendo la seguridad a la Contraseña */

function HashPassword($Contraseña_1){
    $Hash = password_hash($Contraseña_1, PASSWORD_DEFAULT);
    return $Hash;
};

/*Generando un token de autenticacion de los datos */
function GeneraToken(){
    $Gen = md5(uniqid(mt_rand(), false));
    #genera cadena de adtos aleatorios;
    return $Gen;
 };
/* metiendo los Registros a la base de datos */

function RegistrarUsuario($Nombre,$Correo,$Usuario,$Telefono,$Direccion,$Contra_Hash,$Activo,$Token,$Tipo_Usuario){

    global $DB;
    $Consulta = $DB->prepare("INSERT INTO usuarios(Usuario, Password, Nombre, Correo ,Telefono,Direccion, Activacion, Token, Id_Tipo) VALUES(?,?,?,?,?,?,?,?,?)");
    $Consulta->bind_param('ssssssisi',$Usuario, $Contra_Hash, $Nombre, $Correo,$Telefono,$Direccion, $Activo, $Token, $Tipo_Usuario);

    if ($Consulta->execute()) {
        # code...
        return $DB->insert_id;/* me permite obtener el id de el ingreso */
    }
    else{
        return 0;
    }

 };

 /* Funcion que me permite enviar un correo electronico al usuario que se ha registrado */
 function EnviarEmail($Email, $Nombre, $Asunto, $Cuerpo){
    require_once 'PHPMailer/PHPMailerAutoload.php';

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '587';///como verificar si se cambia el puerto
        
        $mail->Username = 'alexandercvo2202@gmail.com';
        $mail->Password = 'chaquirita1998';
        
        $mail->setFrom('alexandercvo2202@gmail.com', 'Registro');
        $mail->addAddress($Email, $Nombre);
        
        $mail->Subject = $Asunto;
        $mail->Body    = $Cuerpo;
        $mail->IsHTML(true);
        
        if($mail->send())
        return true;
        else
        return false;
 }

 /* Funcion que me permite mostrar los mensajes durante el proceso de registro */
 function Errores($Errores){
    if ($Errores>0) {
        # code...
        echo "<div id='error' class='ale' role='alert'>
            <a href='#' onclick=\"showHide('error');\">[X]</a>
            <ul>";

            foreach ($Errores as$Error) {
                # code...
                echo "<li>".$Error."</li>";
            }
            echo "</ul>";
            echo "</div>";

    }
 }
 /* Funcio que verifica si el token existe */

 
function ValidaToken($Id, $Token){
    global $DB;
    $Consulta = $DB->prepare("SELECT Activacion FROM usuarios WHERE Id = ? AND Token = ? LIMIT 1");
    $Consulta->bind_param("is", $Id, $Token);
    $Consulta->execute();
    $Consulta->store_result();
    $Rows = $Consulta->num_rows;


    if ($Rows > 0) {
        # code...
        $Consulta->bind_result($Activacion);
        $Consulta->fetch();

        if ($Activacion == 1) {
            # code...
            $msg = "la cuenta ya se activo anteriormente.";
        }
        else{
            if (ActivarUsuario($Id)) {
                # code...
                $msg = 'Cuenta Activada';
            }
            else{
                $msg = 'Error al activar la cuenta';
            }
        }
    }
else{
    $msg = "No existe el registro para activar";
}
return $msg;
}

/* permite hacer la activacion del Usuario */

function ActivarUsuario($Id){
    global $DB;
    $Consulta = $DB->prepare("UPDATE usuarios SET Activacion = 1 WHERE Id = ?");
    $Consulta->bind_param('s', $Id);
    $result = $Consulta->execute();
    $Consulta->close();
    return $result;
}

/*Verificacion de que el usuario y la contraseña no esten vacios*/
function IsNullLogin($Usuario, $Contraseña){
    if (strlen(trim($Usuario)) ==0  || strlen(trim($Contraseña)) == 0) {
        # code...
        return true;
    }
    else{
        return false;
    }
}
/*Permite verificar si el nombre de usuario o correo existen */
function Ingresar($Usuario, $Contraseña){
    global $DB;
    $Correo = $Usuario;

    $Consulta = $DB->prepare("SELECT Id, Id_tipo, Password,Usuario FROM usuarios WHERE Usuario = ? || Correo = ? LIMIT 1");
    $Consulta->bind_param("ss",$Usuario, $Correo);
    $Consulta->execute();
    $Consulta->store_result();
    $Rows = $Consulta->num_rows;

    if ($Rows>0) {
        # code...
        if (IsActivo($Usuario)) {
            # code...
            $Consulta->bind_result($id, $id_tipo, $passwd,$Apodo);
            $Consulta->fetch();

            $ValidaPassw = password_verify($Contraseña, $passwd);

            if ($ValidaPassw) {
                # code...
                LastSession($id);
                $_SESSION['id_usuario'] = $id;
                $_SESSION['tipo_usuario'] = $id_tipo;
                
                setcookie("Usuario",$id,time()+1800);
                setcookie("Nombre",$Apodo,time()+1800);
                header("location: home.php");
            }
            else{
                $Errores = "La Contraseña es incorrecta";
            }
        }
        else{
            $Errores = "El usuario no esta activo por favor inicie sesion en su correo electronico para activar";
        }
    }
    else{
        $Errores = "El nombre de usuario o correo electronico no existe";
    }
    return $Errores;
}

/* Permite verificar si el usuario esta activo mediante el correo electronico */

function IsActivo($Usuario){
    global $DB;
    $Correo = $Usuario;
    $Consulta = $DB->prepare("SELECT Activacion FROM usuarios WHERE Usuario = ? || Correo = ? LIMIT 1");
    $Consulta->bind_param('ss', $Usuario, $Correo);
    $Consulta->execute();
    $Consulta->bind_result($Activacion);
    $Consulta->Fetch();

    if ($Activacion == 1) {
        # code...
        return true;

    }
    else{
        return false;
    }

}
/* Permite verificar el ultimo inicio de Sesion por parte del Usuario */

function LastSession($id){
    global $DB;

    $Consulta = $DB->prepare("UPDATE usuarios SET Last_session=NOW(), Token_password='', Password_request=1 WHERE Id = ?");

    $Consulta->bind_param('s',$id);
    $Consulta->execute();
    $Consulta->Close();
}

/* Funcion para Obtener los valores para */

function GetValor($Campo, $CampoWhere, $Valor){
    global $DB;

$Consulta =$DB->prepare("SELECT $Campo FROM usuarios WHERE $CampoWhere = ? LIMIT 1");
$Consulta->bind_param('s', $Valor);
$Consulta->execute();
$Consulta->store_result();
$Num = $Consulta->num_rows;


if ($Num > 0) {
   # code...
   $Consulta->bind_result($_campo);
   $Consulta->fetch();
   return $_campo;
}
else{
   return null;
}

}
/* Funcion que genera el token de la contraseña */
function GeneraTokenContra($User_Id){
    global $DB;

    $Token = GeneraToken();


    $Consulta = $DB->prepare("UPDATE Usuarios SET Token_password=?, Password_request=1 WHERE Id = ?");
    $Consulta->bind_param('ss', $Token, $User_Id);
    $Consulta->execute();
    $Consulta->close();
    return $Token;

   }

/* Funcion que permite recibir los datos para poder hacer el cambio de la contraseña */
function VerificaTokenPass($User_Id, $Token){
    global $DB;

    $Consulta= $DB->prepare("SELECT Activacion FROM usuarios WHERE Id = ? AND Token_password = ? AND Password_request = 1 LIMIT 1");
    $Consulta->bind_param("is", $User_Id, $Token);
    $Consulta->execute();
    $Consulta->store_result();
    $Num = $Consulta->num_rows;

    if ($Num > 0) {
        # code...
        $Consulta->bind_result($activacion);
        $Consulta->fetch();

        if ($activacion == 1) {
            # code...
            return true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }



}

/* Funcion que permite realizar el cambio de la contraseña o actualizarla */
function CambioContraseña($Contraseña, $User_Id, $Token){
    global $DB;
    $Consulta = $DB->prepare("UPDATE usuarios SET password = ?, Token_password='', Password_request=0 WHERE Id = ? AND Token_password = ?");

    $Consulta->bind_param('sis', $Contraseña, $User_Id, $Token);
    
    if ($Consulta->execute()) {
        # code...
        return true;
    }
    else{
        return false;
    }
}


?>