<?php
include("conexion.php");
$con = conn();

$nombre=$_POST['usuario'];
$password=$_POST['password'];
$rol=$_POST['Roles()'];

$consulta = "SELECT * FROM usuarios WHERE usuario='$nombre' AND Rol='$rol' AND contraseña='$password'";
$resultado=mysqli_query($con,$consulta);    

$filas=mysqli_num_rows($resultado);

if($filas){
   switch($rol){
    case "Administrativo":
        header("Location: ../administrativo.html");
        break;
    case "Docente":
        header("Location: ../docente.html");
        break;
    case "Seguridad":
        header("Location: ../seguridad.html");
        break;
    case "Personal de aseo":
        header("Location: ../qrPA.html");
        break;
   }
} else{
    header("Location: ../main.html");
}

mysqli_close($con);
?>