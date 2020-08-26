<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilosp.css">
	<title>PRODUCTOS</title>
</head>
<body bgcolor="8DFF33">
	<div class="todos">

	 <center>
	<?php
    error_reporting(0);
	$user=$_POST['user'];
	$password=$_POST['password'];
	$contra=simon;
	$contra2=mudo123;

	if($user==$contra && $password==$contra2)
	{
		echo "BIENVENIDO ADMIN";
		?>

		<a href="llenar.php"><h1>INGRESAR</h1></a>

 
		<?php
	}

	else
	{
		echo "NO SABES LA CONTRASEÑA";

		?>

		<a href="datos.php">
			<h1>VOLVER</h1>
		</a>

 
		<?php
	}
       

       ?>

</center>
</div>
</body>
</html>
