<?php
$server = "localhost";
$user = "root"; 
$pass = "";
$bd = "example";

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$hash = password_hash($password, PASSWORD_BCRYPT);
$name=$_REQUEST['name'];
$lastname=$_REQUEST['lastname'];
$nombreimg=$_FILES['userpicture']['name'];//Nombre
$archivo=$_FILES['userpicture']['tmp_name'];//Archivo
$ruta="img";
$ruta=$ruta."/".$nombreimg; //ruta del archivo
move_uploaded_file($archivo, $ruta);
$conex=mysqli_connect($server,$user,$pass,$bd);
 if (!$conex) {
  die("Error: ".mysqli_connect_error());
 }
$query = "insert into users values('".$email."','".$hash."','".$name."','".$lastname."','".$ruta."',NOW())";
if(mysqli_query($conex, $query))
{
	echo "Insertado Correctamente";
}
else{
	echo "Error: ".mysqli_error($conex);
}
mysqli_close($conex);
?>