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

    <div style="padding:0px 30px;" class="form-center">
      <a class="btn btn-primary btn" href="javascript:history.back(1);">Volver Atras</a>
    </div>

    <div class="container">
			<section style="padding:0px 200px;">
				<div class="row">
					<h1 class="text-center">EMULTI <small>Chat</small></h1>
					<hr>
				</div>
				<div class="row">
					<form id="formChat" role="form">
						<div class="form-group">
							<label for="user">Usuario</label>
							<input type="text" class="form-control" id="user" name="user" placeholder="Introduzca un Usuario" required>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12" >
									<div id="conversation" style="height:200px; border: 1px solid #CCCCCC; padding: 12px;  border-radius: 5px; overflow-x: hidden;">

									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="message">Mensaje</label>
							<textarea id="message" name="message" placeholder="Intruzca Mensaje"  class="form-control" rows="3"></textarea>
						</div>
						<button id="send" class="btn btn-primary btn-lg" style="background-color: green;" >Enviar</button>
					</form>
				</div>
			</section>
		</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script>

			$(document).on("ready", function(){
				registerMessages();
				$.ajaxSetup({"cache":false});
				setInterval("loadOldMessages()", 500);
			});

			var registerMessages = function(){
				$("#send").on("click", function(e){
					e.preventDefault();
					var frm = $("#formChat").serialize();
					$.ajax({
						type: "POST",
						url: "register.php",
						data: frm
					}).done(function(info){
						$("#message").val("");
						var altura = $("#conversation").prop("scrollHeight");
						$("#conversation").scrollTop(altura);
						console.log(info);
					})
				});
			}

			var loadOldMessages = function(){
				$.ajax({
					type: "POST",
					url: "conversation.php"
				}).done(function(info){
					$("#conversation").html( info );
					$("#conversation p:last-child").css({"background-color": "lightgreen",
																							 "padding-botton": "20px"});
					var altura = $("#conversation").prop("scrollHeight");
					$("#conversation").scrollTop(altura);
				});
			}

		</script>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

   <!--Inicio Footer-->
 <footer class="footer">
  <div class="container">
    <p class="Text-muted text-center">© 2016 emulti. Todos los derechos Reservados</p>
  </div>
 </footer>
    <!--Termino Footer-->

</html>
