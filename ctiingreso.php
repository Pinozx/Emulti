<?php
ob_start();
include("conexion.php");


$runpaciente=$_POST['runpaciente'];
$fechacreacion=$_POST['fechacreacion'];
$diagnostico=$_POST['diagnostico'];
$fechareevaluacion=$_POST['fechareevaluacion'];
$caracteristica=$_POST['caracteristica'];
$sugerencias=$_POST['sugerencias'];



$sql = "INSERT INTO testinteligencia (runpaciente, fechacreacion, diagnostico, fechareevaluacion, caracteristica, sugerencias)
VALUES ('$runpaciente','$fechacreacion','$diagnostico','$fechareevaluacion','$caracteristica','$sugerencias')";




if(mysqli_query($conexion, $sql)){

  header('Location: profesional.php');
  ob_end_flush();
}else{
    echo 'Error: ' . mysqli_error($conexion);
}

?>
