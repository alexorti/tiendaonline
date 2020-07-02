
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">


    <meta name="application-name" content="Tienda en Linea">
    <meta name="author" content="Alexander Ortiz">
    <meta name="description" content="Venta de Productos de gran varieda en todo lugar">
    <meta name="keywords" content="venta, productos, tienda online,">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="shortcut icon" href="images/favicons/favicon.ico" type="image/x-icon">
    <!-- <link rel="icon" type="image/png" href="images/favicon.ico"  > -->
    <link rel="manifest" href="manifest.json">
    

    

</head>

<body>
    <div class="container-fluid">
        <header class="row Cabecera d-flex justify-content-center align-items-center">
            <nav class="d-flex justify-content-md-around align-items-center">
                <div>
                    <img src="images/Logo.jpg" alt="">
                </div>
                <div class="Logins">
                    
              <!-- Creacion del Menu de Compras -->
              <?php if (isset($_COOKIE["Usuario"]) and ($_COOKIE["Usuario"] != null)){
                echo '<div class="Perfil">
                
                <div class="btn-group">
                <button
                  type="button"
                  class="btn btn-danger dropdown-toggle"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                
                  >'.$_COOKIE["Nombre"].'<i class="fas fa-shopping-cart"></i>
                </button>
                <div class="dropdown-menu ">
                  <a class="dropdown-item text-dark" href="#">Carrito</a>
                  <a class="dropdown-item text-dark" href="recuperar_contraseña.php">Cambiar Contraseña</a>
                  <a class="dropdown-item text-dark" href="home.php">Mi Cuenta</a>
                  <a class="dropdown-item text-dark" href="#">Mis Pedidos</a>
                  <div class="dropdown-divider"></div>
                  <a  data-toggle="modal" data-target="#exampleModal"
                  href="#" >Cerrar Sesion</a>
                </div>
              </div>
              </div>';
              }else{
                echo('<a href="login.php">INICIAR SESION</a>
                <a href="register.php">REGISTRARSE</a>');
              }
              ?>
              
                </div>
            </nav>
        </header>
              <!-- modal que me permite ver si esta seguro el usuario de cerrar session -->
              <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title " id="exampleModalLabel">¿Esta Seguro.?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Esta Seguro que desea cerrar sesion y abortar todas sus compras
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a href="cerrar_sesion.php" class="btn btn-danger">Cerrar Sesion</a>
      </div>
    </div>
  </div>
</div>


        <!-- modificacion de el pie de pagina  -->
        <!--  -->


        <footer class=" row PiePagina ">
            <div class="d-flex justify-content-sm-center">
                <ul>
                    <li><a href="index.php"><i class="fas fa-home"></i>Inicio</a></li>
                    <li><a href=""><i class="fas fa-users-cog"></i>Afiliarse</a></li>
                    <li><a href=""><i class="fas fa-handshake"></i> Servicios</a></li>
                    <li><a href=""><i class="fas fa-id-card"></i>Contratar</a></li>
                    <li><a href=""><i class="fas fa-coins"></i>Tarifas</a></li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>