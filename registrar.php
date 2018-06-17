<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "adan";


$nombre=$_REQUEST['name'];
$apellido=$_REQUEST['lastname'];
$nombreimg=$_FILES['imagen']['name'];//Nombre
$archivo=$_FILES['imagen']['tmp_name'];//Archivo
$ruta="img";
$ruta=$ruta."/".$nombreimg; //ruta del archivo
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$safepass=password_hash($password, PASSWORD_DEFAULT);
move_uploaded_file($archivo, $ruta);
$conex=mysqli_connect($server,$user,$pass,$bd);
 if (!$conex) {
  die("Error: ".mysqli_connect_error());
 }
$query = "insert into usuarios values('','".$email."','".$safepass."','".$nombre."','".$apellido."','".$ruta."','1','NOW()')";
if(mysqli_query($conex, $query))
{
	echo "Registrado Correctamente";
	echo '<a href="index.php">Registrar Otro</a>'; 
}
else{
	echo "Error: ".mysqli_error($conex);
}
mysqli_close($conex);
?>