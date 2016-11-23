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


<!-- CONDIGO DE MENSAJE-->

<!--                    FORMULARIO MODIFICADO                            -->

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="formprofcc" action="profesionalcreacuentaapodphp.php" method="POST" name="formcti" id="formprofcc">
            <h2 style="color:white">Registrar Apoderado</h2> <br>
            <h4 style="color:white">Run Padre</h4>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                <input type="text" name="runpadre" id="first_name" class="form-control input-lg" placeholder="Run completo sin guion" tabindex="1">
                    </div>

            <h4 style="color:white">Contraseña</h4>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Escribir Contraseña" tabindex="5">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirma Contraseña" tabindex="6">
                    </div>
                </div>
            </div>

            <h4 style="color:white">Email</h4>
            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email@ejemplo.com" tabindex="4">
            </div>

            <h4 style="color:white">Nombre Apoderado</h4>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                <input type="text" name="nombres" id="fnombres" class="form-control input-lg" placeholder="Nombres" tabindex="1">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="apellidos" id="apellidos" class="form-control input-lg" placeholder="Apellidos" tabindex="2">
                    </div>
                </div>
            </div>


            <div class="row">

              <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group">
                  <label><h4 style="color:white">Fecha Nacimiento</h4></label>
                  <input type="date" name="fechanacpadre" id="fechanacpadre" class="form-control input-lg" placeholder="AAAA-MM-DD" tabindex="1">
                </div>
              </div>

              <div class="col-xs-12 col-sm-7 col-md-7">
                <div class="form-group">
                  <label style="color:white"><h4>Direccion</h4></label>
                  <input type="text" name="direccion" id="direccion" class="form-control input-lg" placeholder="Calle" tabindex="1">
                </div>
              </div>

            </div>

            <h4 style="color:white">Antecedentes del Parto</h4>
            <div class="form-group">
              <input type="text" name="anteparto" id="anteparto" class="form-control input-lg" placeholder="" tabindex="4">
            </div>

            <h4 style="color:white">Asistencia del Parto</h4>
            <div class="form-group">
              <input type="text" name="asistenciaparto" id="asistenciaparto" class="form-control input-lg" placeholder="" tabindex="4">
            </div>

            <h4 style="color:white">Observaciones</h4>
            <div class="form-group">
              <input type="text" name="obs" id="obs" class="form-control input-lg" placeholder="" tabindex="4">
            </div>





<!-- OTRA EJEMPLO DE UN ROW DE EMAIL

            <h4 style="color:white">Email</h4>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="from-group">
                  <input class="form-control input-lg" type="text" id="nombre" placeholder="Email">
                </div>
              </div>


                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">@</div>
                        <input class="form-control input-lg"type="text" id="email" placeholder="ejemplo.com">
                      </div>
                    </div>
                  </div>

              </div>

-->


            <div class="row">
                <div class="col-xs-12 col-md-6">

          <input type="submit" value="Registrar" class="btn btn-primary btn-lg" tabindex="7">
        </div>



        </form>
    </div>
<br>

<!-- FIN CODIGO MENSAJE-->

    </div>
            </div> <!-- FIN DE LA MODIFICACION -->
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

</html>
