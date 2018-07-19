<?php
//Database Config
$server = "localhost";
$user = "root";
$pass = "";
$bd = "adan";

//BlinterProfile
$leadership = 0;
$innovation = 0;
$teamwork = 0;
$management = 0;
$design = 0;
$development = 0;
$problemresolution = 0;
$sales = 0;
$communication = 0;
$community = 0;
$level = 1;
$experience = 0;

//Request
$nombre=$_REQUEST['name'];
$apellido=$_REQUEST['lastname'];
$nombreimg=$_FILES['imagen']['name'];//Nombre
$archivo=$_FILES['imagen']['tmp_name'];//Archivo
$ruta="img";
$ruta=$ruta."/".$nombreimg; //ruta del archivo
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$safepass=password_hash($password, PASSWORD_DEFAULT);

//Skills
$skill1 = $_REQUEST['skill1'];
$skill2 = $_REQUEST['skill2'];
$skill3 = $_REQUEST['skill3'];
//Primera Habilidad
if ($skill1 == "leadership" || $skill2 =="leadership" || $skill3 == "leadership"){
	$leadership = $leadership + 1;
}
if ($skill1 == "innovation") {
	$innovation = $innovation + 1;
}
if ($skill1 == "teamwork") {
	$teamwork = $teamwork +1;
}
if ($skill1 == "management") {
	$management = $management +1;
}
if ($skill1 == "design") {
	$design = $design +1;
}
if ($skill1 == "development") {
	$development = $development +1;
}
if ($skill1 == "problemresolution") {
	$problemresolution = $problemresolution +1;
}
if ($skill1 == "sales") {
	$sales = $sales +1;
}
if ($skill1 == "communication") {
	$communication = $communication +1;
}
if ($skill1 == "community") {
	$community = $community +1;
}
//Segunda Habilidad
if ($skill2 == "leadership") {
	$leadership = $leadership + 1;
}
	elseif ($skill2 == "innovation") {
		$innovation = $innovation + 1;
	}
	elseif ($skill2 == "teamwork") {
		$teamwork = $teamwork +1;
	}
	elseif ($skill2 == "management") {
		$management = $management +1;
	}
	elseif ($skill2 == "design") {
		$design = $design +1;
	}
	elseif ($skill2 == "development") {
		$development = $development +1;
	}
	elseif ($skill2 == "problemresolution") {
		$problemresolution = $problemresolution +1;
	}
	elseif ($skill2 == "sales") {
		$sales = $sales +1;
	}
	elseif ($skill2 == "communication") {
		$communication = $communication +1;
	}
	elseif ($skill2 == "community") {
		$community = $community +1;
	}
//Tercera Habilidad
if ($skill3 == "leadership") {
	$leadership = $leadership + 1;
}
	elseif ($skill3 == "innovation") {
		$innovation = $innovation + 1;
	}
	elseif ($skill3 == "teamwork") {
		$teamwork = $teamwork +1;
	}
	elseif ($skill3 == "management") {
		$management = $management +1;
	}
	elseif ($skill3 == "design") {
		$design = $design +1;
	}
	elseif ($skill3 == "development") {
		$development = $development +1;
	}
	elseif ($skill3 == "problemresolution") {
		$problemresolution = $problemresolution +1;
	}
	elseif ($skill3 == "sales") {
		$sales = $sales +1;
	}
	elseif ($skill3 == "communication") {
		$communication = $communication +1;
	}
	elseif ($skill3 == "community") {
		$community = $community +1;
	}

//Registro
move_uploaded_file($archivo, $ruta);
$conex=mysqli_connect($server,$user,$pass,$bd);
 if (!$conex) {
  die("Error: ".mysqli_connect_error());
 }
$query = "insert into usuarios values(
'',
'".$email."',
'".$safepass."',
'".$nombre."',
'".$apellido."',
'".$ruta."',
'".$leadership."',
'".$innovation."',
'".$teamwork."',
'".$management."',
'".$design."',
'".$development."',
'".$problemresolution."',
'".$sales."',
'".$communication."',
'".$community."',
'".$experience."',
'".$level."',
'NOW()')";

if(mysqli_query($conex, $query))
{
	echo "Registrado Correctamente";
	echo '<a href="index.html">Registrar Otro</a>'; 
}
else{
	echo "Error: ".mysqli_error($conex);
}
mysqli_close($conex);
?>