<!DOCTYPE html>
<html lang="en">
<?php
    session_start();

    if(isset($_SESSION['profesional'])){

    }
    else{
      header("Location:login.html");
    }
 ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EMULTI</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">




</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top color-barra" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="img/emultilogo.png" class="logo-arriba" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a style="color:white;"href="profesional.php">Inicio</a>
                    </li>
                    <li>
                        <a style="color:white;"href="#">Quienes Somos</a>
                    </li>
                    <li>
                        <a style="color:white;"href="#">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
               <div class="izq">
                <div class="profile-userpic">
                <center>
                    <div class="bordefoto">
                      <img src="img/usuario2.png" class="img-responsive" alt="">
                </div>
                <br>


                </center>

                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div style="color: White; font-size: 18px ;"class="profile-usertitle-name">

                      <?php
                      require("conexion.php");

                  foreach ($_SESSION as $variable => $valor){
                    $usuario = mysqli_query($conexion,"  SELECT nombres,apellidos  FROM  profesional WHERE runprofesional = '$valor' ");
                    $row = mysqli_fetch_array($usuario);
                        echo utf8_encode($row['nombres'])," ", utf8_encode($row['apellidos']);
                          }
                          mysqli_close($conexion);
                ?>



                    </div>

                </div>
                <div class="profile-usermenu">
                    <ul class="nav">

                        <li>
                            <a style="color:white;" href="#">Ajustes de Cuenta </a>
                        </li>
                         <li>
                          <a style="color:white;" href="cerrarsesion.php">Salir de la Cuenta </a>
                        </li>
                        <li>
                            <a style="color:white;" href="#">Ayuda </a>
                        </li>
                    </ul>
                </div>

               </div>
            </div>

            <div class="col-lg-10">
            <div class="der">
            <img class="banner" src="img/banner.jpg" style="display: none;">

            <div class="row">



</div>

            <ul class="nav nav-tabs color-barrabtn">
                <li role="presentation" >
                <div class="dropdown">
                    <a style="color: white;" id="dLabel" role="button" data-toggle="dropdown" class="btn botonera" data-target="#" href="/page.html">TEST
                    </a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    <li class="dropdown-submenu">
                         <a tabindex="-1" href="#">Test Inteligencia</a>
                        <ul class="dropdown-menu">
                            <li><a href="cti.php">Crear</a></li>
                            <li><a href="mti.php">Modificar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a tabindex="-1" href="#">Test Intervencion Psicologica</a>
                        <ul class="dropdown-menu">
                              <li><a href="ctp.php">Crear</a></li>
                              <li><a href="mtp.php">Modificar</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
                </li>


                  <li role="presentation" >
                      <div class="dropdown">
                    <a style="color: white;" id="dLabel" role="button" data-toggle="dropdown" class="btn botonera" data-target="#" href="/page.html">HORARIO
                    </a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    <li class="dropdown">
                         <a tabindex="-1" href="profesionalhorario.php">Ver Horario</a>
                    </li>
                    </ul>
                </div>

                  </li>

                  <li role="presentation" >
                <div class="dropdown">
                    <a style="color: white;" id="dLabel" role="button" data-toggle="dropdown" class="btn botonera" data-target="#" href="/page.html">MENSAJES
                    </a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    <li class="dropdown">
                         <a tabindex="-1" href="profesionalmensaje.php">Enviar Mensaje</a>
                    </li>
                    </ul>
                </div>

                  </li>

                    <li role="presentation" >
                    <div class="dropdown">
                    <a style="color: white;" id="dLabel" role="button" data-toggle="dropdown" class="btn botonera" data-target="#" href="/page.html">CUENTAS PACIENTE
                    </a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    <li class="dropdown">
                         <a tabindex="-1" href="profesionalcreapaciente.php">Agregar Paciente</a>

                    </li>
                    </ul>
                </div>
                  </li>




                  <li role="presentation" >
                       <div class="dropdown">
                    <a style="color: white;" id="dLabel" role="button" data-toggle="dropdown" class="btn botonera" data-target="#" href="/page.html">CUENTAS APODERADO
                    </a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    <li class="dropdown">
                         <a tabindex="-1" href="profesionalcreacuentaapod.php">Crear Cuenta</a>

                    </li>
                    </ul>
                </div>
                  </li>

                                    <li role="presentation" >
                       <div class="dropdown">
                    <a style="color: white;" id="dLabel" role="button" data-toggle="dropdown" class="btn botonera" data-target="#" href="/page.html">CONSULTAS
                    </a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    <li class="dropdown">
                         <a tabindex="-1" href="cpa.php">Pacientes</a>
                         <a tabindex="-1" href="cca.php">Apoderados</a>
                         <a tabindex="-1" href="coti.php">Test Inteligencia</a>
                         <a tabindex="-1" href="cotp.php">Test Intervencion Psicologica</a>
                    </li>
                    </ul>
                </div>
                  </li>

                  <li role="presentation" >
                    <div class="dropdown">
                      <a style="color: white;" id="dLabel" role="button" class="btn botonera" data-target="#" href="chat.php">CHAT Global
                      </a>
                    </div>
                  </li>
</ul>


<!-- CONDIGO DE HORARIO -->
<div class="contenido">
    <div class="horario table-responsive">
    <table class="table">
     <thead>
       <tr style="background-color:white">
         <th>Hora</th>
         <th>Lunes</th>
         <th>Martes</th>
         <th>Miercoles</th>
         <th>Jueves</th>
         <th>Viernes</th>
        </tr>
     </thead>
     <tbody>
   <tr class="info">
    <td>Modulo 1</td>
    <td></td>
    <td>Consulta</td>
    <td></td>
    <td>Consulta</td>
    <td>Consulta</td>
  </tr>
  <tr style="background-color:white">
    <td>Modulo 2</td>
    <td></td>
    <td></td>
    <td></td>
    <td>Consulta</td>
    <td>Consulta</td>
  </tr>
  <tr class="info">
    <td>Modulo 3</td>
    <td>Consulta</td>
    <td></td>
    <td>Consulta</td>
    <td></td>
    <td></td>
  </tr>
  <tr style="background-color:white">
   <td>Modulo 4</td>
   <td>Consulta</td>
   <td></td>
   <td></td>
   <td></td>
   <td>Consulta</td>
 </tr>
 <tr class="info">
   <td>Modulo 5</td>
   <td></td>
   <td></td>
   <td>Consulta</td>
   <td></td>
   <td></td>
 </tr>
 <tr style="background-color:white">
   <td>Modulo 6</td>
   <td></td>
   <td></td>
   <td>Consulta</td>
   <td></td>
   <td>Consulta</td>
 </tr>
 <tr class="info">
  <td>Modulo 7</td>
  <td>Consulta</td>
  <td></td>
  <td></td>
  <td>Consulta</td>
  <td></td>
</tr>
<tr style="background-color:white">
  <td>Modulo 8</td>
  <td></td>
  <td>Consulta</td>
  <td></td>
  <td></td>
  <td>Consulta</td>
</tr>
<tr class="info">
  <td>Modulo 9</td>
  <td></td>
  <td></td>
  <td></td>
  <td>Consulta</td>
  <td></td>
</tr>

     </tbody>
   </table>
 </div>
<!-- FIN CODIGO HORARIO -->

    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

   <!--Inicio Footer-->
 <footer class="footer">
  <div class="container">
    <p class="Text-muted text-center">© 2016 EMULTI. Todos los derechos Reservados</p>
  </div>
 </footer>
    <!--Termino Footer-->

</html>
