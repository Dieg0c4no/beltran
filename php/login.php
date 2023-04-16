<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<title>Registrarse</title>
  <style>
  	form{ 
        width: 400px;
        margin-top:80px;
        margin-left: 90px;
        border-style:groove;
        border-width: 2px;
        padding-left: 4px;
        padding-top: 4px;
        padding-right: 4px;
        padding-bottom: 4px;
        border-color:skyblue;

        }
  	h2{margin-top: 20px;}
  	span{ color: blue; }
    .alert{ height: 60px; 
      margin-button: 30px;
      margin-top: 10px;  
    }

    h2 {margin-top: 0px;}
    
  </style>

</head>

<div class="alert alert-success" role="alert" >
  <h2>Por favor, registrarse</h2> 
</div>


<span class="border border-info ">
<form action="logueado.php" method="post">
  <div class="form-group">
    <label for="exampleInputText">Usuario</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="psw">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
</span>




 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
<?php
session_start();
$_SESSION['dato']='x';
error_reporting(0);
echo $_GET['msg'];

?>