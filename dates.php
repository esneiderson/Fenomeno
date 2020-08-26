<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilosp.css">
	<title></title>
</head>
<body bgcolor="8DFF33">
	<center>
     <?php
     error_reporting(0);
     $producto=$_POST['producto'];
     $precio=$_POST['precio'];

     $conexion=new mysqli("localhost", "root", "" , "trabajos");
     $sql= "INSERT INTO parcial VALUES (NULL, '$producto', ' $precio')";
     $ejecutar=mysqli_query($conexion, $sql);

     ?>
     <h1>  CORRECTO</h1>
 <div class="todos">
 <a href="llenar.php"><h1>  INGRESAR MAS PRODUCTOS </h1></a>

                        <a href="index.php">
                     <h1>HOME</h1>
                     </a>
            </div>

    </center>
</body>
</html>
