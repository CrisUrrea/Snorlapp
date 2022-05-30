<?php
function conn(){
$servername = "localhost";
$username = "root";
$password = "";
$database= "snorlapp";

// Create connection
$con = mysqli_connect($servername,$username,$password,$database);
//mysqli_select_db($db,$con) or die ("Error de conexion con la base de datos".msqli_error());
return $con;

}
?>