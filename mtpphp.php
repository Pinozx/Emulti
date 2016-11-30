<?php
ob_start();
include("conexion.php");

$runpaciente=$_POST['runpaciente'];
$objetivo=$_POST['objetivo'];
$actividad=$_POST['actividad'];
$evaluacion=$_POST['evualuacion'];
$sugerencias=$_POST['sugerencias'];
$id=$_POST['id'];




$sql = "UPDATE testinteligencia set runpaciente=$runpaciente, objetivo='$objetivo', actividad='$actividad', evaluacion='$evaluacion', sugerencias='$sugerencias'
WHERE idintervencion=$id";
//$resultado=mysqli_query($conexion,$sql);

//echo $sql;

if(mysqli_query($conexion, $sql)){

  header('Location: profesional.php');
  ob_end_flush();
}else{
    echo 'Error: ' . mysqli_error($conexion);
}


?>
