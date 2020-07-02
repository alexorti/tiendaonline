<?php
$DB  = new mysqli('localhost','root','','tiendaonline');

if (mysqli_connect_errno()){
    # code...

    echo 'Conexion Fallida:    ', mysqli_connect_error();
    exit();
}




?>