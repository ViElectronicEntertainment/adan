<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "adan";

$email=$_REQUEST['email'];
$password=$_REQUEST[''];
$nombreimg=$_FILES['imagen']['name'];//Nombre
$archivo=$_FILES['imagen']['tmp_name'];//Archivo
$ruta="img";
$ruta=$ruta."/".$nombreimg; //ruta del archivo
move_uploaded_file($archivo, $ruta);
$conex=mysqli_connect($server,$user,$pass,$bd);
 if (!$conex) {
  die("Error: ".mysqli_connect_error());
 }
$query = "insert into productos values('','".$producto."','".$ruta."')";
if(mysqli_query($conex, $query))
{
	echo "Insertado Correctamente";
}
else{
	echo "Error: ".mysqli_error($conex);
}
mysqli_close($conex);
?>