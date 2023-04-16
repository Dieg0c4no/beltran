

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<style type="text/css">
	body{
		background-color:#F3F6E8 ;
		margin-top: 50px;
		margin-left: 30px;
	}
	.alert{margin-right: 20px;

	}
</style>
</head>
<body>
	<div class="container-md">
	<div class="alert alert-success" role="alert">
  <h3 class="alert-heading">Resultados!</h3>
  <p>Estos son los alumnos que completaron el formulario.</p>
  <hr>
  <p class="mb-0">Usted puede realizar modificaciones a los datos ingresados presionando <a href="opciones.html" class="alert-link">aqui.</a></p>
</div>

 
<?php

include("conexion.php");
$buscar=$_POST['buscar'];
$sql="SELECT * FROM formulario WHERE nombre like'%$buscar%'";
$consulta=mysqli_query($conexion,$sql);

echo"<table class=table-bordered border-primary border=2 callspacing=2 cellpadding=2>";
echo"<td bgcolor='#ff99cc'>"."<h4>"."Nombre" ."</h4>". "</td>";
echo"<td bgcolor='#ff99cc'>"."<h4>"."Apellido" ."</h4>". "</td>";
echo"<td bgcolor='#ff99cc'>"."<h4>"."Mail" ."</h4>". "</td>";

while($registro=mysqli_fetch_row($consulta)){

echo"<tr>";
echo"<td>".$registro[0]."</td>";
echo"<td>".$registro[1]."</td>";
echo"<td>".$registro[2]."</td>";
echo"</tr>";
}
echo"</table>";

?>

<medium style="float:left; margin-top: 20px;"><a href="logout.php">Cerrar la sesión</a></medium>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>