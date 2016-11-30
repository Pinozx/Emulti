
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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong>MI CUENTA</strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>Nombre Apellido</strong></p>
                                        <p class="text-left small">correoElectronico@email.com</p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm">Ajuste de la Cuenta</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="#" class="btn btn-danger btn-block">Cerrar Sesion</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
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
            <div class="col-lg-12">
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
        <form role="form" action="ctpphp.php" method="POST" name="formctp" id="formctp">
            <h2 style="color:white">Crear Test Psicologico</h2> <br>
            <h4 style="color:white">Run Paciente</h4>
            <div class="form-group">

                       <select class="form-control input-lg" id="sel1" name="runpaciente">
                       <?php
                       include("conexion.php");
                       $consulta="SELECT runpaciente, nombres, apellidos from paciente";
                                         $resultado=mysqli_query($conexion,$consulta);

                                                while($lista=mysqli_fetch_array($resultado)){
        ?>
                         <option value=<?php echo $lista['runpaciente'] ?> >  <?php echo $lista['nombres'] . " " . $lista['apellidos']; ?> </option>
        <?php }  ?>

                       </select>
                       </div>

      <div class="row">

        <div class="col-xs-12 ">
          <div class="form-group">
            <label><h4 style="color:white">Fecha Evaluación</h4></label>
            <input type="date" name="fechaevaluacion" id="fechaevaluacion" class="form-control input-lg" placeholder="DD/MM/AAAA" tabindex="2">
          </div>
        </div>
      </div>

      <h4 style="color:white">Objetivo</h4>
      <div class="form-group">
        <input type="text" name="objetivo" id="objetivo" class="form-control input-lg" placeholder="" tabindex="4">
      </div>


        <h4 style="color:white">Actividad</h4>
            <div class="row">
              <div class="col-xs-12">
                <textarea type="text" name="actividad" id="actividad" class="form-control" rows="3"></textarea>
                  <br>
                </div>
          </div>

          <h4 style="color:white">Evaluación</h4>
              <div class="row">
                <div class="col-xs-12">
                  <textarea type="text" name="evaluacion" id="evaluacion" class="form-control" rows="4"></textarea>
                    <br>
                </div>
              </div>

            <h4 style="color:white">Sugerencias</h4>
                <div class="row">
                  <div class="col-xs-12">
                    <textarea type="text" name="sugerencias" id="sugerencias" class="form-control" rows="8"></textarea>
                      <br>
                  </div>
                </div>



            <div class="row">
                <div class="col-xs-12 col-md-6">

          <input type="submit" value="Enviar" class="btn btn-primary btn-lg" tabindex="7" style="background-color: green;">
        </div>



        </form>
    </div>
<br>

<!-- FIN CODIGO MENSAJE-->

    </div>
            </div>  <!-- FIN DE LA MODIFICACION -->
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
