<?php
ob_start();
  include("conexion.php");


  $runpaciente=$_POST["runpaciente"];
  $objetivo=$_POST["objetivo"];
  $actividad=$_POST["actividad"];
  $evaluacion=$_POST["evaluacion"];
  $sugerencias=$_POST["sugerencias"];


$sql = "INSERT INTO testintervencionpsicologica (runpaciente, objetivo, actividad, evaluacion, sugerencias) VALUES ('$runpaciente','$objetivo','$actividad','$evaluacion','$sugerencias')";

if(mysqli_query($conexion, $sql)){

  header('Location: profesional.php');
  ob_end_flush();
}else{
    echo 'Error: ' . mysqli_error($conexion);
}
?>
