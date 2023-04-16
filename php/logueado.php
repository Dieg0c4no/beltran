<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<title>Logueado</title>
</head>
<body>


</body>

</html>
<?php
session_start();
if(isset($_SESSION['dato'])){
include("conexion.php");
$usuario=$_POST['usuario'];
$psw=$_POST['psw'];
$sql="SELECT * from usuarios WHERE usuario='$usuario' and psw='$psw'";
$consulta=mysqli_query($conex,$sql);
$existe=mysqli_num_rows($consulta);
}
if ($existe==1) {
	header("location:restringido.php");
	
}else{

	header("location:login.php?msg=Ingrese%20usuario%20y%20contraseña");

	
}

?>