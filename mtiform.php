<?php
include("conexion.php");
$id = $_POST['idtestinte'];
$runpaciente = $_POST['runpaciente'];

?>

<!DOCTYPE html>
<html lang="en">

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
                    <div style="color: #B1DEF1;"class="profile-usertitle-name">
                        PROFESIONAL
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
                         <a tabindex="-1" href="profesionalhorario.html">Ver Horario</a>
                    </li>
                    </ul>
                </div>

                  </li>

                  <li role="presentation" >
                <div class="dropdown">
                  <a style="color: white;" id="dLabel" role="button" data-toggle="dropdown" class="btn botonera" data-target="" href="/page.html">MENSAJES</a>

                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                    <li class="dropdown">
                         <a tabindex="-1" href="profesionalmensaje.html">Enviar Mensaje</a>
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
<!-- modificado de aqui hasta el boton crear-->
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="form" action="mtiphp.php" method="POST" name="formmti" id="formmti">
            <h2 style="color:white">Modificar Test de Inteligencia</h2> <br>

      <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <label><h4 style="color:white">Fecha Evaluación</h4></label>
            <input type="date" name="fechacreacion" id="fechacreacion" class="form-control input-lg" placeholder="DD/MM/AAAA" tabindex="2">
          </div>
        </div>
      </div>


      <h4 style="color:white">Diagnostico</h4>
      <div class="form-group">
        <input type="text" name="diagnostico" id="diagnostico" class="form-control input-lg" placeholder="" tabindex="4">
      </div>




            <h4 style="color:white">Caracteristica Diagnostica</h4>
                <div class="row">
                  <div class="col-xs-12">
                  <input type="text" name="caracteristica" id="caracteristica" class="form-control input-lg" placeholder="" tabindex="2">
                      <br>
                  </div>
                </div>



          <h4 style="color:white">Fecha Reevaluación</h4>
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                <input type="date" name="fechareevaluacion" id="fechareevaluacion" class="form-control input-lg" placeholder="DD/MM/AAAA" tabindex="2">
                    <br>
                </div>
              </div>


          <h4 style="color:white">Sugerencias</h4>
              <div class="row">
                <div class="col-xs-12 ">
                  <textarea type="text" name="sugerencias" id="sugerencias" class="form-control" rows="8"></textarea>
                    <br>
                </div>
              </div>


            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
          <br>
          <input type="submit" value="Enviar" class="btn btn-primary btn-lg" tabindex="7">
        </div>


        <input name="idtestinte" type="hidden" value="<?php echo $id; ?>">
        <input name="runpaciente" type="hidden" value="<?php echo $runpaciente; ?>">
        </form>
    </div>
<br>




<!-- FIN CODIGO MENSAJE-->

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

</html>
