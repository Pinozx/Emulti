<?php
include("conexion.php");


$runpadre=$_POST['runpadre'];
$runpaciente=$_POST['runpaciente'];
 $nombres=$_POST["nombres"];
 $apellidos=$_POST["apellidos"];
$fechanaci=$_POST['fechanaci'];
$curso=$_POST['curso'];
$repitencia=$_POST['repitencia'];



$sql = "INSERT INTO paciente (runpadre, runpaciente, nombres, apellidos, fechanaci, curso, repitencia)
VALUES ('$runpadre','$runpaciente','$nombres','$apellidos','$fechanaci','$curso','$repitencia')";

if ($conexion->query($sql) === TRUE) {
      header("location:profesionalcreapaciente.php");

}
mysqli_close($conexion);
?>
