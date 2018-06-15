<?php
$server = "localhost";
$user = "root"; 
$pass = "";
$bd = "adan";

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$hash= password_hash($password, PASSWORD_BCRYPT);
$username=$_REQUEST['username'];
$lastname=$_REQUEST['lastname'];
$nombreimg=$_FILES['userpicture']['name'];//Nombre
$archivo=$_FILES['userpicture']['tmp_name'];//Archivo

$ruta="assets/img/uploads";
$ruta=$ruta."/".$nombreimg; //ruta del archivo

move_uploaded_file($archivo, $ruta);

$conex=mysqli_connect($server,$user,$pass,$bd);
	if (!$conex) {
		die("Error: ".mysqli_connect_error());
	}

mysqli_query($conex,"SELECT * FROM usuarios");
$query= mysqli_query($conex,"INSERT INTO usuarios (email,password,name,lastname,userpicture,experience,created_at) 
VALUES ('$email','$hash','$username','$lastname','$ruta',1,NOW())");

if ($query){
	echo "Insertado Correctamente";
}else{
	echo ("Error al insertar: " . mysqli_error($conex));
}
mysqli_close($conex);
?>