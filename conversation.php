<?php
$bd = "emulti";
$server = "localhost";
$user = "root";
$password= "";

$conexion = @mysqli_connect($server, $user, $password, $bd);
if( !$conexion )  die("Error de conexion".mysqli_connect_error() );


$result = mysqli_query($conexion, "SELECT usuario, mensaje FROM conversation order by idConversation asc");


while($data = mysqli_fetch_assoc($result)){
  echo "<p><b>".$data["usuario"]."</b> dice: ".$data["mensaje"]."</p>";
}

 ?>
