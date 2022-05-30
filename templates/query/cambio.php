<?php
include("conexion.php");
$con = conn();

$password=$_POST['impresion'];
$usuario=$_POST["cristhian.urreaat"];

$consulta = "UPDATE `usuarios` SET `contraseña`='$password' WHERE usuario='cristhian.urreaat'";
$resultado=mysqli_query($con,$consulta);

header("Location: ../main.html");
mysqli_close($con);
?>