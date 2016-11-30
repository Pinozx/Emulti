<?php

  include("conexion.php");




  $runpaciente=$_POST["runpaciente"];
  $fechaevaluacion=$_POST["fechaevaluacion"];
  $objetivo=$_POST["objetivo"];
  $actividad=$_POST["actividad"];
  $evaluacion=$_POST["evaluacion"];
  $sugerencias=$_POST["sugerencias"];


$sql = "INSERT INTO testintervencionpsicologica (runpaciente, fechaevaluacion, objetivo, actividad, evaluacion, sugerencias) VALUES ('$runpaciente','$fechaevaluacion','$objetivo','$actividad','$evaluacion','$sugerencias')";

if ($conexion->query($sql) === TRUE) {
 header("location:profesional.php");
}

mysqli_close($conexion);
?>
