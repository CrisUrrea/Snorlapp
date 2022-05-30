<?php
include("conexion.php");

$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApellido'];
$rol=$_POST['rol'];
$cedula=$_POST['txtCedula'];

    $con=conn();
    $sql="INSERT INTO registro(Nombre, Apellido, Cedula, Rol) 
    VALUES('$nombre', '$apellido', '$cedula', '$rol')";
    $result=mysqli_query($con,$sql);
    mysqli_close($con);
    header("Location: ../qrO.html")
?>