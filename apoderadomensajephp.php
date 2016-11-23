<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mensaje</title>

    <style>
      body{
        margin: 0;
        padding: 0;
        font-family: helvetica;
        color: #333;
      }
      .container{
        padding: 20px;
        margin: auto;

      }
    </style>

    <script type="text/javascript">
      function Redireccionar(){
        window.location='apoderadomensaje.html'
      }
      setTimeout('Redireccionar()',4000);
    </script>

  </head>
  <body>
    <div class="container">
    
      <?php

      $msg = null;

            if (isset($_POST["phpmailer"]))
           {

          $nombre = htmlspecialchars($_POST["nombre"]);
          $email = htmlspecialchars($_POST["email"]);
          $asunto =htmlspecialchars( $_POST["asunto"]);
          $mensaje = $_POST["mensaje"];
          $adjunto = $_FILES["adjunto"];

              require "phpmailer/PHPMailerAutoload.php";

                $mail = new PHPMailer;

      		  //indico a la clase que use SMTP
                $mail->IsSMTP();

                //permite modo debug para ver mensajes de las cosas que van ocurriendo
                //$mail->SMTPDebug = 2;

      		  //Debo de hacer autenticaci�n SMTP
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "tls";

      		  //indico el servidor de Gmail para SMTP
                $mail->Host = "smtp.live.com";

      		  //indico el puerto
                $mail->Port = 25;

      		  //indico un usuario / clave de un usuario
                $mail->Username = "emulti@hotmail.com";
                $mail->Password = "proyecto16";

                $mail->From = "emulti@hotmail.com";

                $mail->FromName = "Administrador";

                $mail->Subject = $asunto;

                $mail->addAddress($email, $nombre);

                //Contenido del Mensaje
                $titulo = "Mensaje del Sitio Web EMULTI";
                $contenido = '<html>
                                <head>
                                  <title> ' . $titulo. ' </title>
                                </head>
                                  <body>
                                    <h1>Haz recibido un mesaje del Sitio Web de EMULTI</h1>
                                      <p>El Ususario <strong>' . $nombre . '</strong> te ha enviado el siguiente mensaje:</p>
                                      <p>' . $mensaje . '<br><br></p>
                                      <hr>
                                      <p>Este mensaje ha sido generado automaticamente desde EMULTI</p>
                                  </body>
                              </html>';


                $mail->MsgHTML($contenido);


             if ($adjunto ["size"] > 0)
            {

                $mail->addAttachment($adjunto ["tmp_name"], $adjunto ["name"]);
         }


                if($mail->Send()){
                echo "<h1>El mensaje se ha enviado correctamente</h1>";
              }
              else {
                echo "<h1>Se ha presentado un error en el envio del email</h1>";
              }

       }

      ?>
      <h2><img src="cargando.gif" alt="" />Te estamos redireccionando al Sitio Web...</h2>
    </div>

  </body>
</html>