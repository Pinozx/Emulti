<?php

  include("conexion.php");
  include("profesionalcreacuentaapod.php");



  $runpadre=$_POST["runpadre"];
  $password=$_POST["password"];
  $email=$_POST["email"];
  $nombres=$_POST["nombres"];
  $apellidos=$_POST["apellidos"];
  $fechanacpadre=$_POST["fechanacpadre"];
  $direccion=$_POST["direccion"];
  $anteparto=$_POST["anteparto"];
  $asistenciaparto=$_POST["asistenciaparto"];
  $obs=$_POST["obs"];


  $resultado="INSERT INTO padres (runpadre, password, email, nombres,  apellidos, fechanacpadre, direccion, anteparto, asistenciaparto, obs) VALUES ('$runpadre','$password','$email','$nombres','$apellidos','$fechanacpadre','$direccion','$anteparto','$asistenciaparto','$obs')";

  mysqli_query($conexion,$resultado);

?>