<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

  	<?php
include ("conexion.php");
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$sql = "INSERT into formulario VALUES('$nombre','$apellido','$email')";
if ( mysqli_query ($conexion,$sql))
{
echo"<br>";
echo "<div class='alert alert-success' role='alert'>
  <h4 class='alert-heading'>Gracias por inscribirte!</h4>
  <p>En breve nos pondremos en contacto.</p>
  <hr>
  <p class='mb-0'>Los datos ingresados son:</p>

	Nombre: $nombre<br>
	Apellido: $apellido<br>
	Email: $email
</div>";

}
else{echo"error al enviar";}

?>



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
