<?php
ob_start();
include("conexion.php");

$id = $_POST['idintervencion'];
$runpaciente = $_POST['runpaciente'];
$fechaevaluacion = $_POST['fechaevaluacion'];
$objetivo = $_POST['objetivo'];
$actividad = $_POST['actividad'];
$evaluacion = $_POST['evaluacion'];
$sugerencias = $_POST['sugerencias'];

$sql = "UPDATE testintervencionpsicologica set runpaciente='$runpaciente', fechaevaluacion='$fechaevaluacion', objetivo='$objetivo', actividad='$actividad', evaluacion='$evaluacion', sugerencias='$sugerencias'
WHERE idintervencion = $id";

//$resultado=mysqli_query($conexion,$sql);

//echo $sql;

if(mysqli_query($conexion, $sql)){

  header('Location: profesional.php');
  ob_end_flush();
}else{
    echo 'Error: ' . mysqli_error($conexion);
}

?>
