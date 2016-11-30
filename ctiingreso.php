<?php
include("conexion.php");


$runpaciente=$_POST['runpaciente'];
$fechacreacion=$_POST['fechacreacion'];
$diagnostico=$_POST['diagnostico'];
$fechareevaluacion=$_POST['fechareevaluacion'];
$caracteristica=$_POST['caracteristica'];
$sugerencias=$_POST['sugerencias'];



$sql = "INSERT INTO testinteligencia (runpaciente, fechacreacion, diagnostico, fechareevaluacion, caracteristica, sugerencias)
VALUES ('$runpaciente','$fechacreacion','$diagnostico','$fechareevaluacion','$caracteristica','$sugerencias')";

if ($conexion->query($sql) === TRUE) {
      header("location:profesional.php");

}
mysqli_close($conexion);
?>
