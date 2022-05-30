<?php
include("conexion.php");
$con = conn();

$nombre=$_POST['usuario'];
$documento=$_POST['cedula'];

$consulta = "SELECT * FROM usuarios WHERE usuario='$nombre' AND Cedula='$documento'";
$resultado=mysqli_query($con,$consulta);    

$filas=mysqli_num_rows($resultado);

if($filas){
    if($nombre && $documento = $consulta){
        header("Location: ../FmChange.html");
    }
}

mysqli_close($con);
?>