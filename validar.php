<?php

$user=$_POST['usuario'];
$password=$_POST['password'];

$conexion1= mysqli_connect("localhost","root","","emulti");
$conexion2= mysqli_connect("localhost","root","","emulti");
$conexion3= mysqli_connect("localhost","root","","emulti");



$padre= mysqli_query($conexion1,"SELECT * FROM padres WHERE runpadre = '$user' AND password = '$password'");
mysqli_close($conexion1);
$profesional= mysqli_query($conexion2,"SELECT * FROM profesional WHERE runprofesional = '$user' AND password = '$password'");
mysqli_close($conexion2);
$administrador= mysqli_query($conexion3,"SELECT * FROM administrador WHERE user = '$user' AND password = '$password'");
mysqli_close($conexion3);



if(mysqli_fetch_array($padre) > 0)
{
    /* Si entra en este if significa que el que intenta acceder es un alumno,
    por lo tanto le creamos una sesión */
    session_start();

    $_SESSION['padre']="$user";



    /* Nos dirigimos al espacio de los alumnos usando header que nos
    redireccionará a la página que le indiquemos */
    header("Location:apoderado.php");

    /* terminamos la ejecución ya que si redireccionamos ya no nos interesa
    seguir ejecutando código de este archivo */
    exit();
}

/* Ahora comprobamos si el que intenta acceder es un profesor */
else if(mysqli_fetch_array($profesional) > 0)
{
    session_start();
    $_SESSION['profesional']="$user";
    header("Location:profesional.php");
    exit();
}
else if(mysqli_fetch_array($administrador) > 0)
{
    session_start();
    $_SESSION['administrador']="$user";
    header("Location:administrador.html");
    exit();
}
else
{
   /* Si no el usuario no se encuentra en ninguna de las tres tablas
   imprime el siguiente mensaje */

    header("Location:login.html");

}
