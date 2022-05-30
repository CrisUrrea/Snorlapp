<?php
include("conexion.php");
$con = conn();

$usuario=$_POST['usuario'];
$rol=$_POST['roles()'];


$actualizar = "UPDATE `usuarios` SET `Rol`='$rol' WHERE usuario='$usuario'";
$verificar=mysqli_query($con,$actualizar);

header("Location: ../seguridad.html#slide3");
mysqli_close($con);
?>