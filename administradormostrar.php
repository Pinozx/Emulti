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
                    <a style="color: white;" id="dLabel" role="button" data-toggle="dropdown" class="btn botonera" data-target="#" href="/page.html">GESTIONAR CUENTAS
                    </a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    <li class="dropdown">
                         <a tabindex="-1" href="administradormostrar.php">Mostrar</a>
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
                         <a tabindex="-1" href="administradormensaje.html">Enviar Mensaje</a>
                    </li>
                    </ul>
                </div>

                  </li>

</ul>


<div class="contenido">

<!-- Inicio Contenido Mostrar -->
<div class="table">
<label for="kwd_search">Buscar:</label> <input type="text" id="kwd_search" value=""/>
<table class="table" id="my-table" border="1" style="border-collapse:collapse">
<br><br>
<?php
              $link = mysqli_connect("localhost", "root", "");
              mysqli_select_db($link, "emulti");
              $result = mysqli_query($link, "SELECT runpadre, nombres, apellidos, email FROM padres");
              if ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
                  echo "<thead><tr><th>Run</th><th>Nombre</th><th>Apellido</th><th>Email</th></tr></thead> \n";
                  do {
                      echo "<tbody><tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr></tbody> \n";
                     } while ($row = mysqli_fetch_array($result, MYSQLI_NUM));
                      }
              else {
              echo "¡ No se ha encontrado ningún registro !";
                      }

?>
</table>
</div>

<!-- Fin contenido Mostrar -->
</div>






    </div>
</div>
            </div>

        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"> </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">

        // When document is ready: this gets fired before body onload 🙂
$(document).ready(function(){
    // Write on keyup event of keyword input element
    $("#kwd_search").keyup(function(){
        // When value of the input is not blank
        if( $(this).val() != "")
        {
            // Show only matching TR, hide rest of them
            $("#my-table tbody>tr").hide();
            $("#my-table td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            // When there is no input or clean again, show everything back
            $("#my-table tbody>tr").show();
        }
    });
});
// jQuery expression for case-insensitive filter
$.extend($.expr[":"],
{
    "contains-ci": function(elem, i, match, array)
    {
        return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
});
    </script>

</body>

   <!--Inicio Footer-->
 <footer class="footer">
  <div class="container">
    <p class="Text-muted text-center">© 2016 emulti. Todos los derechos Reservados</p>
  </div>
 </footer>
    <!--Termino Footer-->

</html>
