<?php
ob_start();
include("conexion.php");

$id = $_POST['idtestinte'];
$runpaciente = $_POST['runpaciente'];
$fechacreacion = $_POST['fechacreacion'];
$diagnostico = $_POST['diagnostico'];
$fechareevaluacion = $_POST['fechareevaluacion'];
$caracteristica = $_POST['caracteristica'];
$sugerencias = $_POST['sugerencias'];

$sql = "UPDATE testinteligencia set runpaciente='$runpaciente', fechacreacion='$fechacreacion', diagnostico='$diagnostico', fechareevaluacion='$fechareevaluacion', caracteristica='$caracteristica', sugerencias='$sugerencias'
WHERE idtestinte = $id";

//$resultado=mysqli_query($conexion,$sql);

//echo $sql;

if(mysqli_query($conexion, $sql)){

  header('Location: profesional.php');
  ob_end_flush();
}else{
    echo 'Error: ' . mysqli_error($conexion);
}

?>
